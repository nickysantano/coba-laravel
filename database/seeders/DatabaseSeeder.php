<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name'=>'Nicky Santano',
        //     'email'=>'nicky.santano@gmail.com',
        //     'password'=>bcrypt('1234')
        // ]);

        // User::create([
        //     'name'=>'Dedo Ferdian',
        //     'email'=>'dedo@gmail.com',
        //     'password'=>bcrypt('1234')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);
        Category::create([
            'name'=>'Web Design',
            'slug'=>'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Satu',
        //     'slug'=>'judul-satu',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus. Nisi natus tempora voluptatem sit at consectetur magni vitae voluptatibus voluptatum voluptate? Sed cumque voluptates soluta at omnis odio eos ipsa iusto repudiandae iure?</p><p>Adipisci veniam modi quasi labore ratione exercitationem hic provident reprehenderit quia iusto molestiae fugit itaque necessitatibus, iste autem molestias voluptates in neque. Magni a autem voluptates provident labore incidunt aliquam, vel officiis earum hic adipisci rerum asperiores corporis optio distinctio deserunt exercitationem quisquam blanditiis ea unde commodi?</p><p>Dolore nesciunt sint maxime quasi tempora ratione rerum saepe repellat quos cupiditate! Rem beatae enim, veritatis, ipsam nisi tenetur tempore magnam impedit iusto, necessitatibus illum quaerat aspernatur molestias accusamus quibusdam eveniet.</p>',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Dua',
        //     'slug'=>'judul-dua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus. Nisi natus tempora voluptatem sit at consectetur magni vitae voluptatibus voluptatum voluptate? Sed cumque voluptates soluta at omnis odio eos ipsa iusto repudiandae iure?</p><p>Adipisci veniam modi quasi labore ratione exercitationem hic provident reprehenderit quia iusto molestiae fugit itaque necessitatibus, iste autem molestias voluptates in neque. Magni a autem voluptates provident labore incidunt aliquam, vel officiis earum hic adipisci rerum asperiores corporis optio distinctio deserunt exercitationem quisquam blanditiis ea unde commodi?</p><p>Dolore nesciunt sint maxime quasi tempora ratione rerum saepe repellat quos cupiditate! Rem beatae enim, veritatis, ipsam nisi tenetur tempore magnam impedit iusto, necessitatibus illum quaerat aspernatur molestias accusamus quibusdam eveniet.</p>',
        //     'category_id'=>1,
        //     'user_id'=>2
        // ]);

        // Post::create([
        //     'title'=>'Judul Tiga',
        //     'slug'=>'judul-tiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus.',
        //     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur ex atque praesentium placeat porro soluta aut voluptatibus. Nisi natus tempora voluptatem sit at consectetur magni vitae voluptatibus voluptatum voluptate? Sed cumque voluptates soluta at omnis odio eos ipsa iusto repudiandae iure?</p><p>Adipisci veniam modi quasi labore ratione exercitationem hic provident reprehenderit quia iusto molestiae fugit itaque necessitatibus, iste autem molestias voluptates in neque. Magni a autem voluptates provident labore incidunt aliquam, vel officiis earum hic adipisci rerum asperiores corporis optio distinctio deserunt exercitationem quisquam blanditiis ea unde commodi?</p><p>Dolore nesciunt sint maxime quasi tempora ratione rerum saepe repellat quos cupiditate! Rem beatae enim, veritatis, ipsam nisi tenetur tempore magnam impedit iusto, necessitatibus illum quaerat aspernatur molestias accusamus quibusdam eveniet.</p>',
        //     'category_id'=>2,
        //     'user_id'=>1
        // ]);
    }
}
