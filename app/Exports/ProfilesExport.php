<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProfilesExport implements FromArray, WithHeadings, WithMapping
{
    protected $profiles;

    public function __construct(array $profiles)
    {
        $this->profiles = $profiles;
    }
    
    public function array(): array
    {
        return $this->profiles;
    }

    public function headings(): array
    {
        return [
            'url',
            'date'
        ];
    }

    public function map($profiles): array
    {
        return [
            $profiles['url'],
            $profiles['date']
        ];
    }
}