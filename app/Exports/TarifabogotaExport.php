<?php

namespace App\Exports;

use App\bogota;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarifabogotaExport implements FromCollection,Responsable,ShouldQueue,WithHeadings
{
    use Exportable;
    private $fileName = 'Tarifabogota.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return bogota::all('id','item','descripcion','periodo','unidad','valor_con_aui','created_at','updated_at');
    }
    public function headings(): array
    {
        return [
            'ID',
            'Item',
            'Descripcion',
            'Periodo',
            'Unidad',
            'Valor mes con aiu',
            'Fecha created',
            'Fecha updated'
            
        ];
    }
}
