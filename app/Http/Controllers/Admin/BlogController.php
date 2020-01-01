<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Article;	
use Carbon\Carbon;

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

    public function edit($id){

    	$article = Article::findOrFail($id);

    	return view('admin.blog.edit', compact('article'));

    }

    public function delete($id){

    	$article = Article::findOrFail($id);
    	$imagePath = 'images/article/'.$article->imageurl;
    	if ($article->imageurl != 'defaultimage.png') {
    		if (File::exists($imagePath)) {
    			File::delete($imagePath);
    		}
    	}
    	$article->delete();

    	return redirect()->route('blog.index')->with('success', 'Article Deleted');

    }

    public function store(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'imageurl' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    		'kcontent' => 'required',

    	]);

    	// Upload Image
    	if ($request->hasFile('imageurl')) {

    		$imageName = time().'.'.$request->imageurl->getClientOriginalExtension();
    		$request->imageurl->move(public_path('images/article'), $imageName);

    	} else {

    		$imageName = 'defaultimage.png';

    	}
    	
    	Article::create([
    		'name' => $request->name,
    		'imageurl' => $imageName,
    		'content' => $request->kcontent,
    		'created_by' => auth()->user()->id,

    	]);

    	return redirect()->route('blog.index')->with('success', 'Article Added');

    }

    public function update($id, Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'imageurl' => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    		'kcontent' => 'required',

    	]);

    	$article = Article::findOrFail($id);
    	if ($request->hasFile('imageurl')) {

	    	$imagePath = 'images/article/'.$article->imageurl;
	    	if ($article->imageurl != 'defaultimage.png') {
	    		if (File::exists($imagePath)) {
	    			File::delete($imagePath);
	    		}
	    	}
    		$imageName = time().'.'.$request->imageurl->getClientOriginalExtension();
    		$request->imageurl->move(public_path('images/article'), $imageName);

    	} else {

    		$imageName = $article->imageurl;

    	}

    	Article::find($id)->update([
    		'name' => $request->name,
    		'imageurl' => $imageName,
    		'content' => $request->kcontent,
    		'updated_by' => auth()->user()->id,
    	]);

    	return redirect()->route('blog.index')->with('success', 'Article Updated');

    }

    public function articleview($id){

    	$article = Article::findOrFail($id);

    	return view('public.layouts.article', compact('article'));

    }

    public function publish($id) {

        $now = Carbon::now();

        Article::find($id)->update([
            'status' => 1,
            'publish_datetime' => now(),
        ]);

    	return redirect()->back()->with('success', 'Article Published');

    }

    public function draft($id) {

    	Article::find($id)->update([
    		'status' => 2,
            'publish_datetime' => null,
    	]);

    	return redirect()->back()->with('success', 'Article Drafted');

    }



}
