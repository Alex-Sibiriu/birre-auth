<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Beer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientBeerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 400; $i++) {

            $client = Client::inRandomOrder()->first();

            $beer_id = Beer::inRandomOrder()->first()->id;

            $client->beers()->attach($beer_id);
        }
    }
}
