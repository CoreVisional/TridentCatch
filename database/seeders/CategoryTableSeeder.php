<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Carbon\Carbon;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $now = Carbon::now()->toDateTimeString();

        Category::create([
            'name' => 'Wholefish',
            'slug' => 'wholefish',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Category::create([
            'name' => 'Shellfish',
            'slug' => 'shellfish',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Category::create([
            'name' => 'Roe',
            'slug' => 'roe',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        Category::create([
            'name' => 'Fishcut',
            'slug' => 'fishcut',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
