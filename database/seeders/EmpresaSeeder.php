<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;
class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empresa = new Empresa();
        $empresa->nombre = 'Automotors Daniel';
        $empresa->direccion = '2do anillo y canal izuto';
        $empresa->telefono = '3324552';
        $empresa->propietario = 'Daniel mendoza carrasco';
        $empresa->email = 'daniel@gmail.com';
        $empresa->save();

        $empresa2 = new Empresa();
        $empresa2->nombre = 'Churrasqueria Buen gusto';
        $empresa2->direccion = '1er anillo - avenida irala';
        $empresa2->telefono = '23434113';
        $empresa2->propietario = 'Juan Torrico Perez';
        $empresa2->email = 'juan@gmail.com';
        $empresa2->save();

        $empresa3 = new Empresa();
        $empresa3->nombre = 'hipermaxi norte';
        $empresa3->direccion = '3er anillo avenida busch';
        $empresa3->telefono = '33999458';
        $empresa3->propietario = 'alberto Fernandez Rodriguez';
        $empresa3->email = 'alberto@gmail.com';
        $empresa3->save();

        $empresa4 = new Empresa();
        $empresa4->nombre = 'Terminal de buses bimodal';
        $empresa4->direccion = 'Avenida Brasil entre 2do y 3er anillo';
        $empresa4->telefono = '23234354';
        $empresa4->propietario = 'Sandro Vargas Perez';
        $empresa4->email = 'sandro@gmail.com';
        $empresa4->save();

        $empresa5 = new Empresa();
        $empresa5->nombre = 'fidalga';
        $empresa5->direccion = 'calle rene moreno';
        $empresa5->telefono = '4523235';
        $empresa5->propietario = 'Sebastian Coelo Mejia';
        $empresa5->email = 'sebastian@gmail.com';
        $empresa5->save();

    }
}