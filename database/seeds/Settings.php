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
        'name'              => 'SC Sticker Cutting Bandung',
        'email'             => 'scstickerbdg@gmail.com',
        'phone'             => '089502855550',
        'address'           => 'Jl. Ranca Bali No.4B, Pasirkaliki, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40514',
        'description'       => 'SC STICKER CUTTING BANDUNG BERGERAK DALAM BIDANG JASA ADVERTISING,PENYEDIA PEMBUATANAN SAFETY DESIGN,
        RAMBU RAMBU LALULINTAS, STICKER CUTOM, SUNBLAST, NEON BOX, PERBAIKAN NEON BOX, BRANDING MOBIL WRAPPING MOTOR MOBIL DLL.',
        'created_at'        => Carbon::now(),
      ],
    ];

    Setting::insert($Settings);
  }
}
