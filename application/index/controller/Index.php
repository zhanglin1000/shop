<?php
namespace app\index\controller;

class Index extends Comment
{
    public function index()
    {
        return view('index/index');
    }


}
