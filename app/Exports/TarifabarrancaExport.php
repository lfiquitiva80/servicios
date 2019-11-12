<?php

namespace App\Exports;

use App\barranca;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;


class TarifabarrancaExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Tarifabarranca.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return barranca::all('id','item','descripcion','periodo','valor_con_aui','created_at','updated_at');
    }
    public function headings(): array
    {
        return [
            'ID',
            'Item',
            'Descripcion',
            'Periodo',
            'Valor mes con aiu',
            'Fecha created',
            'Fecha updated'
            
        ];
    }
}
