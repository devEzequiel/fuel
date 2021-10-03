<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDriveRequest;
use App\Http\Requests\UpdateDriveRequest;
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
        $drivers = $this->driver->all();

        return view('drivers.index')->with('drivers', $drivers);
    }

    public function create()
    {
        return view("drivers.create");
    }

    public function store(StoreDriveRequest $request)
    {
        $data = $request->all();

        $data['status'] = 1;

        $this->driver->create($data);

        return redirect()->action('App\Http\Controllers\Driver\DriverController@index');
    }

    public function edit($id)
    {
        $driver = $this->driver->find($id);

        return view('drivers.edit')->with('driver', $driver);
    }

    public function update(UpdateDriveRequest $request, $id)
    {
        $data = $request->all();

        $this->driver->updateDriver($data, $id);

        return redirect()->action('App\Http\Controllers\Driver\DriverController@index');
    }

    public function destroy(int $id)
    {
        $this->driver->deleteDriver($id);

        return redirect()->action('App\Http\Controllers\Driver\DriverController@index');
    }
}
