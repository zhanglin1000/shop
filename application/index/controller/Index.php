<?php
namespace app\index\controller;

use catetree\Catetree;

class Index extends Comment
{
    public function index()
    {
        //首页推荐
        $recPos = $this->getRec(4,0);

        foreach ( $recPos as $k => $v )
        {
            //首页推荐二级分类
            $recPos[$k]['subclass'] = $this->getRec(4,$v['id']);

            //获取二级栏目或子栏目下的精品推荐
            foreach (  $recPos[$k]['subclass'] as $k1 => $v1 )
            {
                  $baseGoods = $this->goodsRes($v1['id'],1,1);

                  $recPos[$k]['subclass'][$k1]['baseGoods'] = $baseGoods;
            }


            //最新推荐数据
            $newGoods = $this->goodsRes($v['id'],2,1);

            $recPos[$k]['newRecGoods']=$newGoods;

        }

        return view('index/index',['recPos'=>$recPos]);
    }

    //首页推荐实现
    public function getRec($rec,$pid=0)
    {
       //查询推荐数据
       $where = [
           'rec_id' => $rec,
           'value_type' => 2
       ];

       $rec_pos = db('goods_rec')->where($where)->select();

       //定义一个数组
       $arr = [];

       foreach ( $rec_pos as $k => $v )
       {
           $_arr = db('category')->field('id,pid,cate_name')->where('pid','=',$pid)->where('id','=',$v['goods_id'])->find();
           if( $_arr )
           {
               $arr[] = $_arr;
           }

       }

      return $arr;


    }

    //实现二级三级分类推荐方法
    public function goodsRes($child_id,$rec_id,$value_type)
    {
        //实例化顶级分类下所有子栏目
        $cateTree = new Catetree();

        //查找所有栏目
        $categroy = db('category')->select();

        //查找所有的顶级栏目下二级或三级栏目子分类

        $sonId = $cateTree->childId($categroy,$child_id);

        //把自身加入其中
        $sonId[] = $child_id;

        //查询所有推荐类型数据
        $where = [
            ['rec_id','=',$rec_id],
            ['value_type','=',$value_type]
        ];

        $rec_new = db('goods_rec')->where($where)->select();

        foreach ( $rec_new as $k1 => $v1 )
        {
            $_recnew[] = $v1['goods_id'];
        }

        //根据查询的栏目ID查询对应商品
        $map = [
            ['category_id','IN',$sonId],
            ['id','IN',$_recnew]
        ];

        $newGoods = db('goods')->limit(6)->order('id DESC')->where($map)->select();

        return $newGoods;

    }


}
