<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name'=> 'Eiji',
            'memo'=> '腹減った',
        ]);

        Item::create([
            'name'=> 'Tom',
            'memo'=> '腹減った2',
        ]);
    }
}
