<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\data;
use App\post;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function edit($id)
    {
        $data = data::find($id);
        if ($data) {
            data::find($id)->delete();
            return redirect("/");

        } else {
            echo "<script type='text/javascript'>alert('wrong data');</script>";
                return redirect("/");

            }

    }
    public function form()
    {
        return view('form');
    }
    public function submit()
    {
   $post=new Post;
   $post->name=request("email");
        $post->age=request("pwd");
        $post->save();
        return redirect("/");
    }
}