<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    private static $blog_posts = [
        [
            "title" => "Judul tulisan pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Jajang mahrul",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ],
        [
            "title" => "Judul tulisan kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Azzario razy",
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book."
        ]
        ];
    
    public static function all(){
        return collect(self::$blog_posts);
    }
    
    public static function find($slug){
        // $posts = self::$blog_posts;
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
    
}
