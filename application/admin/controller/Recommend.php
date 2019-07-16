<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/3
 * Time: 16:10
 */

namespace app\admin\controller;


class Recommend extends Base
{
    //推荐位列表
    public function lst()
    {
        //读取所有推荐位
        $recAll = db('rec_pos')->paginate(10);

        return view('recommend/lst',[
            'recAll' => $recAll
        ]);
    }

    //推荐位添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Recommend();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $recAdd = db('rec_pos')->insert($data);

            if($recAdd)
            {
                $this->success('添加推荐位成功','lst');
            }
            else
            {
                $this->error('添加推荐位失败');
            }

            return;
        }

        return view('recommend/add');
    }

    //推荐位编辑
    public function edit($id)
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Recommend();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $recSave = db('rec_pos')->update($data);

            if($recSave !== false)
            {
                $this->success('编辑['.$data['rec_name'].']推荐位成功','lst');
            }
            else
            {
                $this->error('编辑['.$data['rec_name'].']推荐位失败');
            }

            return;
        }

        //根据ID查询一条数据
        $recFind = db('rec_pos')->find($id);

        return view('recommend/edit',[
            'recFind' => $recFind
        ]);
    }

    //推荐位删除
    public function del($id)
    {
        //判断是否合法
        if( intval( $id ) )
        {
             //执行删除
             $recDel = db('rec_pos')->delete($id);

             if( $recDel !== false )
             {
                 $this->success('删除推荐位成功','lst');
             }
             else
             {
                 $this->error('删除推荐位失败');
             }
        }
        else
        {
            $this->error('页面不存在');
        }
    }
}
?>
