<?php

use Illuminate\Database\Seeder;
use App\Http\Controllers\Conf;
use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Lenard Mangay-ayam',
            'email' => 'abenojardev@gmail.com',
            'password' => bcrypt('1234'),
            'type' => Conf::ROLE_ADMIN,
        ]);
    }
}
