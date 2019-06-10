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
            ['type te','gs.type_id = te.id','LEFT']
        ];
        //查询所有商品数据
        $goodsAll = db('goods')->alias('gs')->field('gs.*,cy.cate_name,bd.brand_cname,te.type_name')->join($join)->paginate(10);

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
}
?>
