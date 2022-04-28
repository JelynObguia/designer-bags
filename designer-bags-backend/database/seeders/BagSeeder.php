<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bag;

class BagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bag::factory(30)->create();
    }
}
