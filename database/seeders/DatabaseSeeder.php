<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

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
        //     'name' => 'Fahmi Alim',
        //     'email' => 'fahmi@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Samsul Julfikar',
        //     'email' => 'samsul@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

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

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Laborum suscipit ex molestias vitae. Quaerat pariatur obcaecati modi nesciunt repellat,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor totam doloribus minima accusamus ab. 
        //     Eos officiis debitis laboriosam adipisci incidunt eligendi recusandae aliquid minus vel, 
        //     rerum nemo explicabo iste enim reiciendis vitae autem perferendis veniam hic aut sunt similique aliquam 
        //     molestiae? Beatae doloremque eveniet saepe quam et fugiat obcaecati,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Laborum suscipit ex molestias vitae. Quaerat pariatur obcaecati modi nesciunt repellat,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor totam doloribus minima accusamus ab. 
        //     Eos officiis debitis laboriosam adipisci incidunt eligendi recusandae aliquid minus vel, 
        //     rerum nemo explicabo iste enim reiciendis vitae autem perferendis veniam hic aut sunt similique aliquam 
        //     molestiae? Beatae doloremque eveniet saepe quam et fugiat obcaecati,',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Laborum suscipit ex molestias vitae. Quaerat pariatur obcaecati modi nesciunt repellat,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor totam doloribus minima accusamus ab. 
        //     Eos officiis debitis laboriosam adipisci incidunt eligendi recusandae aliquid minus vel, 
        //     rerum nemo explicabo iste enim reiciendis vitae autem perferendis veniam hic aut sunt similique aliquam 
        //     molestiae? Beatae doloremque eveniet saepe quam et fugiat obcaecati,',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]); 
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit.
        //     Laborum suscipit ex molestias vitae. Quaerat pariatur obcaecati modi nesciunt repellat,',
        //     'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolor totam doloribus minima accusamus ab. 
        //     Eos officiis debitis laboriosam adipisci incidunt eligendi recusandae aliquid minus vel, 
        //     rerum nemo explicabo iste enim reiciendis vitae autem perferendis veniam hic aut sunt similique aliquam 
        //     molestiae? Beatae doloremque eveniet saepe quam et fugiat obcaecati,',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]); 
    }
}
