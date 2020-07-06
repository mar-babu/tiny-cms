<?php

namespace App\Http\Handle\PostHandler;

use App\Http\Handle\Interfaces\SaveInterface;
use App\Post;
use Illuminate\Support\Facades\DB;

class SavePost implements SaveInterface
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }


    public function save()
    {
        try {
            DB::beginTransaction();
            $id = $this->request->id ?? null;
            $post = Post::findOrNew($id);
            $post->title = $this->request->title;
            $post->brief = $this->request->brief;
            $post->type = $this->request->type;
            $post->section = $this->request->section;
            /* file/image upload*/
            if ($this->request->hasFile('file')) {
                $fileName = time() . '.' . $this->request->file->getClientOriginalExtension();
                $this->request->file->move(public_path('admin/post/files'), $fileName);
                $post->file = $fileName;
            }
            $post->save();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            DB::rollback();
            return false;
        }
    }

}