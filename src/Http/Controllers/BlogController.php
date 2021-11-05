<?php

namespace Jestrux\Blogger\Http\Controllers;

use Illuminate\Routing\Controller;
use Jestrux\Blogger\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function save(Request $request){
        $remaining_fields = $request->except('id');
        try {
            if(!is_null($request->input('id'))){
                $id = $request->input('id');
                $redirect_url = url("admin/blogs/$id/edit/");
                $new_blog = Blog::find($request->input('id'));
                $new_blog->update($remaining_fields);
            }
            else{
                $new_blog = new Blog;
                $new_blog = $new_blog->create($remaining_fields);
                $id = $new_blog->id;
            }

            $slug = "";
            if (!is_null($request->input('title'))){
                $slug = Str::slug($request->input('title'));
                $new_blog->slug = $slug;
                $new_blog = $new_blog->save();
            }

            $response_array = ["new_id" => $id, "status" => true];

            if(isset($redirect_url))
                $response_array['redirect_url'] = $redirect_url;

            return response()->json($response_array);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'error' => $e->getMessage()
            ]);
        }
    }
    
    public function delete($id){
        $blog = Blog::find($id);
        return $blog->delete() ? 'true': 'false';
    }
    
    public function unpublish($id = null, Request $request){
        $blog = Blog::where('id', '=', $id)
                    ->orWhere('slug', '=', $id)->first();
        $blog->published_at = null;
        $blog->save();
        return response()->json(["success" => true]);
    }
}