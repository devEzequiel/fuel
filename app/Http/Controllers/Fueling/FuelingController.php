<?php

namespace App\Http\Controllers\Fueling;

use App\Exceptions\FuelQuantityException;
use App\Exceptions\FuelTypeException;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFuelingRequest;
use App\Repositories\Contracts\DriverRepositoryInterface;
use App\Repositories\Contracts\FuelingRepositoryInterface;
use App\Repositories\Contracts\VehicleRepositoryInterface;
use Illuminate\Http\Request;

class FuelingController extends Controller
{
    private $fueling;

    private $driver;

    private $vehicle;

    public function __construct(FuelingRepositoryInterface $fueling, DriverRepositoryInterface $driver, VehicleRepositoryInterface $vehicle)
    {
        $this->fueling = $fueling;
        $this->driver = $driver;
        $this->vehicle = $vehicle;
    }

    public function index()
    {
        $fuelings = $this->fueling->all();

        return view('fuelings.index')->with('fuelings', $fuelings);
    }

    public function create()
    {
        $drivers = $this->driver->all();
        $vehicles = $this->vehicle->all();

        $data = [
            'vehicles' => $vehicles,
            'drivers' => $drivers
        ];

        return view("fuelings.create")->with('data', $data);
    }

    public function store(StoreFuelingRequest $request)
    {
        $data = $request->all();

        $vehicle = $this->vehicle->find($data['vehicle_id']);

        $data['tank_capacity'] = $vehicle->tank_capacity;
        $data['vehicle_fuel_type'] = $vehicle->fuel_type;

        try {
            $this->fueling->createFueling($data);

            return redirect()->action('App\Http\Controllers\Fueling\FuelingController@index');

        } catch (FuelTypeException $e) {
            return view('fuelings.typeError');
        } catch (FuelQuantityException $e) {
            return view('fuelings.quantityError');
        }
    }
}
