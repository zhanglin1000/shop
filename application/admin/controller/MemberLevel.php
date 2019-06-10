<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/30
 * Time: 22:09
 */
namespace app\admin\controller;

use think\Controller;

class MemberLevel extends Controller
{
    //会员级别列表
    public function lst()
    {
        //读取所有会员级别数据
        $member_levelAll = db('member_level')->paginate(10);

        //分配数据到模板
        $this->assign([
            'member_levelAll' => $member_levelAll
        ]);
        return view();
    }

    //会员级别添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\MemberLevel();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $memberLevelAdd = db('member_level')->insert($data);

            if($memberLevelAdd)
            {
                $this->success('添加会员等级成功','lst');
            }
            else
            {
                $this->error('添加会员等级失败');
            }

            return;
        }

        return view();
    }

    //会员级别编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //验证表单数据
            $validate = new \app\admin\validate\MemberLevel();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $memberLevelSave = db('member_level')->update($data);

            if($memberLevelSave !== false)
            {
                $this->success('编辑会员等级成功','lst');
            }
            else
            {
                $this->error('编辑会员等级失败');
            }

            return;
        }

        //根据ID读取一条记录
        $id = input('id');

        $member_level_find = db('member_level')->find($id);

        //分配数据到模板
        $this->assign([
            'member_level_find' => $member_level_find
        ]);

        return view();
    }

    //会员级别删除（注：删除无页面）
    public function del($id)
    {
        //判断ID是否存在
        if($id)
        {
            //执行删除操作
            $memberLevelDel = db('member_level')->delete($id);

            if($memberLevelDel !== false)
            {
                $this->success('删除会员级别成功','lst');
            }
            else
            {
                $this->error('删除会员级别失败');
            }

        }
        else
        {
            $this->error('非法操作');
        }
    }
}
?>
