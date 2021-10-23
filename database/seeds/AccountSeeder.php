<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Dupa Savings Account',
                'init_invest' => 25000,
                'start_date' => '2021-10-18',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Hancock Savings Account',
                'init_invest' => 15000,
                'start_date' => '2021-10-19',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Hyuga Ian Savings Account',
                'init_invest' => 30000,
                'start_date' => '2021-10-20',
                'remarks' => 'Done with normal transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Account::create($acc);
        }
    }
}
