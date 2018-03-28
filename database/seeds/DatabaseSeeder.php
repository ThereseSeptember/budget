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

        $budget->periods()->create([
            'start_date'=>'2018-03-01 00:01:00',
            'end_date'=>'2018-03-31 00:01:00',
            'spent'=>5000,
            'income'=>6000,
            'balance'=>1000
        ]);


        
    }
}
