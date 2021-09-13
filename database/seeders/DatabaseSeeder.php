<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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


        // User::create([
        //     'name' => 'Alfian Luthfi',
        //     'email' => 'alfiankurniawan85@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Luthfi',
        //     'email' => 'luthfi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur maxime aperiam delectus quis mollitia veniam facilis libero nobis voluptates quod! Neque, cum impedit. </p><p>Ipsum quia sit dolorem dicta iusto est animi totam optio facere saepe sapiente beatae corrupti quo architecto nesciunt rerum, mollitia hic laborum odit sunt ea accusantium quae, alias accusamus!</p> <p> Vero iure recusandae ut reprehenderit sint saepe alias a illum quas, eaque hic eius. Incidunt beatae accusamus, voluptatum officia accusantium velit quae eveniet dolorum nihil minus delectus excepturi praesentium ipsa recusandae optio non! Delectus expedita consectetur voluptate, cumque nulla sequi consequatur ducimus excepturi doloremque esse autem, voluptates cupiditate?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur maxime aperiam delectus quis mollitia veniam facilis libero nobis voluptates quod! Neque, cum impedit. </p><p>Ipsum quia sit dolorem dicta iusto est animi totam optio facere saepe sapiente beatae corrupti quo architecto nesciunt rerum, mollitia hic laborum odit sunt ea accusantium quae, alias accusamus!</p> <p> Vero iure recusandae ut reprehenderit sint saepe alias a illum quas, eaque hic eius. Incidunt beatae accusamus, voluptatum officia accusantium velit quae eveniet dolorum nihil minus delectus excepturi praesentium ipsa recusandae optio non! Delectus expedita consectetur voluptate, cumque nulla sequi consequatur ducimus excepturi doloremque esse autem, voluptates cupiditate?</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur maxime aperiam delectus quis mollitia veniam facilis libero nobis voluptates quod! Neque, cum impedit. </p><p>Ipsum quia sit dolorem dicta iusto est animi totam optio facere saepe sapiente beatae corrupti quo architecto nesciunt rerum, mollitia hic laborum odit sunt ea accusantium quae, alias accusamus!</p> <p> Vero iure recusandae ut reprehenderit sint saepe alias a illum quas, eaque hic eius. Incidunt beatae accusamus, voluptatum officia accusantium velit quae eveniet dolorum nihil minus delectus excepturi praesentium ipsa recusandae optio non! Delectus expedita consectetur voluptate, cumque nulla sequi consequatur ducimus excepturi doloremque esse autem, voluptates cupiditate?</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'tittle' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur maxime aperiam delectus quis mollitia veniam facilis libero nobis voluptates quod! Neque, cum impedit. </p><p>Ipsum quia sit dolorem dicta iusto est animi totam optio facere saepe sapiente beatae corrupti quo architecto nesciunt rerum, mollitia hic laborum odit sunt ea accusantium quae, alias accusamus!</p> <p> Vero iure recusandae ut reprehenderit sint saepe alias a illum quas, eaque hic eius. Incidunt beatae accusamus, voluptatum officia accusantium velit quae eveniet dolorum nihil minus delectus excepturi praesentium ipsa recusandae optio non! Delectus expedita consectetur voluptate, cumque nulla sequi consequatur ducimus excepturi doloremque esse autem, voluptates cupiditate?</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
