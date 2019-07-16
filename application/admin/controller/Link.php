<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 23:13
 */
namespace app\admin\controller;


class Link extends Base
{
    //链接列表
    public function lst()
    {
        //查询所有链接数据
        $linkAll = db('link')->order('sort ASC')->paginate(10);

        //分配到模板
        $this->assign([
            'linkAll' => $linkAll
        ]);
        return view();
    }

    //链接添加
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据并过滤非法数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['link_logo']['tmp_name'] != '')
            {
                //执行图片上传
                $data['link_logo'] = $this->upload();
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Link();

            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
            }


            //判断链接网址是包含有HTTP
            if($data['link_url'] && stripos($data['link_url'],'http://') === false)
            {
                $data['link_url'] = 'http://'.$data['link_url'];
            }

            //执行链接添加
            $link_add = db('link')->insert($data);

            //判断是否添加成功,并显示提示信息
            if($link_add)
            {
                $this->success('添加友情链接成功','lst');
            }
            else
            {
                $this->error('添加友情链接失败');
            }
            return;
        }

        return view();
    }

    //编辑链接
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据并过滤非法数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['link_logo']['tmp_name'] != '')
            {
                //删除原旧图
                $link_logo = input('link_logo');

                //组合删除路径
                $link_path = '../public/static/uploads/link/'.$link_logo;

                //判断路径是否存在
                if(file_exists($link_path))
                {
                    @unlink($link_path);
                }
                //执行图片上传
                $data['link_logo'] = $this->upload();
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Link();

            if(!$validate->scene('edit')->check($data))
            {
                $this->error($validate->getError());
            }


            //判断链接网址是包含有HTTP
            if($data['link_url'] && stripos($data['link_url'],'http://') === false)
            {
                $data['link_url'] = 'http://'.$data['link_url'];
            }

            //执行链接修改
            $link_update = db('link')->update($data);

            //判断是否修改成功,并显示提示信息
            if($link_update !== false)
            {
                $this->success('修改友情链接成功','lst');
            }
            else
            {
                $this->error('修改友情链接失败');
            }
            return;
        }

        //根据ID查询一条数据
        $id = input('id');

        $linkFind = db('link')->find($id);

        //分配数据到模板
        $this->assign([
            'linkFind' => $linkFind
        ]);
        return view();
    }

    //删除链接(注：删除无页面)
    public function del($id)
    {
       //判断ID是否存在
       if($id)
       {
           //删除成功后删除原有图片
           $link_logo = db('link')->field('link_logo')->find($id);

           //组合删除路径
           $link_path = '../public/static/uploads/link/'.$link_logo['link_logo'];

           //判断路径是否存在
           if(file_exists($link_path))
           {
               @unlink($link_path);
           }


           //执行链接删除
           $linkDel = db('link')->delete($id);

           //判断是否删除成功
           if($linkDel !== false)
           {
               $this->success('删除友情链接成功','lst');
           }
           else
           {
               $this->error('删除友情链接失败');
           }
       }
       else
       {
           $this->error('非法操作');
       }

    }

    //链接排序(注：排序共用列表页面)
    public function sort()
    {
        //接收排序数据
        $data = input('post.');

        //执行循环排序数据
        foreach ($data['sort'] as $id => $sort)
        {
            //执行修改排序字段数据
            db('link')->where('id','=',$id)->update(['sort'=>$sort]);
        }

        //如果排序成功则提示
        $this->success('友情链接排序成功','lst');
    }

    //友情链接文件上传
    private function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('link_logo');

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../public/static/uploads/link');

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
