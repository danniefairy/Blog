<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

use DB;
class blogpostcontroller extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexsearch(){
        $blogs=DB::table('blog_post')->orderBy('id','desc')->get();
        $categories=DB::table('categories')->get();
         return view('/searchresult')->with(['blogs'=> $blogs])->with(['categories'=> $categories]);
    }
    public function index()
    {
        //
        //$blogs=Blog::all();
        $blogs=DB::table('blog_post')->orderBy('id','desc')->get();
        $blogs=DB::table('blog_post')->paginate(2);
        $categories=DB::table('categories')->get();
        return view('post.post')->with(['blogs'=> $blogs])->with(['categories'=> $categories]);//後半部只是教學用
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=DB::table('categories')->get();
        return view('post.create')->with(['categories'=> $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'img'=>'required',
            ]);

        $blog=new Blog;
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->category_id=$request->category_id;
        $blog->img=$request->img;
        $blog->save();

        return redirect('post')->with('message','data has been updated!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()//這個show因為沒有$id輸入綁架了整個/post/..之後的網站
    {
        //$blogs=Blog::all();
        $blogs=DB::table('blog_post')->get();
        $categories=DB::table('categories')->get();
        return view('/post/profilepageaboutme')->with('blogs',$blogs)->with(['categories'=> $categories]);//一行就可以代表profile資料夾下所有網頁
    }

    public function pass($id){//因為show的關係，要呼叫其他db裡面的資訊只好別放在同一個post資料夾內
        //$blog=Blog::find($id);
        $blog=DB::table('blog_post')->find($id);
        return view('/more')->with(['blog'=> $blog]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog=DB::table('blog_post')->find($id);
        $categories=DB::table('categories')->get();
        return view('/post/edit')->with('blog',$blog)->with(['categories'=> $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'category_id'=>'required',
            'img'=>'required',
            ]);

        $blog=Blog::find($id);
        $blog->title=$request->title;
        $blog->description=$request->description;
        $blog->category_id=$request->category_id;
        $blog->img=$request->img;
        $blog->save();

        return redirect('/post')->with('message','data has been editd!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $blog=Blog::find($id);
        $blog->delete();
        return redirect('post')->with('message','data has been deleted!');
    }
}
