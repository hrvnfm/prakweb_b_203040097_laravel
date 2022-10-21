<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "name" => "Hervin Fakhrul",
        "email" => "203040097@mail.unpas.ac.id",
        "image" => "profile.jpg"
    ]);
});


Route::get('/posts', function () {
    $blog_posts = [
        [
            "tittle" => "How to build website",
            "slug" => "judul-post-pertama",
            "author" => "Hervin Fakhrul",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
        [
            "tittle" => "How to build database",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Rizky",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
    ];
    return view('posts', [
        "tittle" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "tittle" => "How to build website",
            "slug" => "judul-post-pertama",
            "author" => "Hervin Fakhrul",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
        [
            "tittle" => "How to build database",
            "slug" => "judul-post-kedua",
            "author" => "Muhamad Rizky",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad distinctio dolore doloremque error est et eveniet impedit ipsum minima nesciunt perferendis, quae, quam quasi quibusdam, quo sed sequi similique tempora veniam voluptatibus. A adipisci alias aliquid debitis dolor dolorem eligendi esse est eveniet fuga laudantium modi mollitia nam nihil numquam, quo reprehenderit, vero vitae? A aliquam asperiores blanditiis consequuntur cumque cupiditate ea eaque exercitationem facere incidunt, inventore itaque libero minima natus necessitatibus neque nisi numquam odit officia quae quaerat qui quos reprehenderit repudiandae rerum sapiente sed ullam. Doloremque harum molestias quas quidem voluptatibus. Accusantium adipisci consectetur eum eveniet sit vel?"
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "tittle" => "Single Post",
        "post" => $new_post
    ]);
});
