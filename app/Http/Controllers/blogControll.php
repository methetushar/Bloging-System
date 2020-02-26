<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class blogControll extends Controller
{
    public  function  index()
    {
        return view('index');
    }

    public function single_blog($id)
    {
        $single_blog = DB::table('post')->where('id',$id)->get();
        return view('pages.single_blog', compact('single_blog'));
    }
}
