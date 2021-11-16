<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
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
        User::truncate();
        Post::truncate();
        Category::truncate();


        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'Family Post',
            'slug' => 'family-post',
            'excerpt' => 'This is my first post about family. This post about family is all about family and how family is family.',
            'body' => '<p>This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'Personal Post',
            'slug' => 'personal-post',
            'excerpt' => 'This is my first post about Personal. This post about Personal is all about Personal and how Personal is Personal.',
            'body' => '<p>This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.</p>'
        ]);

        Post::create([
            'user_id' => 2,
            'category_id' => $work->id,
            'title' => 'Work Post',
            'slug' => 'work-post',
            'excerpt' => 'This is my first post about Personal. This post about Personal is all about Personal and how Personal is Personal.',
            'body' => '<p>This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.This is my first post about family. This post about family is all about family and how family is family.</p>'
        ]);

        User::factory(2)->create();

    }
}
