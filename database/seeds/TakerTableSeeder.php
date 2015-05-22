<?php

use Illuminate\Database\Seeder;
use App\Taker as Taker;

class TakerTableSeeder extends Seeder {
    public function run() {
        Taker::truncate();

        $takers_in_json = File::get(storage_path() . '/takers.json');
        $takers = json_decode($takers_in_json);

        foreach ($takers as $taker) {
            Taker::create([
                'login' => $taker->login,
                'password' => $taker->password,
                'title' => $taker->title,
                'lastname' => $taker->lastname,
                'firstname' => $taker->firstname,
                'gender' => $taker->gender,
                'email' => $taker->email,
                'picture' => $taker->picture,
                'address' => $taker->address,
            ]);
        }
    }
} 