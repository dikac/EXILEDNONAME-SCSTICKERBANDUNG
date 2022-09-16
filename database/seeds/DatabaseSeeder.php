<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Settings::class);
        $this->call(Accesses::class);
        $this->call(Users::class);
        $this->call(TableGenerals::class);
    }
}
