<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Redirect ;
use Intervention\Image\Facades\Image;
class ArticleController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');


    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('dashboard.blog.list',[
            'list'=> Article::all(),
            'active'=>'articles',
            'title'=> "Articles",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('dashboard.blog.add',[
            'active'=>'articles',
            'title'=> "Add Article",

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $rules = [
            'title' => 'required',
            'content' => 'required',


        ];

        $this->validate($request, $rules);
        $file =$request->file('file') ;

        $img = "" ;
        if ($file){

            $img = $file->getClientOriginalName() ;
            Image::make($file->getRealPath())->save(public_path('images/' . $img));
        }

        $article =  Article::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'tag' => $request->get('tag'),
            'user_id' => Auth::user()->id,
            'img_url' => $img
        ]);





        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


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
        $rules = [
            'title' => 'required',
            'content' => 'required',


        ];

        $this->validate($request, $rules);
        $file =$request->file('file') ;

        $img = "" ;
        if (count($file)){

            $img = $file->getClientOriginalName() ;

            Image::make($file->getRealPath())->save(public_path('images/' . $img));
        }

        $article =  Article::find($id)->update([
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'tag' => $request->get('tag'),
            'user_id' => Auth::user()->id,
            'img_url' => $img
        ]);




        Session::Flash('success',"Operation has successfully finished");
        return Redirect::back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Article::find($id)->delete() ;
        return Redirect::back();
    }
}
