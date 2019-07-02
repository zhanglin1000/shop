<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//文章栏目路由
\think\facade\Route::rule('article/:id','index/Article/index','GET')->pattern(['id'=>'\d+']);

//文章内容路由
\think\facade\Route::rule('article_content/:id-pid-:pid','index/ArticleContent/index')->pattern(['id'=>'\d+','pid'=>'\d+']);
