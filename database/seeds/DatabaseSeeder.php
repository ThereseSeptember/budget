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
            'name'=>'porno'
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
            'start_date'=>'2018-03-01 00:01:00',
            'end_date'=>'2018-03-31 00:01:00',
            'spent'=>5000,
            'income'=>6000,
            'balance'=>1000
        ]);

        //$recurring = $budget->recurrings()->create([])

        
    }
}
