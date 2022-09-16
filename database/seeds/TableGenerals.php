<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\System\Table\General;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class TableGenerals extends Seeder
{

  public function run()
  {
    $faker  = Faker::create('id_ID');
    for($i=1; $i <= 50; $i++){
      $TableGenerals = [
        'name' => $faker->name,
        'description' => $faker->address,
      ];
      General::insert($TableGenerals);
    }
  }

  // public function run()
  // {
  //   $TableGenerals = [
  //     [
  //       'name'              => 'Administrator',
  //       'description'       => 'Description Administrator',
  //       'created_at'        => Carbon::now(),
  //     ],
  //     [
  //       'name'              => 'Operator',
  //       'description'       => 'Description Operator',
  //       'created_at'        => Carbon::now(),
  //     ],
  //   ];
  //
  //   General::insert($TableGenerals);
  // }
}
