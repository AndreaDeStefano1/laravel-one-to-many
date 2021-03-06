<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    protected $fillable = [
        'title',
        'slug',
        'text',
        'category_id'
    ];

    public static function generateSlug($string){
        $slug = Str::slug($string, '-');
        $original_slug = $slug;
        $compare_slug = Post::where('slug', $slug)->first();
        $counter = 1;
        while ($compare_slug) {
            $slug = $original_slug . '-' . $counter;
            $counter++;
            $compare_slug = Post::where('slug', $slug)->first();
        }
        return $slug;
    }
}
