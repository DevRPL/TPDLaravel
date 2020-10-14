<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'testing',
                'email' => '​admin@sasuka.com​',
                'email_verified_at' => now(),
                'password' => bcrypt('sasuka'), // 123qweasd
                'remember_token' => Str::random(30),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        );
    }
}
