<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Result;

class PdfController extends Controller
{
    public function create()
    {
        $total = 0;
        $user_id = auth()->user()->id;
        $results = Result::leftJoin('subjects', 'results.sub_id', '=', 'subjects.id')
                        ->where('results.user_id', $user_id)->select('subjects.sub_name as name', 'results.marks as marks')->get();
        for ($i=0;$i<count($results);$i++){
            $total = $total + $results[$i]['marks'];
        }

        $average = round($total/count($results),2);
    	$data = ['title' => 'Laravel 7 Generate PDF From View Example Tutorial',
                 'average' => $average,
                 'total' => $total,
                 'results' => $results];
        $pdf = PDF::loadView('student_dashboard.result.report', $data);
  
        return $pdf->download('Report.pdf');
    }

    public function qrcreate()
    {
        $pdf = PDF::loadView('student_dashboard.QR.qrdownload');
  
        return $pdf->download('QR.pdf');
    }

    
}
