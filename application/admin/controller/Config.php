<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/19
 * Time: 23:14
 */
namespace app\admin\controller;

use think\Controller;

class Config extends Controller
{
    //配置项列表
    public function lst()
    {
        //查询所有配置
        $configAll = db('config')->paginate(10);

        //查询数据分配到模板
        $this->assign([
            'configAll' => $configAll
        ]);
        return view();
    }

    //配置项添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //处理可选值中文逗号问题
            $data['values'] = str_replace('，',',',$data['values']);

            //处理默认值中文逗号问题
            $data['value'] = str_replace('，',',',$data['value']);

            //验证表单数据
            $validate = new \app\admin\validate\Config();

            if (!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加操作
            $configAdd = db('config')->insert($data);

            //判断是否添加成功
            if($configAdd)
            {
                $this->success('添加配置成功','lst');
            }
            else
            {
                $this->error('添加配置失败');
            }
            return;
        }

        return view();
    }

    //配置项编辑
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //处理可选值中文逗号问题
            $data['values'] = str_replace('，',',',$data['values']);

            //处理默认值中文逗号问题
            $data['value'] = str_replace('，',',',$data['value']);

            //验证表单数据
            $validate = new \app\admin\validate\Config();

            if (!$validate->scene('edit')->check($data))
            {
                $this->error($validate->getError());
            }

            //执行添加操作
            $configUpdate = db('config')->update($data);

            //判断是否添加成功
            if($configUpdate !== false)
            {
                $this->success('编辑配置成功','lst');
            }
            else
            {
                $this->error('编辑配置失败');
            }
            return;
        }

        //根据ID获取一条数据
        $id = input('id');

        $configFind = db('config')->find($id);

        //获取的数据分配到模板
        $this->assign([
            'configFind' => $configFind
        ]);
        return view();
    }

    //配置项删除(注：配置项删除无页面)
    public function del($id)
    {
        //判断ID是否存在
        if($id)
        {
            //执行删除操作
            $configDel = db('config')->delete($id);

            //判断是否删除成功
            if($configDel !== false)
            {
                $this->success('删除配置成功','lst');
            }
            else
            {
                $this->error('删除配置失败');
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }

    //配置设置
    public function configlist()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据
            $data = input('post.');

            //复选框处理
            $checkFiled = db('config')->field('ename')->where('field_type','=',3)->select();

            //定义存储复选框数组字段
            $checkArr = [];

            //定义表单字段数组
            $dataArr = [];

            //循环得到的复选框值,组合成一维数组
            foreach ($checkFiled  as $k => $v)
            {
               $checkArr[] = $v['ename'];
            }

            //循环处理文字表单数据
            foreach ($data as $k => $v)
            {
                //表单字段放入数组中
                $dataArr[] = $k;

               //判断是否是数组
               if(is_array($v))
               {
                   //如果是数组,需要把数组转成字符串
                   $v = implode(',',$v);

                   //执行更新操作
                   db('config')->where('ename','=',$k)->update(['value'=>$v]);
               }
               else
               {
                    //非数组直接更新
                    db('config')->where('ename','=',$k)->update(['value'=>$v]);
               }
            }

            //判断是否有复选框选中
            foreach ($checkArr as $k => $v)
            {
                if(!in_array($v,$dataArr))
                {
                    //执行复选框更新操作
                    db('config')->where('ename','=',$v)->update(['value'=>'']);
                }
            }

            //处理文件上传
            if($_FILES)
            {
                foreach ($_FILES as $k => $v)
                {
                    //判断文件是否为空
                    if($v['tmp_name'] != '')
                    {
                        //查询图片类型值
                        $old_config_logo = db('config')->where('ename','=',$k)->find();

                        //删除之前旧的的图片
                        $old_config_logo = '../public/static/uploads/config/'.$old_config_logo['value'];

                        //判断图片文件是否存在
                        if(file_exists($old_config_logo))
                        {
                            //执行删除旧图数据
                            @unlink($old_config_logo);
                        }

                        db('config')->where('ename','=',$k)->update(['value'=>$this->upload($k)]);

                    }
                }
            }


            $this->success('修改配置成功');



            return;
        }
        //网店配置读取
        $shopAll = db('config')->where('conf_type','=',1)->select();

        //商品配置读取
        $CommodityAll = db('config')->where('conf_type','=',2)->select();

        //分配数据到模板
        $this->assign([
            'shopAll' => $shopAll,
            'CommodityAll' => $CommodityAll
        ]);
        return view();
    }


    //配置文件上传
    private function upload($fileName)
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($fileName);

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../public/static/uploads/config');

        //判断临时文件是否存在
        if($info)
        {
            return $info->getSaveName();
        }
        else
        {
            echo $file->getError();
            die();
        }
    }
}
?>
