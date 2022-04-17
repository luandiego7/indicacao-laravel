<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
           'name'     => 'Luan Araujo',
           'email'    => 'luan@codintop.com',
           'password' => bcrypt('admin')
       ]);
    }
}
