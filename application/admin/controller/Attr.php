<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 21:50
 */

namespace app\admin\controller;


class Attr extends Base
{
    //属性列表
    public function lst()
    {
        //查询所有商品属性
        $attrAll = db('attr')->alias('a')->field('a.*,t.type_name')->where('a.type_id','=',input('id'))->join('type t','a.type_id = t.id')->paginate(10);

        //分配数据到模板
        $this->assign([
            'attrAll' => $attrAll
        ]);

        return view();
    }

    //属性添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //获取表单数据
            $data = input('post.');

            //判断是否是中文逗号,如果是自动转换成英文逗号
            $data['attr_values'] = str_replace('，',',',$data['attr_values']);

            //验证表单数据
            $validate = new \app\admin\validate\Attr();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $attrAdd = db('attr')->insert($data);

            if($attrAdd)
            {
                $this->success('添加商品属性成功','lst');
            }
            else
            {
                $this->error('添加商品属性失败');
            }

            return;
        }

        //获取所有商品类型
        $typeAll = db('type')->select();

        //分配数据到模板
        $this->assign([
            'typeAll' => $typeAll
        ]);
        return view();
    }

    //属性编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //获取表单数据
            $data = input('post.');

            //判断是否是中文逗号,如果是自动转换成英文逗号
            $data['attr_values'] = str_replace('，',',',$data['attr_values']);

            //验证表单数据
            $validate = new \app\admin\validate\Attr();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加
            $attrSave = db('attr')->update($data);

            if($attrSave !== false)
            {
                $this->success('编辑商品属性成功',url('lst',array('id'=>input('type_id'))));
            }
            else
            {
                $this->error('编辑商品属性失败');
            }

            return;
        }

        //根据属性ID获取一条记录
        $attrFind = db('attr')->find(input('id'));

        //获取所有商品类型
        $typeAll = db('type')->select();

        //分配数据到模板
        $this->assign([
            'typeAll' => $typeAll,
            'attrFind' =>$attrFind
        ]);

        return view();
    }

    //属性删除(注:无删除页面)
    public function del($id)
    {
       //判断ID是否存在
       if($id)
       {
            //执行删除
           $attrDel = db('attr')->delete($id);

           if($attrDel !== false)
           {
               $this->success('删除商品属性成功');
           }
           else
           {
               $this->error('删除商品属性失败');
           }
       }
       else
       {
           $this->error('非法操作');
       }
    }

    //AJAX获取指定属性方法
    public function getAttr()
    {
        if(request()->isAjax())
        {
            //接收指定类型ID
            $type_id = input('type_id');

            //通过类型ID查找所有类型属性
            $attrAll = db('attr')->where('type_id','=',$type_id)->select();

            //查询出的数据返回给AJAX,并生成JSON格式
            return json($attrAll);
        }
        else
        {
            $this->error('非法请求');
        }

    }
}
?>
