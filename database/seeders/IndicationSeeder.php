<?php

namespace Database\Seeders;

use App\Models\Indication;
use Illuminate\Database\Seeder;

class IndicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indication::create([
            'user_id' => 1,
            'name'    => 'Barry Allen',
            'cpf'     => '96197222051',
            'email'   => 'barry@flash.com',
            'phone'   => '11988776655',
            'product' => 'Acelerador de partículas'
        ]);
    }
}
