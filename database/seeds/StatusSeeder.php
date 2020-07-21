<?php

use Illuminate\Database\Seeder;
use App\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'status' => 'pending',
            'description' => 'ketika user sudah check out, namun belum melakukan pembayaran',
        ]);

        Status::create([
            'status' => 'success',
            'description' => 'ketika user sudah check out, dan sudah melakukan pembayaran',
        ]);

        Status::create([
            'status' => 'canceled',
            'description' => 'ketika user sudah check out, namun user ingin transaksi dibatalkan, atau user lebih dari 2 x 24 jam tidak melakukan pembayaran',
        ]);
    }
}
