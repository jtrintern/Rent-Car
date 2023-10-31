<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cars = Car::all();
        return view('admin.car', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Category::all()->reverse();
        return view('admin.addcar', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        //
        $validated = $request->all();
        $fileName = time() . '.' . $request->carImage->extension();
        $validated['carImage'] = $fileName;
        $request->carImage->move(public_path('images'), $fileName);
        
        Car::create($validated);

        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
        $category = Category::all();
        return view('admin.editcar', compact('car','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        //
        $car->update($request->all());
        return redirect('admin/car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return redirect('admin/car');
    }
}
