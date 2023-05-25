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
            //     'name' => 'Jajang Mahrul',
            //     'email' => 'jajangmahrul22@gmail.com',
            //     'password' => bcrypt('admin')
            // ]);
            
            // User::create([
                //     'name' => 'Azzario razy',
                //     'email' => 'azza@gmail.com',
                //     'password' => bcrypt('admin1')
                // ]);
        User::factory(3)->create();
                
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Harum cupiditate nulla omnis 
        //                 laboriosam consequatur deleniti autem aspernatur voluptatum quaerat nobis?',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsa molestiae odio adipisci deleniti officia dolorum in 
        //                 provident a aut minima perspiciatis tempore optio quia earum consequuntur reprehenderit distinctio,</p> 
        //                 <p>labore dolorem quidem dicta, rem eligendi facilis itaque! 
        //                 Eveniet corrupti odit dolore nobis excepturi quas quaerat corporis, eaque exercitationem at possimus?</p>',
        //     'category_id' => 1,
        //     'user_id' =>1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        //                 Harum cupiditate nulla omnis 
        //                 laboriosam consequatur deleniti autem aspernatur voluptatum quaerat nobis?',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi ipsa molestiae odio adipisci deleniti officia dolorum in 
        //                 provident a aut minima perspiciatis tempore optio quia earum consequuntur reprehenderit distinctio,</p> 
        //                 <p>labore dolorem quidem dicta, rem eligendi facilis itaque! 
        //                 Eveniet corrupti odit dolore nobis excepturi quas quaerat corporis, eaque exercitationem at possimus?</p>',
        //     'category_id' => 2,
        //     'user_id' =>2
        // ]);
    }
}
