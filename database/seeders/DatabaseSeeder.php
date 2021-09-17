<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(3)->create();
         Post::factory(30)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
             'name' => 'Web Design',
             'slug' => 'web-design'
         ]);

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        /*User::create([
             'name' => 'Mamang',
             'email' => 'mamang@gmail.com',
             'password' => bcrypt('password')
         ]);

         User::create([
             'name' => 'Yudi',
             'email' => 'yudi@gmail.com',
             'password' => bcrypt('password')
         ]);*/

         /*

         Post::create([
             'title' => 'Judul Pertama',
             'slug' => 'judul-pertama',
             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi aperiam assumenda autem corporis distinctio eveniet harum incidunt ipsa laboriosam non pariatur perspiciatis, provident quasi tenetur totam ullam velit vitae.',
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate fuga fugit, iusto tempora voluptate! Aspernatur consequuntur, dignissimos doloribus ducimus eius iure mollitia nam nesciunt nulla, odit praesentium quam qui veniam. Adipisci atque autem deserunt excepturi illo, inventore itaque minima modi mollitia natus, non optio quia quidem reiciendis sapiente sit voluptas. Asperiores deleniti eum hic officia, quia reiciendis velit voluptates!</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur delectus ipsa maiores modi, molestiae necessitatibus nisi omnis quam, quibusdam quis quos rerum sequi sit tempore totam voluptatem. Delectus, dicta facere hic in minus omnis porro quidem quisquam quos reprehenderit!</p>',
             'category_id' => 1,
             'user_id' => 1,
         ]);

         Post::create([
             'title' => 'Judul Kedua',
             'slug' => 'judul-kedua',
             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi aperiam assumenda autem corporis distinctio eveniet harum incidunt ipsa laboriosam non pariatur perspiciatis, provident quasi tenetur totam ullam velit vitae.',
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate fuga fugit, iusto tempora voluptate! Aspernatur consequuntur, dignissimos doloribus ducimus eius iure mollitia nam nesciunt nulla, odit praesentium quam qui veniam. Adipisci atque autem deserunt excepturi illo, inventore itaque minima modi mollitia natus, non optio quia quidem reiciendis sapiente sit voluptas. Asperiores deleniti eum hic officia, quia reiciendis velit voluptates!</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur delectus ipsa maiores modi, molestiae necessitatibus nisi omnis quam, quibusdam quis quos rerum sequi sit tempore totam voluptatem. Delectus, dicta facere hic in minus omnis porro quidem quisquam quos reprehenderit!</p>',
             'category_id' => 1,
             'user_id' => 1,
         ]);

         Post::create([
             'title' => 'Judul Ketiga',
             'slug' => 'judul-ketiga',
             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi aperiam assumenda autem corporis distinctio eveniet harum incidunt ipsa laboriosam non pariatur perspiciatis, provident quasi tenetur totam ullam velit vitae.',
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate fuga fugit, iusto tempora voluptate! Aspernatur consequuntur, dignissimos doloribus ducimus eius iure mollitia nam nesciunt nulla, odit praesentium quam qui veniam. Adipisci atque autem deserunt excepturi illo, inventore itaque minima modi mollitia natus, non optio quia quidem reiciendis sapiente sit voluptas. Asperiores deleniti eum hic officia, quia reiciendis velit voluptates!</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur delectus ipsa maiores modi, molestiae necessitatibus nisi omnis quam, quibusdam quis quos rerum sequi sit tempore totam voluptatem. Delectus, dicta facere hic in minus omnis porro quidem quisquam quos reprehenderit!</p>',
             'category_id' => 3,
             'user_id' =>2,
         ]);

         Post::create([
             'title' => 'Judul Keempat',
             'slug' => 'judul-keempat',
             'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, animi aperiam assumenda autem corporis distinctio eveniet harum incidunt ipsa laboriosam non pariatur perspiciatis, provident quasi tenetur totam ullam velit vitae.',
             'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque cupiditate fuga fugit, iusto tempora voluptate! Aspernatur consequuntur, dignissimos doloribus ducimus eius iure mollitia nam nesciunt nulla, odit praesentium quam qui veniam. Adipisci atque autem deserunt excepturi illo, inventore itaque minima modi mollitia natus, non optio quia quidem reiciendis sapiente sit voluptas. Asperiores deleniti eum hic officia, quia reiciendis velit voluptates!</p>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequuntur delectus ipsa maiores modi, molestiae necessitatibus nisi omnis quam, quibusdam quis quos rerum sequi sit tempore totam voluptatem. Delectus, dicta facere hic in minus omnis porro quidem quisquam quos reprehenderit!</p>',
             'category_id' => 3,
             'user_id' => 2,
         ]);*/
    }
}
