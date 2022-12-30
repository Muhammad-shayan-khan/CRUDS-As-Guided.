<?php


namespace App\Http\Controllers\Admin;
use App\Http\Requests\city\UpdatecityRequest;
use App\Models\Country;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\State;
use App\Models\City;

use Illuminate\Http\Request;
use App\Http\Requests\city\StorecityRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Exception;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('layouts.city.index')->with('cities', $cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():view
    {
        $states = State::all();
        return view('layouts.city.add')->with('states', $states);
    }

    /**
     * Store a newly created resource in storage.
     *
     *  @param StoreCityRequest $request
     * @return RedirectResponse
     */
    public function store(StoreCityRequest $request):RedirectResponse
    {
        try {
            $city = City::create($request->validated());
            if ($city) {
                return redirect()->route('admin.city.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $ct) {
            return back()->withError($ct->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  City  $city
     * @return View
     */
    public function edit(City $city):view
    {
        $states = State::all();
        return view('layouts.city.edit')->with(['states'=>$states,'city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCityRequest  $request
     * @param  City  $city
     * @return RedirectResponse
     */
    public function update(UpdateCityRequest $request, City $city):RedirectResponse
    {
        try {
            $city =$city->update($request->validated());
             if ($city) {
                 return redirect()->route('admin.city.index');
             } else {
                 return back()->withErrors('error');
             }
         } catch (Exception $ct) {
             return back()->withError($ct->getMessage());
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param City  $city
     * @return RedirectResponse
     */
    public function destroy(City $city): RedirectResponse
    {
        try {
            $city->delete();
            return redirect()->route('admin.city.index');

        } catch (Exception $ct) {
            return back()->withError($ct->getMessage());

        }
    }
}
