<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //        Category::truncate();
        //        Post::truncate();
        //        User::truncate();
        $user = User::factory()->create();
        Post::factory(10)->create();

        //        $user = User::factory()->create();
        //        $family = Category::create([
        //            'name' => 'Family',
        //            'slug' => 'family'
        //        ]);
        //        $work = Category::create([
        //            'name' => 'Work',
        //            'slug' => 'work'
        //        ]);
        //        $hobby = Category::create([
        //            'name' => 'Hobby',
        //            'slug' => 'hobby'
        //        ]);
        //
        //        Post::create([
        //            'title' => 'My family post',
        //
        //            'user_id' => $user->id,
        //            'category_id' => $family->id,
        //            'slug' => 'my-family-post',
        //            'excerpt' => '<p>Lorem ipsum dolor sit</p>',
        //            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus ligula lectus, vel consequat magna dictum malesuada. Praesent cursus viverra augue, ut ultrices nibh tristique in. Duis faucibus vehicula est, quis mollis massa pharetra vitae. Aliquam a tempus ligula, eu tristique orci. Phasellus a vehicula enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas ac tortor ut leo pellentesque volutpat sit amet vitae diam. Etiam eu tempus dolor. Mauris ex libero, volutpat id vehicula vitae, aliquet at felis.</p>'
        //        ]);
        //        Post::create([
        //            'title' => 'My Work post',
        //
        //            'user_id' => $user->id,
        //            'category_id' => $work->id,
        //            'slug' => 'my-work-post',
        //            'excerpt' => '<p>Lorem ipsum dolor sit</p>',
        //            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus ligula lectus, vel consequat magna dictum malesuada. Praesent cursus viverra augue, ut ultrices nibh tristique in. Duis faucibus vehicula est, quis mollis massa pharetra vitae. Aliquam a tempus ligula, eu tristique orci. Phasellus a vehicula enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas ac tortor ut leo pellentesque volutpat sit amet vitae diam. Etiam eu tempus dolor. Mauris ex libero, volutpat id vehicula vitae, aliquet at felis.</p>'
        //        ]);
        //        Post::create([
        //            'title' => 'My hobby post',
        //            'slug' => 'my-hobby-post',
        //            'user_id' => $user->id,
        //            'category_id' => $hobby->id,
        //            'excerpt' => '<p>Lorem ipsum dolor sit</p>',
        //            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus ligula lectus, vel consequat magna dictum malesuada. Praesent cursus viverra augue, ut ultrices nibh tristique in. Duis faucibus vehicula est, quis mollis massa pharetra vitae. Aliquam a tempus ligula, eu tristique orci. Phasellus a vehicula enim. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas ac tortor ut leo pellentesque volutpat sit amet vitae diam. Etiam eu tempus dolor. Mauris ex libero, volutpat id vehicula vitae, aliquet at felis.</p>'
        //        ]);
    }
}
