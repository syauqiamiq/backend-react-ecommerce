<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function GetAllSiteInfo()
    {
        $result = SiteInfo::get();
        return $result;
    }
}
