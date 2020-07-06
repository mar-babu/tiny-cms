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
        $data['posts'] = Post::all();

        return view('admin.post.list', $data);
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
