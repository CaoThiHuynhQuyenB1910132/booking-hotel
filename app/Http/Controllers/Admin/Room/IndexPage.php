<?php

namespace App\Http\Controllers\Admin\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexPage extends Controller
{
    public function index()
    {
        return view('admin.room.index');
    }
}
