<?php

use Illuminate\Database\Seeder;

class voteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vote::class, 50)->create();
    }
}
