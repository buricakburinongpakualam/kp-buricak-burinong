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
            'name' => 'Administrator',
            'username' => 'adminidtrstor',
            'email' => 'buricakburinongpakualam@gmail.com',
            'password' => bcrypt('kp.buricakburinong')
        ]);
    }
}
