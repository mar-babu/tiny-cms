<?php

namespace App\Http\Handle\PostHandler;

use App\Http\Handle\Interfaces\DeleteInterface;
use App\Post;
use Illuminate\Support\Facades\DB;


class DeletePost implements DeleteInterface
{
    private $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function delete()
    {
        try {
            DB::beginTransaction();
            $id = $this->request->id;
            $category = Post::find($id);
            $category->delete();
            DB::commit();
            return true;
        } catch (\Exception $exception) {
            DB::rollback();
            return false;
        }
    }
}