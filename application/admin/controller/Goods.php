<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/29
 * Time: 22:50
 */
namespace app\admin\controller;

use catetree\Catetree;

use think\Controller;

class Goods extends Controller
{
    //商品列表
    public function lst()
    {
        //组合查询条件
        $join = [
            ['category cy','gs.category_id = cy.id','LEFT'],
            ['brand bd','gs.brand_id = bd.id','LEFT'],
            ['type te','gs.type_id = te.id','LEFT'],
            ['product pt','pt.goods_id = gs.id','LEFT']
        ];
        //查询所有商品数据
        $goodsAll = db('goods')->alias('gs')->field('gs.*,cy.cate_name,bd.brand_cname,te.type_name,sum(pt.goods_num) kucun')->join($join)->group('gs.id')->paginate(10);

        return view('admin@goods/lst',['goodsAll'=>$goodsAll]);
    }

    //商品添加
    public function add()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //表单验证
            $validate = new \app\admin\validate\Goods();

            if ( !$validate->check($data) )
            {
                $this->error( $validate->getError() );
            }

            //执行添加操作
            $goodsAdd = model('goods')->save( $data );

            if( $goodsAdd )
            {
                $this->success('添加商品成功','lst');
            }
            else
            {
                $this->error('添加商品失败');
            }

            return ;
        }


        //查询所有商品类型
        $typeAll = db('type')->select();

        //查询所有的会员等级
        $levelAll = db('member_level')->select();

        //查询所有品牌
        $brandAll = db('brand')->select();

        //查询所有商品分类,调用无限极分类
        $cateTree = new Catetree();

        //查询所有商品分类
        $category = db('category')->select();

        //商品分类全部读取
        $categoryAll = $cateTree->sort($category);

        //分配数据到模板
        $this->assign([
            'levelAll' => $levelAll,
            'typeAll' => $typeAll,
            'brandAll' => $brandAll,
            'categoryAll' => $categoryAll
        ]);

        return view();
    }

    //商品编辑
    public function edit()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //表单验证
            $validate = new \app\admin\validate\Goods();

            if ( !$validate->check($data) )
            {
                $this->error( $validate->getError() );
            }

            //执行添加操作
            $goodsUpdate = model('goods')->update( $data );

            if( $goodsUpdate !== false )
            {
                $this->success('修改商品成功','lst');
            }
            else
            {
                $this->error('修改商品失败');
            }

            return ;
        }


        //查询所有商品类型
        $typeAll = db('type')->select();

        //查询所有的会员等级
        $levelAll = db('member_level')->select();

        //查询所有品牌
        $brandAll = db('brand')->select();

        //查询所有商品分类,调用无限极分类
        $cateTree = new Catetree();

        //查询所有商品分类
        $category = db('category')->select();

        //商品分类全部读取
        $categoryAll = $cateTree->sort($category);

        //查询商品基本信息
        $goods = db('goods')->find(input('id'));

        //查询会员价格
        $memberPrice = db('member_price')->where('goods_id','=',input('id'))->select();

        //重组会员价格数组
        $member_price = [];

        foreach ($memberPrice as $k => $v)
        {
            $member_price[$v['mlevel_id']] = $v;
        }

        //查询指定相册
        $photos = db('photo')->where('goods_id','=',input('id'))->select();

        //分配数据到模板
        $this->assign([
            'levelAll' => $levelAll,
            'typeAll' => $typeAll,
            'brandAll' => $brandAll,
            'categoryAll' => $categoryAll,
            'goods' => $goods,
            'memberprice' => $member_price,
            'photo' => $photos
        ]);

        return view();
    }

    //商品删除(注：商品删除无页面)
    public function del($id)
    {
        //实例化模型
        $goodsDel = model('goods')->destroy($id);

        //判断是否删除成功
        if( $goodsDel !== false )
        {
            $this->success('删除商品成功','lst');
        }
        else
        {
            $this->error('删除商品失败');
        }
    }

    //商品库存添加
    public function product_num($id)
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //实例化库存表
            $product = db('product');

            //修改之前先删除原有的
            $product->where('goods_id','=',$id)->delete();

            //接收表单数据
            $data = input('post.');

            //接收商品属性表单值
            $goods_attr_id = $data['goods_attr'];

            //接收商品库存值
            $goods_num = $data['goods_num'];

            //循环库存
            foreach ( $goods_num as $k => $v )
            {

                 //定义储存属性ID的值数组
                 $goodsAttr = [];

                 //循环商品属性值
                 foreach ( $goods_attr_id as $k1 => $v1 )
                 {
                     //判断是否选中为空,如果为空就跳过
                      if( intval($v1[$k]) <= 0 )
                      {
                          continue 2;
                      }

                      $goodsAttr[] = $v1[$k];
                 }


                 //对组合的数组升序排序
                 sort($goodsAttr);

                 //把数组组合成已逗号字符串
                 $goodsAttr = implode(',',$goodsAttr);

                 //写入数据到库存
                 $product->insert([
                     'id' => '',
                     'goods_id' => $id,
                     'goods_num' => $v,
                     'goods_attr' => $goodsAttr
                 ]);

            }

            $this->success('库存设置成功','lst');


            return;


            }


        //根据商品ID查询所有单选属性
        $radioAttr = db('goods_attr')
            ->alias('ga')
            ->field('ga.*,a.attr_name')
            ->where('goods_id','=',$id)
            ->join('attr a','ga.attr_id = a.id')
            ->where('a.attr_type','=',2)
            ->select();

         //重新组合成想要的数组
         $_radioAttr = [];

         foreach ( $radioAttr as $k => $v )
         {
             $_radioAttr[$v['attr_name']][] =$v;
         }

         //根据指定ID查询库存
         $productView = db('product')->where('goods_id','=',$id)->select();

        return view('admin/@goods/product_num',['radioAttr'=>$_radioAttr,'productview'=>$productView]);
    }

    //异步删除相册
    public function delphoto($id)
    {
         //判断是否是AJAX请求
         if( request()->isAjax() )
         {
             //实例化相册表
             $gphoto = db('photo');

             //查询指定商品相册
             $photo = $gphoto->field('goods_id,id',true)->find($id);

             //组装删除地址
             $photoPath = "../public/static/uploads/goods_photo";
             $og_photo = $photoPath.'/'.$photo['og_photo'];
             $sm_photo = $photoPath.'/'.$photo['sm_photo'];
             $mid_photo = $photoPath.'/'.$photo['mid_photo'];
             $big_photo = $photoPath.'/'.$photo['big_photo'];

             //判断是否相册是否存在
             if( file_exists($og_photo) )
             {
                 @unlink($og_photo);
                 @unlink($sm_photo);
                 @unlink($mid_photo);
                 @unlink($big_photo);
             }

             //删除相册记录
             $gphoto->delete($id);

             return 1;
         }
         else
         {
             $this->error('页面不存在');
         }

    }

}
?>
