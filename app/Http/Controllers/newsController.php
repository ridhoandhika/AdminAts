<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
class newsController extends Controller
{
    
    // public function index()
    // {
    //     $news = DB::table('news')->paginate(5);
    //     return view('news.index',['news' => $news]);
    // }
    public function all()
    {
        return news::all();
    }

    public function show($id)
    {
        return news::find($id);
    }

    public function store(Request $request)
    {
        return news::create($request->all());
    }

    public function update($id, Request $request)
    {
        $news = news::find($id);
        $news->update($request->all());
        return $news;
    }

    public function delete($id)
    {
        $news = news::find($id);
        $news->delete();
        return 204;
    }
}
