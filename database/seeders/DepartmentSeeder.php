<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $departments = [
            ['id'=>91,'name'=>'Amazonas'],
            ['id'=>5,'name'=>'Antioquia'],
            ['id'=>81,'name'=>'Arauca'],
            ['id'=>88,'name'=>'Archipiélago de San Andrés, Providencia y Santa Catalina'],
            ['id'=>8,'name'=>'Atlántico'],
            ['id'=>13,'name'=>'Bolívar'],
            ['id'=>15,'name'=>'Boyacá'],
            ['id'=>17,'name'=>'Caldas'],
            ['id'=>18,'name'=>'Caquetá'],
            ['id'=>85,'name'=>'Casanare'],
            ['id'=>19,'name'=>'Cauca'],
            ['id'=>20,'name'=>'Cesar'],
            ['id'=>27,'name'=>'Chocó'],
            ['id'=>23,'name'=>'Córdoba'],
            ['id'=>25,'name'=>'Cundinamarca'],
            ['id'=>11,'name'=>'Bogotá'],
            ['id'=>94,'name'=>'Guainía'],
            ['id'=>95,'name'=>'Guaviare'],
            ['id'=>41,'name'=>'Huila'],
            ['id'=>44,'name'=>'La Guajira'],
            ['id'=>47,'name'=>'Magdalena'],
            ['id'=>50,'name'=>'Meta'],
            ['id'=>52,'name'=>'Nariño'],
            ['id'=>54,'name'=>'Norte de Santander'],
            ['id'=>86,'name'=>'Putumayo'],
            ['id'=>63,'name'=>'Quindio'],
            ['id'=>66,'name'=>'Risaralda'],
            ['id'=>68,'name'=>'Santander'],
            ['id'=>70,'name'=>'Sucre'],
            ['id'=>73,'name'=>'Tolima'],
            ['id'=>76,'name'=>'Valle del Cauca'],
            ['id'=>97,'name'=>'Vaupés'],
            ['id'=>99,'name'=>'Vichada'],
        ];
        foreach ($departments as $department) {
            $aux = new \App\Models\Department();
            $aux->id= $department['id'];
            $aux->name = $department['name'];
            $aux->save();
        }
    }
}
