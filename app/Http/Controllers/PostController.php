<?php

namespace App\Http\Controllers;

use App\Http\Handle\PostHandler\SavePost;
use App\Http\Requests\PostRequest;
use App\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index()
    {
//        $data['posts'] = Post::all();
        $data['section1_posts'] = Post::where('section', 'section1')->get();
        $data['section2_posts'] = Post::where('section', 'section2')->get();
//        dd($data);

//        return view('admin.post.list', $data);
        return view('frontend.index', $data);
    }

    public function create()
    {
        $data['post'] = null;
        return view('admin.post.create_post', $data);
    }

    public function store(PostRequest $postRequest)
    {
        if ((new SavePost($postRequest))->save()) {
            Session::flash('alert-success', 'Data Stored Successfully!!');
            return redirect('post/list');
        }
        Session::flash('alert-danger', 'Data Store Failed!!');
        return redirect()->back();
    }
}
