<?php

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\View\View;

class IndexPage extends Controller
{
    public function index(): View
    {
        return view('admin.booking.index');
    }


}
