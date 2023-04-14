<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
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


        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);
        $user2 = User::factory()->create([
            'name' => 'Jane Doe'
        ]);

        Post::Factory(5)->create([
            'user_id' => $user->id
        ]);
        Post::Factory(5)->create([
            'user_id' => $user2->id
        ]);
        // $category = Category::factory()->create([
        //     'name' => 'Familia',
        //     'slug' => 'familia'
        // ]);
        // Post::Factory(5)->create([
        //     'user_id' => $user2->id,
        //     'category_id' => $category->id
        // ]);

        // Category::create([
        //     'name' => 'Trabajo',
        //     'slug' => 'trabajo'
        // ]);
        // Category::create([
        //     'name' => 'Hobbies',
        //     'slug' => 'hobbies'
        // ]);

        // Post::create([
        //     'title' => 'La familia',
        //     'user_id' => 1,
        //     'category_id' => 1,
        //     'slug' =>'la-familia',
        //     'excerpt' => 'La familia es importante',
        //     'body' => 'La familia es importante y aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo '
        // ]);

        // Post::create([
        //     'title' => 'La familia 2',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' =>'la-familia-2',
        //     'excerpt' => 'La familia es importante',
        //     'body' => 'La familia es importante y aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo '
        // ]);

        // Post::create([
        //     'title' => 'El trabajo ',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' =>'el-trabajo',
        //     'excerpt' => 'El trabajo es importante',
        //     'body' => 'El trabajo es importante y aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo '
        // ]);

        // Post::create([
        //     'title' => 'El trabajo 2',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' =>'el-trabajo-2',
        //     'excerpt' => 'El trabajo es importante',
        //     'body' => 'El trabajo es importante y aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo '
        // ]);

        // Post::create([
        //     'title' => 'Mi pasatiempo',
        //     'category_id' => 3,
        //     'user_id' => 1,
        //     'slug' =>'mi-pasatiempo',
        //     'excerpt' => 'El trabajo es importante',
        //     'body' => 'El trabajo es importante y aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo 
        //     aquí va un texto largo aquí va un texto largo aquí va un texto largo '
        // ]);
    }
}
