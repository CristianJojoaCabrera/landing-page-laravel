<?php


namespace App\Exports;


use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Fecha y Hora de creación',
            'Nombre',
            'Apellido',
            'Cédula',
            'Departamento',
            'Ciudad',
            'Celular',
            'Correo',

        ];
    }
    public function collection()
    {
        $users = DB::table('users')
            ->join('departments', 'users.department_id', '=', 'departments.id')
            ->join('cities', 'users.city_id', '=', 'cities.id')
            ->select(
                'users.created_at',
                        'users.name',
                        'users.last_name',
                        'users.identification',
                        'departments.name as department',
                        'cities.name as city',
                        'users.cellphone',
                        'users.email'
            )->get();
        return $users;

    }
}
