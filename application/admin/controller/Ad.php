<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/17
 * Time: 16:48
 */

namespace app\admin\controller;


class Ad extends Base
{
    //广告列表
    public function lst()
    {
        //查询条件
        $join = [
            ['adpos ap','a.adpos_id = ap.id']
        ];

        //查询所有广告
        $adres = db('ad')->alias('a')->field('a.*,ap.name')->join($join)->paginate(10);

        return view('ad/lst',['adres'=>$adres]);
    }

    //广告添加
    public function add()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //数据验证
            $validate = new \app\admin\validate\Ad();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加广告
            $adAdd = model('ad')->allowField(true)->save($data);

            if( $adAdd )
            {
                $this->success('添加广告成功','lst');
            }
            else
            {
                $this->error('添加广告失败');
            }
            return;
        }

        //查询所有广告类型
        $adposRes = db('adpos')->select();

        return view('ad/add',['adposRes'=>$adposRes]);
    }

    //广告编辑
    public function edit( $id )
    {
        //执行广告编辑
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //数据验证
            $validate = new \app\admin\validate\Ad();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            $adUpdate = model('ad')->allowField(true)->save($data,['id'=>$id]);

            if( $adUpdate !== false )
            {
                $this->success('修改广告成功','lst');
            }
            else
            {
                $this->error('修改广告失败');
            }

            return;
        }

        //根据ID查询一条数据
        $adposFind = db('ad')->find( $id );

        //根据类型查询轮播图片
        if( $adposFind['ad_type'] == 2 )
        {
            $adflash = db('adflash')->where('ad_id','=',$adposFind['id'])->select();
        }

        //查询所有广告类型
        $adposRes = db('adpos')->select();

        return view('ad/edit',['adposRes'=>$adposRes,'adposFind'=>$adposFind,'adflash'=>isset($adflash)?$adflash:'']);
    }

    //广告删除
    public function del( $id )
    {
        //判断ID是否合法
        if( intval( $id ) )
        {
            //实例化模型
            $admodel = model('ad');

            //执行模型删除
            $adDel = $admodel::destroy($id);

            if( $adDel !== false )
            {
               $this->success('删除广告成','lst');
            }
            else
            {
                $this->error('删除广告失败');
            }

        }
        else
        {
            $this->error('访问页面不存在');
        }
    }

    //AJAX动态修改数据
    public function adStatus($ad_id,$ad_pos)
    {
        //判断是否AJAX提交
        if( request()->isAjax() )
        {
            //组合查询条件
            $where = [
                'id' => $ad_id
            ];

            //根据广告ID和所属广告修改
            $statusFind = db('ad')->field('statue')->where($where)->find();

            if( $statusFind['statue'] == 0 )
            {
                db('ad')->where('adpos_id','=',$ad_pos)->update(['statue'=>0]);

                db('ad')->where($where)->update(['statue'=>1]);
            }
            else
            {
                db('ad')->where($where)->update(['statue'=>0]);
            }

            return json(['code'=>200,'msg'=>'状态修改成功']);
        }
        else
        {
            return json(['code'=>500,'msg'=>'服务器错误']);
        }




    }

    //AJAX动态删除多图广告
    public function ajaxDelAd($id)
    {
       //根据ID删除对用图片
       $adflash = db('adflash')->field('flash_img')->where('id','=',$id)->find();

       //组合删除图片路径
       $flashImg = "../public/static/uploads/pictures/".$adflash['flash_img'];

       //判断是否存在
       if ( file_exists( $flashImg ) )
       {
           @unlink($flashImg);
       }

       //删除数据库记录
       $isOk = db('adflash')->where('id','=',$id)->delete();

       if( $isOk !== false )
       {
           return 1;
       }
       else
       {
           return 0;
       }
    }


}
?>
