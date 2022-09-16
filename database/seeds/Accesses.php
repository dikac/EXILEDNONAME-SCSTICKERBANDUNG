<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
use App\Access;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class Accesses extends Seeder
{

  public function run()
  {
    $accesses = [
      [
        'name'              => 'Administrator',
        'description'       => '-',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'Operator',
        'description'       => '-',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'User',
        'description'       => '-',
        'created_at'        => Carbon::now(),
      ],
    ];

    Access::insert($accesses);
  }
}
