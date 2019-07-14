<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/14
 * Time: 10:56
 */

namespace app\admin\controller;

use think\Controller;

class Categoryad extends Controller
{
    //左图关联栏目列表
    public function lst()
    {
        //查询所有关联图片
        $join = [
            ['category cy','ad.category_id = cy.id']
        ];

        $categoryAd = db('category_ad')->alias('ad')->field('ad.*,cy.cate_name')->join($join)->paginate(10);

        return view('categoryad/lst',['categoryAd'=>$categoryAd]);
    }

    //左图关联栏目添加
    public function add()
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['category_img']['tmp_name'] != '')
            {
                //执行图片上传
                $data['category_img'] = $this->upload();
            }

            //判断品牌网址是包含有HTTP
            if($data['category_link'] && stripos($data['category_link'],'http://') === false)
            {
                $data['category_link'] = 'http://'.$data['category_link'];
            }

            //判断是否重复添加B和C位
            if( $data['category_position'] == 'B' || $data['category_position'] == 'C' )
            {
                //查询数据是否存在
                $where = [
                    ['category_position','=',$data['category_position']],
                    ['category_id','=',$data['category_id']]
                ];
                $catAd = db('category_ad')->where($where)->select();

                if( $catAd )
                {
                    $this->error('不允许添加重复广告位');
                }
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Categoryad();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行写入操作
            $categoryAd = db('category_ad')->insert($data);

            if( $categoryAd )
            {
                $this->success('添加关联图片成功','lst');
            }
            else
            {
                $this->error('添加关联图片失败');
            }

            return;
        }

        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        return view('categoryad/add',['category'=>$category]);
    }

    //左图关联栏目编辑
    public function edit($id)
    {
        //判断是否是POST提交
        if( request()->isPost() )
        {
            //接收表单数据
            $data = input('post.');

            //判断是否有文件上传
            if($_FILES['category_img']['tmp_name'] != '')
            {
                //删除之前图片
                $oldImg = "../public/static/uploads/ad/".$data['category_img'];

                if( file_exists( $oldImg ) )
                {
                    @unlink($oldImg);
                }
                //执行图片上传
                $data['category_img'] = $this->upload();
            }

            //判断品牌网址是包含有HTTP
            if($data['category_link'] && stripos($data['category_link'],'http://') === false)
            {
                $data['category_link'] = 'http://'.$data['category_link'];
            }

            //判断是否重复添加B和C位
            if( $data['category_position'] == 'B' || $data['category_position'] == 'C' )
            {
                //查询数据是否存在
                $where = [
                    ['category_position','=',$data['category_position']],
                    ['category_id','=',$data['category_id']]
                ];
                $catAd = db('category_ad')->where($where)->select();

                if( $catAd )
                {
                    $this->error('不允许添加重复广告位');
                }
            }

            //验证数据是否为空
            $validate = new \app\admin\validate\Categoryad();

            if(!$validate->check($data))
            {
                $this->error($validate->getError());
            }

            //执行写入操作
            $categoryAd = db('category_ad')->update($data);

            if( $categoryAd !== false )
            {
                $this->success('修改关联图片成功','lst');
            }
            else
            {
                $this->error('修改关联图片失败');
            }

            return;
        }

        //查询所有商品分类
        $category = db('category')->where('pid','=',0)->select();

        //查询一条数据
        $categoryFind = db('category_ad')->find($id);

        return view('categoryad/edit',['category'=>$category,'categoryFind'=>$categoryFind]);
    }

    //左图关联栏目删除
    public function del($id)
    {
       //判断是否合法
       if( intval($id) )
       {
          //根据ID查询对应的图片信息
          $oldImg = db('category_ad')->where('id','=',$id)->value('category_img');

          //组合删除路径
          $oldImg = '../public/static/uploads/ad/'.$oldImg;

          if( file_exists( $oldImg ) )
          {
              @unlink($oldImg);
          }

          //执行删除
          $categoryAd = db('category_ad')->delete($id);

          if( $categoryAd !== false )
          {
              $this->success('删除关联图片成功','lst');
          }
          else
          {
              $this->error('删除关联图片失败');
          }
       }
       else
       {
           $this->error('非法操作');
       }
    }

    //左图关联文件上传
    private function upload()
    {
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('category_img');

        // 移动到框架应用根目录/uploads/ 目录下
        $info = $file->move('../public/static/uploads/ad');

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
