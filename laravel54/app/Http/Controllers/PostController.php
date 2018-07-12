<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    //列表
    public function index(){
        $posts = Post::orderBy("created_at","desc")->paginate(6);
        return view("post/index",compact('posts'));
    }
    //详情页
    public function show(Post $post){
        return view("post/show", compact('post'));
    }
    //创建文章
    public function create(){
        return view("post/create");
    }
    //创建逻辑
    public function store(){
        //调试
        //dd(request()->all());
        //return view("post/store");
        /*$post = new Post();
        $post->title = request('title');
        $post->content = request('content');*/

        //验证操作
        $this->validate(request(),[
            'title' => 'required|string|max:100|min:5',
            'content' => 'required|string|min:10',
        ],[
            'title.min' => '文章标题过短',
        ]);

        $post = Post::create(request(['title','content']));
       // dd($post);
        return redirect("/posts");


    }
    //编辑文章
    public function edit(){
        return view("post/edit");
    }
    //编辑逻辑
    public function update(){
        return;
    }
    //删除逻辑
    public function delete(){

    }
    //图片上传
    public function imageUpload(Request $request)
    {
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/' . $path);
        //dd(request()->all());
    }

}
