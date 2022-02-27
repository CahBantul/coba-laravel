<?php

namespace App\Models;


class Post_ 
{
    private static $blogPost = [
        [
            "title" => "judul Post",
            "slug" => "judul-post",
            "author" => "Nozami",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam consectetur quidem incidunt iusto sapiente aperiam eum repudiandae rerum, fuga nisi saepe sit eligendi sunt nulla veritatis, culpa aut molestiae numquam earum voluptatem quae provident ducimus? Expedita aliquid debitis dolores magnam iusto. Quia voluptatum totam temporibus. Officia voluptatum eos repudiandae eligendi deleniti magni ea sapiente atque voluptatibus? Ex excepturi fugiat molestiae temporibus asperiores, harum dignissimos dolore! Ex architecto iure et voluptatem, repellat quibusdam, tempora repudiandae inventore ut in harum commodi ipsam."
        ],
        [
            "title" => "judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nozami Ajitama",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam consectetur quidem incidunt iusto sapiente aperiam eum repudiandae rerum, fuga nisi saepe sit eligendi sunt nulla veritatis, culpa aut molestiae numquam earum voluptatem quae provident ducimus? Expedita aliquid debitis dolores magnam iusto. Quia voluptatum totam temporibus. Officia voluptatum eos repudiandae eligendi deleniti magni ea sapiente atque voluptatibus? Ex excepturi fugiat molestiae temporibus asperiores, harum dignissimos dolore! Ex architecto iure et voluptatem, repellat quibusdam, tempora repudiandae inventore ut in harum commodi ipsam."
        ],
    
    ];

    public static function all ()
    {
        return collect(self::$blogPost);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}