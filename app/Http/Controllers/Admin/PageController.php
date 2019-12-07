<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use App\Menu;

class PageController extends Controller
{
    
	public function index(){

		$pages = Page::all();
		$menus = Menu::all();

		return view('admin.page.index', compact('menus', 'pages'));

	}



	
}
