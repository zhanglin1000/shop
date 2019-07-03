<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/3
 * Time: 8:25
 */

namespace app\admin\controller;

use think\Controller;

class Nav extends Controller
{

    //导航列表
    public function lst()
    {
        //显示所有的导航
        $navList = db('nav')->paginate(10);

        return view('Nav/lst',[
            'navList' => $navList
        ]);
    }

    //导航添加
    public function add()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有HTTP
            if( strpos($data['nav_url'],'http://') !==false)
            {
                $data['nav_url'] = $data['nav_url'];
            }
            else
            {
                $data['nav_url'] = 'http://'.$data['nav_url'];
            }

            //验证数据是否合法
            $validate = new\app\admin\validate\Nav();

            if( !$validate->scene('add')->check($data) )
            {
                $this->error($validate->getError());
            }

             //验证合法执行添加
             $navAdd = db('nav')->insert($data);

             if( $navAdd )
             {
                 $this->success('添加导航栏目成功','lst');
             }
             else
             {
                 $this->error('添加导航栏目失败');
             }

            return;
        }
        return view('Nav/add');
    }

    //导航修改
    public function edit($id)
    {

        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有HTTP
            if( strpos($data['nav_url'],'http://') !==false)
            {
                $data['nav_url'] = $data['nav_url'];
            }
            else
            {
                $data['nav_url'] = 'http://'.$data['nav_url'];
            }

            //验证数据是否合法
            $validate = new\app\admin\validate\Nav();

            if( !$validate->scene('edit')->check($data) )
            {
                $this->error($validate->getError());
            }

            //验证合法执行添加
            $navSave = db('nav')->update($data);

            if( $navSave !== false )
            {
                $this->success('编辑['.$data['nav_name'].']导航栏目成功','lst');
            }
            else
            {
                $this->error('编辑['.$data['nav_name'].']导航栏目失败');
            }

            return;
        }

        //根据ID查询一条记录
        $navFind = db('nav')->find($id);

        return view('Nav/edit',[
            'navFind' => $navFind
        ]);
    }

    //导航删除
    public function del($id)
    {
        //判断ID是否合法
        if( intval($id) )
        {
             //执行删除操作
             $navDel = db('nav')->delete($id);

             if( $navDel !== false )
             {
                 $this->error('删除导航成功','lst');
             }
             else
             {
                 $this->error('删除导航失败');
             }
        }
        else
        {
            $this->error('删除页面不存在');
        }
    }


}
?>
