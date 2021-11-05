<?php

namespace Jestrux\Blogger\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model{
    use \Jestrux\Blogger\Http\Traits\UsesUuid;
    use HasFactory;

    protected $fillable = ['title', 'body', 'author', 'published_at', 'cover_url', 'creator_json'];

    protected $dates = ['created_at', 'updated_at', 'published_at'];
    
    public $incrementing = false;

    public function slug(){
        return !is_null($this->slug) ? $this->slug : $this->id;
    }
    
    public function clean_body(){
        return strip_tags($this->body);
    }
    
    public function short_body(){
        return substr(strip_tags($this->clean_body()), 0, 120) . '...';
    }
}