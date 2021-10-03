<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\DriverRepositoryInterface as DriverInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DriverController extends Controller
{

    private $driver;

    public function __construct(DriverInterface $driver)
    {
        $this->driver = $driver;
    }

    public function index()
    {
        //
    }

    public function create()
    {
        return view("drivers.create");
    }

    public function store(Request $request)
    {
        $data = $request->all();

//        $data['user_id'] = Auth::user()->id;

        try {
            $this->driver->create($data);
        } catch (\Exception $e) {

        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
