<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name'=>'mobiles'
        ]);
        category::create([
            'name'=>'home appliances'
        ]);
        category::create([
            'name'=>'watches'
        ]);
    }
}
