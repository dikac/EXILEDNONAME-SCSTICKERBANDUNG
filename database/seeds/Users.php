<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Users extends Seeder
{

  public function run()
  {
    $users = [
      [
        'id_access'         => '1',
        'name'              => 'SC',
        'username'          => 'admin',
        'phone'             => '089502855550',
        'email'             => 'scstickerbdg@gmail.com',
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
    ];

    User::insert($users);
  }
}
