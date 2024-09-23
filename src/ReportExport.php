<?php

namespace Elcomware\ReportMaster;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ReportExport implements FromCollection, WithHeadings
{
    protected array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }


    public function collection(): \Illuminate\Support\Collection
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        if (count($this->data) > 0) {
            return array_keys($this->data[0]);
        }
        return [];
    }
}
