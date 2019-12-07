<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Page;

class MenuController extends Controller
{
    
    public function index(){

    	$menus = Menu::all();

    	return view('admin.menu.index', compact('menus'));

    }

    public function add(Request $request){

    	$countmenu = Menu::where('parent_id', null)->count();

        if ($countmenu >= 8) {
            
            return back()->withErrors(['Menu sudah mencapai maksimal']);

        } else {
        	$getfirstword = explode(' ',$request->name);
            $tag = strtolower($getfirstword[0]);
            $menu = Menu::create([
                'name' => $request->name,
                'tag' => $tag,
                'order' => $countmenu + 1
            ]);

            $mid = $menu->id;
            $getfirstword = explode(' ',$request->name);
        	$tag = strtolower($getfirstword[0]);

            Page::create([
                'menu_id' => $mid,
                'title' => $request->name,
                'content' => $request->name
            ]);

            return redirect()->back()->with('success', 'Menu added');
        }

    }

    public function addsubmenu(Request $request){

    	$countmenu = Menu::where('parent_id', $request->parent_id)->count();

        if ($countmenu >= 8) {
            
            return back()->withErrors(['Menu sudah mencapai maksimal']);

        } else {
            $getfirstword = explode(' ',$request->name);
            $tag = strtolower($getfirstword[0]);
            $menu = Menu::create([
                'parent_id' => $request->parent_id,
                'name' => $request->name,
                'url' => $tag,
                'tag' => $tag,
                'order' => $countmenu + 1
            ]);

            Menu::find($request->parent_id)->update(['tag' => '']);

            $mid = $menu->id;

            Page::where('menu_id', '=', $request->parent_id)->delete();

            Page::create([
                'menu_id' => $mid,
                'title' => $request->name,
                'content' => $request->name
            ]);

            return redirect()->back()->with('success', 'SubMenu added');
        }

    }

    public function update(Request $request, $id){

    	$getfirstword = explode(' ',$request->name);
        $tag = strtolower($getfirstword[0]);

        Menu::find($id)->update([
            'name' => $request->name,
            'tag' => $tag,
        ]);

		return redirect()->back()->with('success', 'Menu updated');    	

    }

    public function delete($id){

    	$menu = Menu::findOrFail($id);

        $pages = Pages::where('menu_id', '=', $menu->id);
        $pages->delete();
        $menu->delete();

        return back()->with('success', 'Menu Deleted');

    }

    public function moveup(Request $request, $id) {

    	$menu = Menu::find($id);
        if ($menu->parent_id == null) {
            $menu->order = 0;
            $menu->save();

            $menu2 = Menu::where('order', $request->order - 1)
                        ->where('parent_id', null)
                        ->update(['order' => $request->order]);

            $menu3 = Menu::where('order', 0)
                        ->update(['order' => $request->order - 1]);
        }
        

    	return redirect()->back();

    }

    public function movedown(Request $request, $id){

        $menu = Menu::find($id);
        if ($menu->parent_id == null) {
            $menu->order = 0;
            $menu->save();

            $menu2 = Menu::where('order', $request->order + 1)
                        ->where('parent_id', null)
                        ->update(['order' => $request->order]);

            $menu3 = Menu::where('order', 0)
                        ->update(['order' => $request->order + 1]);
        }

        return redirect()->back();

    }

}
