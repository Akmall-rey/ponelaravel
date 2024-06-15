<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Patrick Star",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit facere eligendi dolorum quasi voluptatibus veniam recusandae ipsum, atque laboriosam magnam eaque et perspiciatis obcaecati, necessitatibus accusamus quaerat. Adipisci itaque hic laboriosam nisi laudantium accusantium, nesciunt eum quo repellendus ut iusto suscipit perferendis aliquam eos et qui a amet quod dolorum iste! Suscipit dolores quis delectus, architecto impedit veniam sunt eius, deserunt natus, ea neque nisi perspiciatis temporibus voluptate praesentium consectetur odio illum? Iusto, mollitia sapiente quos sint harum impedit doloribus!"
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Spongebob Squarepants",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur placeat, repellat atque magni velit quisquam dolore fugiat tempora, cupiditate possimus unde tempore ipsum architecto quis modi? Ratione excepturi quidem magnam veritatis temporibus asperiores provident dignissimos expedita repellat dolor voluptates qui, accusantium sint voluptatem culpa fugit corporis at cupiditate. Nobis voluptates nemo quia laboriosam atque sed consequuntur. Deserunt rerum dolorum debitis! Quam itaque recusandae nulla distinctio. Velit cupiditate maiores provident eaque deserunt nesciunt voluptatibus ea quo quae qui inventore nobis aperiam incidunt asperiores sequi perspiciatis delectus id quam minus, magnam perferendis, suscipit laborum molestiae. At numquam eligendi, asperiores obcaecati temporibus dolorem."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
