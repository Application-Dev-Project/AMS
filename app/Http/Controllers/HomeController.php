<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use PDF;
use App\Models\User;




class HomeController extends Controller
{
     @return void

    public function __construct()
    {
        $this->middleware('auth');
    }


     * @return \Illuminate\Contracts\Support\Renderable


 

    public function index()
    {
        return view('dashboard.dashboard');
    }
    // employee dashboard
    public function emDashboard()
    {
        $dt        = Carbon::now();
        $todayDate = $dt->toDayDateTimeString();
        return view('dashboard.emdashboard',compact('todayDate'));
    }

    public function generatePDF(Request $request)
    {
       
        $pdf = PDF::loadView('payroll.salaryview');
    
        return $pdf->download('pdfview.pdf');
    }
}
