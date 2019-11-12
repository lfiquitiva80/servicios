<?php

namespace App\Exports;

use App\escolta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EscoltaExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Escolta.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return escolta::all('nombre','cc','telefono','cargo','ciudad','bilingue','escolta_externo','activo');
    }
    
    public function headings(): array
    {
        return [
            'Nombre',
            'CC',
            'Telefono',
            'Cargo',
            'Cuidad',
            'Bilingue',
            'Escolta externo',
            'Activo'
        ];
    }
}
