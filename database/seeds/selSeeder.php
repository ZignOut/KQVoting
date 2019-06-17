<?php

use Illuminate\Database\Seeder;

class selSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Selection::class, 50)->create();
    }
}
