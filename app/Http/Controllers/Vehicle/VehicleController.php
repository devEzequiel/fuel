<?php

namespace App\Http\Controllers\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehicleRequest;
use App\Http\Requests\UpdateVehicleRequest;
use App\Repositories\Contracts\VehicleRepositoryInterface as VehicleInterface;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    private $vehicles;

    public function __construct(VehicleInterface $vehicles)
    {
        $this->vehicles = $vehicles;
    }

    public function index()
    {
        $vehicles = $this->vehicles->all();

        return view('vehicles.index')->with('vehicles', $vehicles);
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(StoreVehicleRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $this->vehicles->create($data);

        return redirect()->action('App\Http\Controllers\Vehicle\VehicleController@index');
    }

    public function edit($id)
    {
        $vehicle = $this->vehicles->find($id);

        return view('drivers.edit')->with('vehicle', $vehicle);
    }

    public function update(UpdateVehicleRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        $data = $request->all();

        $this->vehicles->updateVehicle($data, $id);

        return redirect()->action('App\Http\Controllers\Vehicle\VehicleController@index');
    }

    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $this->vehicles->deleteVehicle($id);

        return redirect()->action('App\Http\Controllers\Vehicle\VehicleController@index');
    }
}
