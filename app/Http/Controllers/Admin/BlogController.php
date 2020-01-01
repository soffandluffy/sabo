<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class BlogController extends Controller
{
    //
    public function index(){

    	$articlelist = Article::paginate(8);

    	return view('admin.blog.index', compact('articlelist'));

    }

    public function add(){

    	return view('admin.blog.add');

    }



}
