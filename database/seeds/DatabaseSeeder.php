<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $thesesse = new \App\User;
        $thesesse->name = 'ThjeMiZz18';
        $thesesse->email = 'thje-mizzen@hotmail.com';
        $thesesse->password = bcrypt('secret');
        $thesesse->save();

        $budget = $thesesse->budgets()->create([
            'name'=>'porno',
            'start_day' => 17
        ]);

        $categories = $budget->categories()->createMany([
            [
                'icon'=>'capsules',
                'name'=>'Health'
            ],
            [
                'icon'=>'gamepad',
                'name'=>'Fun & Games'
            ],
            [
                'icon'=>'utensils',
                'name'=>'Food'
            ]

        ]);
        $funandgames = $categories[1]->subCategories()->createMany([
            [
                'icon'=>'trophy',
                'name'=>'Steam',
                'budget_id'=>1
            ],
            [
                'icon'=>'address-card',
                'name'=>'Board Games',
                'budget_id'=>1
            ]
        ]);

        $period = $budget->periods()->create([
            'name' => 'March 2018',
            'start_date'=>'2018-03-01 00:01:00',
            'end_date'=>'2018-03-31 00:01:00',
            'spent'=>5000,
            'income'=>6000,
            'balance'=>1000
        ]);

        $hotdogitem = $categories[2]->items()->create([
            'name' => 'Hotdog',
            'store' => 'Bilka',
            'price' =>10,
            'type' => 'expense',
            'recurring' => 1 
        ]);
        
        $hotdogitem->recurring()->create([
            'type'=>'monthly',
            'start_day'=>5,
            'status'=>'active',
            'budget_id' => $budget->id
        ]);

        $spotifyitem = $categories[1]->items()->create([
            'name' => 'Spotify',
            'store' => 'Spotify',
            'price' =>24.99,
            'type' => 'expense',
            'recurring' => 1,
            'location' => 'losInternet'
        ]);

        $spotifyitem->recurring()->create([
            'type'=>'monthly',
            'start_day'=>21,
            'status'=>'active',
            'budget_id' => $budget->id
        ]);

        $suitem = $categories[0]->items()->create([
            'name' => 'SU-BABY',
            'store' => 'Staten',
            'price' =>5250,
            'type' => 'income',
            'recurring' => 1
        ]);

        $suitem->recurring()->create([
            'type'=>'monthly',
            'start_day'=>1,
            'status'=>'disabled',
            'budget_id' => $budget->id
        ]);

        
    }
}
