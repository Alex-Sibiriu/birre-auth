<?php

namespace Database\Seeders;

use App\Functions\Helper;
use App\Models\StoreType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types =[
            'store',
            'pub'
        ];

        foreach ($types as $type){

            $new_store_type = new StoreType();
            $new_store_type->name = $type;
            $new_store_type->slug = Helper::createSlug($type, StoreType::class);
            $new_store_type->save();
        }

    }
}
