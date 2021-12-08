<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function GetVisitorDetails(){
        date_default_timezone_set('Asia/Jakarta');
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $visit_time = date('h:i:sa');
        $visit_date = date('d-m-Y');
        $result = Visitor::create([
            'ip_address' => $ip_address,
            'visit_time' => $visit_time,
            'visit_date' => $visit_date
        ]);
        if ($result) {
            return "Get Visitor Detail Success";
        }else{
            return "Get Visitor Detail Failed";
        }
        
    }
}
