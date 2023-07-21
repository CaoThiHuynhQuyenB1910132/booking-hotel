<?php

namespace App\Http\Controllers\Admin\Hotel;

use App\Http\Controllers\Controller;
use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class IndexPage extends Controller
{
    public function index(): View
    {
        $hotel = Hotel::all();
        return view('admin.hotel.index',compact('hotel'));
    }

    public function store(HotelRequest $request): RedirectResponse
    {
        $hotel = $request -> validated();

        Hotel::query()->create([
           'name' => $hotel['name'],
            'address' => $hotel['address'],
            'phone' => $hotel['phone'],
        ]);
        return redirect('hotel')->with('status', 'Add Hotel Successfully!');
    }

    public function edit(string $id): View
    {
        $hotels = Hotel::getHotelById($id);
        return view('admin.hotel.edit',compact('hotels'));

    }

    public function update()
    {

    }

    public function create()
    {
        return view('admin.hotel.create');
    }

    public function delete()
    {

    }
}
