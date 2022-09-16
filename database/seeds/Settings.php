<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;
use App\Setting;

class Settings extends Seeder
{

  public function run()
  {
    $Settings = [
      [
        'name'              => 'EXILEDNONAME',
        'description'       => '-',
        'created_at'        => Carbon::now(),
      ],
    ];

    Setting::insert($Settings);
  }
}
