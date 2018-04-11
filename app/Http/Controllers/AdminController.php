<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    protected $username = 'username';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', [
           'title' => '後台標題',
           'description' => '管理工作後台描述'
        ]);
    }

    public function admin_test()
    {
        return view('admin_template', [
           'title' => '後台標題',
           'description' => '管理工作後台描述'
        ]);
    }
}
