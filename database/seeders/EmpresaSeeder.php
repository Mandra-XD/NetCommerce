<?php

namespace Database\Seeders;

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
        Empresa::create([
            'empresa' => 'Empresa ABC',
            'email' => 'info@empresaabc.com',
            'direccion' => '123 Calle Principal, Ciudad ABC'
        ]);
        Empresa::create([
            'empresa' => 'Compañía XYZ',
            'email' => 'contacto@companiaxyz.com',
            'direccion' => '456 Avenida Central, Ciudad XYZ'
        ]);
        Empresa::create([
            'empresa' => 'MegaTech Solutions',
            'email' => 'ventas@megatechsolutions.com',
            'direccion' => '789 Calle Tecnológica, Ciudad Tecno'
        ]);
        Empresa::create([
            'empresa' => 'Global Trading Co.',
            'email' => 'contact@globaltradingco.com',
            'direccion' => '321 Market Street, Global City'
        ]);
        Empresa::create([
            'empresa' => 'EcoFriendly Innovations',
            'email' => 'info@ecofriendlyinnovations.com',
            'direccion' => '567 Green Avenue, EcoTown'
        ]);
        Empresa::create([
            'empresa' => 'InnovaSoft Inc.',
            'email' => 'contactus@innovasoftinc.com',
            'direccion' => '101 Innovation Drive, Techville'
        ]);
        Empresa::create([
            'empresa' => 'Foodie Ventures',
            'email' => 'support@foodieventures.com',
            'direccion' => '246 Gourmet Lane, Foodville'
        ]);
        Empresa::create([
            'empresa' => 'AutoMasters Ltd.',
            'email' => 'sales@automastersltd.com',
            'direccion' => '654 Auto Avenue, Car City'
        ]);
        Empresa::create([
            'empresa' => 'HealthTech Solutions',
            'email' => 'info@healthtechsolutions.com',
            'direccion' => '987 Wellness Street, Healthville'
        ]);

    }
}
