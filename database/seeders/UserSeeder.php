<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Yohanes Crusc";
        $user->email = "ycrusc@gmail.com";
        $user->password = bcrypt("12345678");
        $user->phone = "123456789";
        $user->alamat = "Klaten";
        $user->role = "admin";
        $user->save();
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
