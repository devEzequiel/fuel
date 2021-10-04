<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'license_plate' => 'required|min:6|unique:vehicles',
            'name' => 'required',
            'fuel_type' => 'in:1,2,3',
            'manufacturer' => 'required',
            'manufacture_year' => 'required|digits:4',
            'tank_capacity' => 'required|numeric'
        ];
    }
}
