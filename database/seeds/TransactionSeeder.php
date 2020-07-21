<?php

use Illuminate\Database\Seeder;
use App\Transaction;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transaction::create([
            'user_id' => 2,
            'status_id' => 1,
            'jumlah' => 2,
        ]);
    }
}
