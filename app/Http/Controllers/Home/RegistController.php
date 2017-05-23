<?php
namespace App\Http\Controllers\Home;
use DB;
use App\Http\Controllers\controller;
class RegistController extends Controller
{
    //注册
    public function index()
    {
        return view("/Home/Regist/index");
    }
    public function regist()
    {
        
    }
}