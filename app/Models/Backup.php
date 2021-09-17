<?php

namespace App\Models;


class Post
{

    private static $blog_posts = [
        [
            'title' => 'Postingan Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Mamang Sagne',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, autem dicta doloribus dolorum, ea enim facilis inventore itaque mollitia natus omnis placeat quasi quos reprehenderit suscipit tempora unde! Dolorem doloremque fugiat iure similique voluptates. Ab aliquam aliquid autem beatae consectetur eaque eius facere, iste laborum maiores maxime minima molestiae nemo numquam placeat praesentium rem reprehenderit repudiandae tempora vel velit vero voluptatem voluptates. A consequatur cum ducimus ea enim eos eveniet, hic incidunt molestiae molestias nemo nesciunt quis soluta temporibus velit.'
        ],
        [
            'title' => 'Postingan Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Kang Bucin',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, autem dicta doloribus dolorum, ea enim facilis inventore itaque mollitia natus omnis placeat quasi quos reprehenderit suscipit tempora unde! Dolorem doloremque fugiat iure similique voluptates. Ab aliquam aliquid autem beatae consectetur eaque eius facere, iste laborum maiores maxime minima molestiae nemo numquam placeat praesentium rem reprehenderit repudiandae tempora vel velit vero voluptatem voluptates. A consequatur cum ducimus ea enim eos eveniet, hic incidunt molestiae molestias nemo nesciunt quis soluta temporibus velit.'
        ],
        [
            'title' => 'Postingan Ketiga',
            'slug' => 'judul-post-ketiga',
            'author' => 'Kang Boong',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, autem dicta doloribus dolorum, ea enim facilis inventore itaque mollitia natus omnis placeat quasi quos reprehenderit suscipit tempora unde! Dolorem doloremque fugiat iure similique voluptates. Ab aliquam aliquid autem beatae consectetur eaque eius facere, iste laborum maiores maxime minima molestiae nemo numquam placeat praesentium rem reprehenderit repudiandae tempora vel velit vero voluptatem voluptates. A consequatur cum ducimus ea enim eos eveniet, hic incidunt molestiae molestias nemo nesciunt quis soluta temporibus velit.'
        ],
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

/*[
    'title' => 'Postingan Pertama',
    'excerpt' => 'Lorem ipsum dolor sit ameta',
    'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, autem dicta doloribus dolorum, ea enim facilis inventore itaque mollitia natus omnis placeat quasi quos reprehenderit suscipit tempora unde! Dolorem doloremque fugiat iure similique voluptates. Ab aliquam aliquid autem beatae consectetur eaque eius facere, iste laborum maiores maxime minima molestiae nemo numquam placeat praesentium rem reprehenderit repudiandae tempora vel velit vero voluptatem voluptates. A consequatur cum ducimus ea enim eos eveniet, hic incidunt molestiae molestias nemo nesciunt quis soluta temporibus velit.'
]*/
