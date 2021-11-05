<?php

namespace Jestrux\Blogger\View\Components;

use Illuminate\View\Component;
use Jestrux\Blogger\Models\Blog;

class Data extends Component
{
    public $data;
    public $rowId;
    public $publishedOnly;
    public $limit;
    public $instanceId;

    public function __construct($publishedOnly = false, $limit = null, $rowId = null)
    {
        if($rowId == null){
            $blogs = $publishedOnly ? Blog::whereNotNull('published_at')->get() : Blog::all();
            if($limit != null)
                $blogs = $blogs->take($limit);

            $this->data = $blogs;
        }
        else{
            $blogs = Blog::where('id', '=', $rowId)
                    ->orWhere('slug', '=', $rowId);
            if($publishedOnly)
                $blogs = $blogs->whereNotNull('published_at');
                    
            $this->data = $blogs->first();
        }

        $bytes = random_bytes(6);
        $this->instanceId = bin2hex($bytes);
    }

    public function render()
    {
        return view('blogger::components.data', [
            "data" => $this->data,
            "instanceId" => $this->instanceId,
        ]);
    }
}
