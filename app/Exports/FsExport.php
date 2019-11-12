<?php

namespace App\Exports;

use App\fs;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FsExport implements FromCollection,ShouldQueue,WithHeadings,Responsable
{
    use Exportable;

    private $fileName = 'FS.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return fs::all('id','descripcion','created_at','updated_at');
    }

    public function headings(): array
    {
        return [
            'ID',
            'Descripcion',
            'Fecha created',
            'Fecha updated'
            
        ];
    }
}
