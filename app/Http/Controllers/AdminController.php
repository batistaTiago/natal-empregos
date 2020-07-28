<?php

namespace App\Http\Controllers;

use App\Models\VagaEmprego;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(Request $request)
    {
        $allVagas  = VagaEmprego::all();
        dd($allVagas);
    }
}
