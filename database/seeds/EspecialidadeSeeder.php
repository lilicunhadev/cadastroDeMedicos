<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Especialidade::create([
            'especialidade' => 'ALERGOLOGIA'
        ]);

        App\Especialidade::create([
            'especialidade' => 'ANGIOLOGIA'
        ]);

        App\Especialidade::create([
            'especialidade' => 'BUCO MAXILO'
        ]);

        App\Especialidade::create([
            'especialidade' => 'CARDIOLOGIA CLÍNICA'
        ]);
    }
}
