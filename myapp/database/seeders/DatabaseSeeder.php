<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Hervin Fakhrul',
            'username' => 'QueenAgella',
            'email' => '203040097@mail.unpas.ac.id',
            'password' => bcrypt('Mahardika008!')
        ]);
//
//        User::create([
//            'name' => 'Muhamad Rizky',
//            'email' => '203040043@mail.unpas.ac.id',
//            'password' => bcrypt('Unpas2020')
//        ]);

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

//        Post::create([
//            'title' => 'First Post',
//            'slug' => 'post-pertama',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eligendi.',
//            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas neque dicta accusamus recusandae, tempore laudantium expedita! Quisquam at animi tempora corporis repellat quos quibusdam inventore labore nihil eaque voluptatum dolorem amet ex unde hic maiores, quae, expedita voluptatibus explicabo iure fuga, deserunt mollitia quidem eos. Ullam totam labore, fuga nam quidem est! Pariatur ex nihil accusamus nisi excepturi laborum rem aliquid at id. Vitae voluptas, placeat temporibus voluptates nam optio aliquam beatae perferendis culpa, harum, maxime sapiente alias velit quam illo expedita magnam natus neque! Nisi deleniti ut repudiandae quisquam quam inventore facere officia natus alias, quis error illo esse?',
//            'category_id' => 1,
//            'user_id' => 1
//        ]);
//
//        Post::create([
//            'title' => 'Second Post',
//            'slug' => 'post-kedua',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eligendi.',
//            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas neque dicta accusamus recusandae, tempore laudantium expedita! Quisquam at animi tempora corporis repellat quos quibusdam inventore labore nihil eaque voluptatum dolorem amet ex unde hic maiores, quae, expedita voluptatibus explicabo iure fuga, deserunt mollitia quidem eos. Ullam totam labore, fuga nam quidem est! Pariatur ex nihil accusamus nisi excepturi laborum rem aliquid at id. Vitae voluptas, placeat temporibus voluptates nam optio aliquam beatae perferendis culpa, harum, maxime sapiente alias velit quam illo expedita magnam natus neque! Nisi deleniti ut repudiandae quisquam quam inventore facere officia natus alias, quis error illo esse?',
//            'category_id' => 1,
//            'user_id' => 1
//        ]);
//
//        Post::create([
//            'title' => 'Third Post',
//            'slug' => 'post-ketiga',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eligendi.',
//            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas neque dicta accusamus recusandae, tempore laudantium expedita! Quisquam at animi tempora corporis repellat quos quibusdam inventore labore nihil eaque voluptatum dolorem amet ex unde hic maiores, quae, expedita voluptatibus explicabo iure fuga, deserunt mollitia quidem eos. Ullam totam labore, fuga nam quidem est! Pariatur ex nihil accusamus nisi excepturi laborum rem aliquid at id. Vitae voluptas, placeat temporibus voluptates nam optio aliquam beatae perferendis culpa, harum, maxime sapiente alias velit quam illo expedita magnam natus neque! Nisi deleniti ut repudiandae quisquam quam inventore facere officia natus alias, quis error illo esse?',
//            'category_id' => 2,
//            'user_id' => 1
//        ]);
//
//        Post::create([
//            'title' => 'Fourth Post',
//            'slug' => 'post-keempat',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, eligendi.',
//            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptas neque dicta accusamus recusandae, tempore laudantium expedita! Quisquam at animi tempora corporis repellat quos quibusdam inventore labore nihil eaque voluptatum dolorem amet ex unde hic maiores, quae, expedita voluptatibus explicabo iure fuga, deserunt mollitia quidem eos. Ullam totam labore, fuga nam quidem est! Pariatur ex nihil accusamus nisi excepturi laborum rem aliquid at id. Vitae voluptas, placeat temporibus voluptates nam optio aliquam beatae perferendis culpa, harum, maxime sapiente alias velit quam illo expedita magnam natus neque! Nisi deleniti ut repudiandae quisquam quam inventore facere officia natus alias, quis error illo esse?',
//            'category_id' => 2,
//            'user_id' => 2
//        ]);
    }
}
