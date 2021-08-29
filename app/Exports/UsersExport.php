<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $users = User::select('id','name','email','designation','salary','mobile')->where('is_admin','=','0')->get();
        return $users;
    }
    public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
