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

        User::create([
            'name' => 'Ade Lukman',
            'username' => 'adelukman',
            'email' => 'lukmanade150@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'AL',
        //     'email' => 'al@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

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
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione, voluptatibus impedit numquam veniam repudiandae nam dolores velit! Voluptas repellat sit maiores. Fugiat ipsum fugit vero minus facilis quod ad nobis! Enim ipsum ipsam ab omnis earum, nulla dolorem cupiditate nam. Eligendi, incidunt sit amet laborum ipsum, nulla dolorum ut illum maxime ducimus obcaecati, natus enim perferendis dolore sint magni eaque perspiciatis molestiae consequuntur fugiat. Laboriosam suscipit veritatis reprehenderit dignissimos fugiat tenetur eum praesentium assumenda, dicta et, amet ea omnis! Vel atque obcaecati dolor quos magni cumque mollitia similique in eum ad veritatis, libero quia facere optio corrupti laborum et ratione laboriosam architecto dolores, possimus nostrum vitae aspernatur. Nam!
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione, voluptatibus impedit numquam veniam repudiandae nam dolores velit! Voluptas repellat sit maiores. Fugiat ipsum fugit vero minus facilis quod ad nobis! Enim ipsum ipsam ab omnis earum, nulla dolorem cupiditate nam. Eligendi, incidunt sit amet laborum ipsum, nulla dolorum ut illum maxime ducimus obcaecati, natus enim perferendis dolore sint magni eaque perspiciatis molestiae consequuntur fugiat. Laboriosam suscipit veritatis reprehenderit dignissimos fugiat tenetur eum praesentium assumenda, dicta et, amet ea omnis! Vel atque obcaecati dolor quos magni cumque mollitia similique in eum ad veritatis, libero quia facere optio corrupti laborum et ratione laboriosam architecto dolores, possimus nostrum vitae aspernatur. Nam!
        //     ',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione, voluptatibus impedit numquam veniam repudiandae nam dolores velit! Voluptas repellat sit maiores. Fugiat ipsum fugit vero minus facilis quod ad nobis! Enim ipsum ipsam ab omnis earum, nulla dolorem cupiditate nam. Eligendi, incidunt sit amet laborum ipsum, nulla dolorum ut illum maxime ducimus obcaecati, natus enim perferendis dolore sint magni eaque perspiciatis molestiae consequuntur fugiat. Laboriosam suscipit veritatis reprehenderit dignissimos fugiat tenetur eum praesentium assumenda, dicta et, amet ea omnis! Vel atque obcaecati dolor quos magni cumque mollitia similique in eum ad veritatis, libero quia facere optio corrupti laborum et ratione laboriosam architecto dolores, possimus nostrum vitae aspernatur. Nam!
        //     ',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus reprehenderit blanditiis est odit dignissimos dolores doloribus ad? Eos ut sed ratione, voluptatibus impedit numquam veniam repudiandae nam dolores velit! Voluptas repellat sit maiores. Fugiat ipsum fugit vero minus facilis quod ad nobis! Enim ipsum ipsam ab omnis earum, nulla dolorem cupiditate nam. Eligendi, incidunt sit amet laborum ipsum, nulla dolorum ut illum maxime ducimus obcaecati, natus enim perferendis dolore sint magni eaque perspiciatis molestiae consequuntur fugiat. Laboriosam suscipit veritatis reprehenderit dignissimos fugiat tenetur eum praesentium assumenda, dicta et, amet ea omnis! Vel atque obcaecati dolor quos magni cumque mollitia similique in eum ad veritatis, libero quia facere optio corrupti laborum et ratione laboriosam architecto dolores, possimus nostrum vitae aspernatur. Nam!
        //     ',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
