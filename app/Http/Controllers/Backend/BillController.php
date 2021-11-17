<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        return view('back-end.manage.bill.index');
    }
}
