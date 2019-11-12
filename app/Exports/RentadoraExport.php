<?php

namespace App\Exports;

use App\rentadora;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RentadoraExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Rentadora.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return rentadora::all('nombre','contacto','telefono','telefono_2','telefono_3','email','email_2','email_3');
    }
    public function headings(): array
    {
        return [
            'Nombre',
            'Conctacto',
            'Telefono 1',
            'Telefono 2',
            'Telefono 3',
            'Email 1',
            'Email 2',
            'Email 3'
            
        ];
    }

}
