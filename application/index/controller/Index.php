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

            //关联栏目轮播图
            $recPos[$k]['categoryAd'] = $this->getCategoryImg($v['id']);

            //获取关联品牌信息
            $recPos[$k]['brands'] = $this->getResBrand($v['id']);

            //最新推荐数据
            $newGoods = $this->goodsRes($v['id'],2,1);

            $recPos[$k]['newRecGoods']=$newGoods;

        }

        //首页热卖商品
        $indexhosGoods = $this->getRecHosGoods(6,20);

        //首页公告功能
        $notice = $this->getIndexArticle(11,3);

        //首页促销
        $promotion = $this->getIndexArticle(10,3);


        return view('index/index',['recPos'=>$recPos,'indexhosGoods'=>$indexhosGoods,'notice'=>$notice,'promotion'=>$promotion]);
    }

    //首页栏目推荐实现
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

    //实现首页关联栏目图片
    public function getCategoryImg($id)
    {
        //根据顶级栏目ID查询所有轮播图
        $categoryAd = db('category_ad')->where('category_id','=',$id)->select();

        //循环所有轮播图重新组合
        $categoryArr = [];

        foreach ( $categoryAd as $k => $v )
        {
            $categoryArr[$v['category_position']][] = $v;
        }

        return $categoryArr;
    }

    //获取首页公共方法
    public function getIndexArticle($id,$limit)
    {
       //组合查询条件
       $where = [
           ['cate_id','=',$id]
       ];

       $article = db('article')->where($where)->limit($limit)->select();

       return $article;
    }


}
