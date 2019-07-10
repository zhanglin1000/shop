<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/9
 * Time: 11:05
 */
namespace app\admin\controller;

use think\Controller;

class Word extends Controller
{

    //栏目关联词列表
    public function lst()
    {
        //显示所有栏目关键词
        $join = [
            ['category cy','cw.category_id = cy.id']
        ];

        $wordRes = db('category_word')->alias('cw')->field('cw.*,cy.cate_name')->join($join)->paginate(10);

        return view('word/lst',['wordRes'=>$wordRes]);
    }

    //栏目关联词添加
    public function add()
    {
        //是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Word();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加操作
            $wordAdd = db('category_word')->insert($data);

            if( $wordAdd )
            {
                $this->success('添加栏目关键词成功','lst');
            }
            else
            {
                $this->error('添加栏目关键词失败');
            }
            return;
        }

        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        return view('word/add',['category'=>$category]);
    }

    //栏目关联词编辑
    public function edit($id)
    {
        //是否POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\Word();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $wordUpdate = db('category_word')->update($data);

            if( $wordUpdate !== false )
            {
                $this->success('修改栏目['.$data['keyword'].']关键词成功','lst');
            }
            else
            {
                $this->error('修改栏目['.$data['keyword'].']关键词失败');
            }

            return;
        }
        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        //根据ID查询栏目关联词一条数据
        $wordFind = db('category_word')->find($id);

        return view('word/edit',['category'=>$category,'wordFind'=>$wordFind]);
    }

    //栏目关联词删除
    public function del($id)
    {
        //删除一条栏目记录
        $wordDel = db('category_word')->delete($id);

        if( $wordDel !== false )
        {
            $this->success('删除栏目关键词成功','lst');
        }
        else
        {
            $this->error('删除栏目关键词失败');
        }
    }


}
?>
