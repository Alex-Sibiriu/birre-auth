<?php

namespace Database\Seeders;

use App\Functions\Helper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\StoreType;
use Faker\Generator as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $clients = json_decode(file_get_contents(__DIR__ . '/beer-store.json'));
        foreach ($clients as $client) {
            $new_client = new Client();
            $new_client->store_type_id = StoreType::where('name',  $client->tipo)->first()->id;
            $new_client->name = $client->nome;
            $new_client->slug = Helper::createSlug( $client->nome, Client::class);
            $new_client->city = $client->città;
            $new_client->address = $faker->address();
            $new_client->save();
        }
    }
}
