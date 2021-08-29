<?php

namespace App\Http\Controllers;

use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\UsersExport;

class UserExportController extends Controller
{
    public function usersData()
    {
        
        return Excel::download(new UsersExport, 'users.xlsx');
    }   
}
