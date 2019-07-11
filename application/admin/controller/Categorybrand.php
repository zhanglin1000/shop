<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/10
 * Time: 16:39
 */
namespace app\admin\controller;

use think\Controller;



class Categorybrand extends Controller
{
    //关联品牌列表
    public function lst()
    {
        //查询所有关联品牌
        $category_brands = db("category_brand")->alias("cb")->fieldRaw("cb.*,cy.cate_name,GROUP_CONCAT(bd.brand_cname) brand_name")->join("category cy","cb.category_id = cy.id")->join("brand bd","find_in_set(bd.id,cb.brands)")->group('cb.brands')->paginate(10);

        return view('categorybrand/lst',['category_brands'=>$category_brands]);
    }

    //关联品牌添加
    public function add()
    {
        //判断是否POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['pro_img']['tmp_name'] != '')
            {
                //执行图片上传
                $data['pro_img'] = $this->upload();
            }

            //判断品牌网址是包含有HTTP
            if($data['pro_url'] && stripos($data['pro_url'],'http://') === false)
            {
                $data['pro_url'] = 'http://'.$data['pro_url'];
            }

            //验证表单数据
            $validate = new \app\admin\validate\Categorybrand();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //组合品牌栏目字符串
            if ( is_array( $data['brands'] ) )
            {
                $data['brands'] = implode(',', $data['brands']);
            }

            //执行添加
            $categorybrandAdd = db('category_brand')->insert($data);

            if ( $categorybrandAdd )
            {
                $this->success('添加关联品牌成功','lst');
            }
            else
            {
                $this->error('添加关联品牌失败');
            }

            return;
        }

        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        //查询所有不为空的关联品牌
        $brands = db('brand')->whereNotNull('brand_logo')->select();

        return view('categorybrand/add',['category'=>$category,'brands'=>$brands]);
    }

    //关联品牌修改
    public function edit($id)
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['pro_img']['tmp_name'] != '')
            {
                //先删除原有图片
                $old_img = '../public/static/uploads/relation_img/'.$data['pro_img'];

                //判断是否存在
                if( file_exists( $old_img ) )
                {
                    @unlink($old_img);
                }
                //执行图片上传
                $data['pro_img'] = $this->upload();
            }

            //判断品牌网址是包含有HTTP
            if($data['pro_url'] && stripos($data['pro_url'],'http://') === false)
            {
                $data['pro_url'] = 'http://'.$data['pro_url'];
            }

            //验证表单数据
            $validate = new \app\admin\validate\Categorybrand();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //组合品牌栏目字符串
            if ( is_array( $data['brands'] ) )
            {
                $data['brands'] = implode(',', $data['brands']);
            }

            //执行添加
            $categorybrandUpdate = db('category_brand')->update($data);

            if ( $categorybrandUpdate !== false )
            {
                $this->success('修改关联品牌成功','lst');
            }
            else
            {
                $this->error('修改关联品牌失败');
            }

            return;
        }

        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        //查询所有不为空的关联品牌
        $brands = db('brand')->whereNotNull('brand_logo')->select();

        //读取一条记录
        $categorybrandFind = db('category_brand')->find($id);

        return view('categorybrand/edit',['category'=>$category,'brands'=>$brands,'categorybrandFind'=>$categorybrandFind]);

    }

    //关联品牌删除
    public function del($id)
    {
        //判断是否是合法数字
        if( intval($id) )
        {
            //查询数据库是否有图
            $old_img = db('category_brand')->where('id','=',$id)->value('pro_img');

            //组合完成删除地址
            $oldImg = '../public/static/uploads/relation_img/'.$old_img;

            //如果存在就删除
            if( file_exists( $oldImg ) )
            {
                @unlink($oldImg);
            }

            //执行删除
            $categorybrandDel = db('category_brand')->delete($id);

            if( $categorybrandDel !== false )
            {
                $this->success('删除关联品牌成功','lst');
            }
            else
            {
                $this->error('删除关联品牌失败');
            }
        }
        else
        {
            $this->error('非法参数');
        }
    }

    //推广图文件上传
    private function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('pro_img');

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../public/static/uploads/relation_img');

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
