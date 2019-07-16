<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/6
 * Time: 21:10
 */
namespace app\admin\controller;


class Brand extends Base
{
    //载入品牌列表页
    public function lst()
    {
        //获取所有品牌数据,并且分页
        $brandRes = db('brand')->order('brand_sort ASC')->paginate(10);

        //分配获取的数据
        $this->assign([
             'brandRes' => $brandRes
        ]);

        return view();
    }

    //载入品牌添加页面
    public function add()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据并过滤非法数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['brand_logo']['tmp_name'] != '')
            {
                //执行图片上传
                $data['brand_logo'] = $this->upload();
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Brand();

            if(!$validate->scene('add')->check($data))
            {
                $this->error($validate->getError());
            }

            //品牌时间添加
            $data['brand_addtime'] = time();

            //判断品牌网址是包含有HTTP
            if($data['brand_url'] && stripos($data['brand_url'],'http://') === false)
            {
                $data['brand_url'] = 'http://'.$data['brand_url'];
            }

            //执行品牌添加
             $brand_add = db('brand')->insert($data);

            //判断是否添加成功,并显示提示信息
            if($brand_add)
            {
                $this->success('添加品牌成功','lst');
            }
            else
            {
                $this->error('添加品牌失败');
            }

            return;
        }

        return view();
    }

    //载入品牌编辑页面
    public function edit()
    {
        //判断是否是POST提交
        if(request()->isPost())
        {
            //接收表单数据并过滤非法数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['brand_logo']['tmp_name'] != '')
            {
                //编辑图片之前,删除之前旧的的图片
                $old_brand_logo = '../public/static/uploads/brand/'.$data['brand_logo'];

                //判断图片文件是否存在
                if(file_exists($old_brand_logo))
                {
                    //执行删除旧图数据
                    @unlink($old_brand_logo);
                }

                //执行图片上传
                $data['brand_logo'] = $this->upload();
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Brand();

            if(!$validate->scene('edit')->check($data))
            {
                $this->error($validate->getError());
            }

            //判断品牌网址是包含有HTTP
            if($data['brand_url'] && stripos($data['brand_url'],'http://') === false)
            {
                $data['brand_url'] = 'http://'.$data['brand_url'];
            }

            //执行品牌添加
            $brand_save = db('brand')->update($data);

            //判断是否添加成功,并显示提示信息
            if($brand_save !== false)
            {
                $this->success('编辑品牌['.$data['brand_cname'].']成功','lst');
            }
            else
            {
                $this->error('编辑品牌['.$data['brand_cname'].']失败');
            }


            return ;
        }

        //点击编辑获取指定的品牌ID
        $brand_id = input('id');

        //根据ID获取指定一条品牌记录并显示到页面
        $brand_find = db('brand')->find($brand_id);

        //获取指定品牌数据分配到模板
        $this->assign([
            'brand_find' => $brand_find
        ]);

        return view();
    }

    //品牌列表排序方法(注：品牌排序共用品牌列表页实现)
    public function sort()
    {
       //接收排序数据
       $data = input('post.');

       //执行循环排序数据
       foreach ($data['brand_sort'] as $id => $sort)
       {
           //执行修改排序字段数据
           db('brand')->where('id','=',$id)->update(['brand_sort'=>$sort]);
       }

       //如果排序成功则提示
       $this->success('商品品牌排序成功','lst');
    }

    //品牌删除方法(注：删除数据无页面)
    public function del($id)
    {
       //删除商品品牌之前先要查询是否有LOGO存在
       $brand_logo = db('brand')->where('id','=',$id)->value('brand_logo');

       //判断商品品牌LOGO是否存在
       if($brand_logo)
       {
           //组合删除商品品牌地址
           $brand_logo = '../public/static/uploads/brand/'.$brand_logo;

           //判断组合的商品品牌地址是否真实存在
           if(file_exists($brand_logo))
           {
               @unlink($brand_logo);
           }

       }

       //删除数据库记录
       $brand_del = db('brand')->delete($id);

       //判断是否删除数据成功
       if($brand_del !== false)
       {
           $this->success('删除商品品牌成功','lst');
       }
       else
       {
           $this->error('删除商品品牌失败');
       }

    }


    //生成商品品牌首字母(注：生成品牌字母无页面)
    public function generate()
    {
        //存放生成好商品品牌首字母数组
        $get_Genarate = [];

       //查询所有的商品品牌名称
       $brand_name = db('brand')->field('id,brand_cname')->select();

       //循环生成商品品牌首字母
       foreach ($brand_name as $k => $v)
       {
          $get_Genarate[$v['id']] = getFirstCharter($v['brand_cname']);
       }

       //把生成的好的商品品牌字母循环更新到数据库
       foreach ($get_Genarate as $k => $v)
       {
            db('brand')->where('id','=',$k)->update(['brand_initials'=>$v]);
       }

       //生成成功后提示
       $this->success('生成商品品牌首字母成功','lst');
    }

    //品牌推荐状态改变
    public function brand_status()
    {
        if(request()->isAjax())
        {
            //获取改变推荐状态ID
            $id = input('id');

            //查询品牌推荐状态,如果推荐改为未推荐,如果未推荐改变推荐
            $status = db('brand')->field('brand_recommend')->find($id);

            //判断品牌推荐状态
            if($status['brand_recommend'] == 1)
            {
                db('brand')->where('id','=',$id)->setField('brand_recommend',0);
                echo 1; //将推荐状态改为未推荐
            }
            else
            {
                db('brand')->where('id','=',$id)->setField('brand_recommend',1);
                echo 2; //将未推荐状态改为推荐
            }

        }
        else
        {
            $this->error('非法操作');
        }

    }

    //品牌显示状态修改
    public function brand_show()
    {
        //判断是否是AJAX提交
        if(request()->isAjax())
        {
            //获取要修改的导航状态ID
            $id = input('id');

            //查询品牌状态
            $status = db('brand')->field('brand_status')->find($id);

            //判断品牌状态是否是显示如果是显示就隐藏,如果是隐藏就显示
            if($status['brand_status'] == 0)
            {
                db('brand')->where('id','=',$id)->setField('brand_status',1);
                echo 1; //将显示状态改为隐藏
            }
            else
            {
                db('brand')->where('id','=',$id)->setField('brand_status',0);
                echo 2; //将隐藏状态改为显示
            }
        }
        else
        {
            $this->error('非法操作');
        }
    }


    //品牌文件上传
    private function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('brand_logo');

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../public/static/uploads/brand');

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
