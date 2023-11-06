<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexList()
    {
        //
        $cars = Car::all();
        return view('admin.car', compact('cars'));
    }
    
    public function indexHomePage()
    {
        //
        $cars = Car::where('available', '0')->get();
        return view('rentcarr.index', compact('cars'));
    }
    
    public function indexListPage()
    {
        //
        $cars = Car::where('available', '0')->get();
        return view('rentcarr.page.listkendaraan', compact('cars'));
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
        $fileName = time() . '.' . $request->coverImage->extension();
        $validated['coverImage'] = $fileName;

        $request->coverImage->move(public_path('images/cover'), $fileName);

        foreach ($validated['galleryImage'] as $key => $value) {
            $imgname = time() . '_'.$key.'.' . $value->extension();

            $validated['galleryImage'][$key]= $imgname;
            
            $value->move(public_path('images/gallery'), $imgname);

        } 

        // dd($validated['galleryImage']);
        
        Car::create($validated);

        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
        return view('rentcarr.page.detailkendaraan', compact('car'));
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

    public function PagePesan(Car $car){
        return view('rentcarr.page.pesan', compact('car'));
    }
}
