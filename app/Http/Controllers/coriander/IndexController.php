<?php

namespace App\Http\Controllers\coriander;

use App\Http\Controllers\Controller;
use App\Models\coriander\CorianderData;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        return CorianderData::where('user_id', $request->userId)->get();
    }

    public function store(Request $request) {

    }
}
