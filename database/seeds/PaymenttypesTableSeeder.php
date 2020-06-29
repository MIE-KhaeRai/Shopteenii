<?php

use Illuminate\Database\Seeder;

class PaymenttypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Paymenttype::create([
            'type' => 'mobiletopup',
        ]);

        App\Paymenttype::create([
            'type' => 't10wallet',
        ]);
    }
}
