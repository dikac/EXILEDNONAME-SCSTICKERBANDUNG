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
        'name'              => 'Naufal Haidir Ridha',
        'username'          => 'admin',
        'phone'             => '08112448111',
        'email'             => 'naufalhaidirridha@rocketmail.com',
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '2',
        'name'              => 'User 2',
        'username'          => 'user2',
        'phone'             => '08112448112',
        'email'             => 'user2@rocketmail.com',
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '3',
        'name'              => 'User 3',
        'username'          => 'user3',
        'phone'             => '08112448113',
        'email'             => 'user3@rocketmail.com',
        'password'          => bcrypt('1234'),
        'created_at'        => Carbon::now(),
      ],
    ];

    User::insert($users);
  }
}
