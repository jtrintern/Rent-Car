<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'carName' => 'required|max:30',
            'carImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'carBrand' => 'required|max:30',
            'categoryId' => 'required',
            'totalSit' => 'required|max:1',
            'totalLuggage' => 'required|max:1',
            'noPol' => ['required', 'string', 'max:15', Rule::unique('cars')->ignore($this->car)],
            'costPerDay' => 'required|max:6',
        ];
    }

    public function messages()
    {
        return [
            "carName.required" => "Model field is required." ,
            "carBrand.required" => "Brand field is required." ,
            "categoryId.required" => "Category field is required." ,
            "totalSit.required" => "Total sit field is required." ,
            "totalLuggage.required" => "Total Luggagefield is required." ,
            "noPol.required" => "License Plate Number field is required." ,
            "noPol.unique" => "License Plate Number has already been taken." ,
            "costPerDay.required" => "Cost/Day field is required." ,
        ];
    }
}
