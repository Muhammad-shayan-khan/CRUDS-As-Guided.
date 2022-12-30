<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Country\UpdateCountryRequest;

use App\Models\Country;
use Illuminate\View\View;
use App\Http\Requests\Country\StoreCountryRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Exception;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::all();
        return view('layouts.country.index')->with('countries', $countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('layouts.country.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCountryRequest $request;
     * @return RedirectResponse
     */
    public function store(StoreCountryRequest $request): RedirectResponse
    {
        try {
            $country = Country::create($request->validated());
            if ($country) {
                return redirect()->route('admin.country.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Country  $country
     * @return View
     */
    public function edit(Country $country): View
    {
        return view('layouts.country.edit')->with('country', $country);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCountryRequest  $request
     * @param  Country  $country
     * @return RedirectResponse
     */
    public function update(UpdateCountryRequest $request, Country $country): RedirectResponse
    {
        try {
            $country = $country->update($request->validated());
            if ($country) {
                return redirect()->route('admin.country.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Country  $country
     * @return RedirectResponse
     */
    public function destroy(Country $country): RedirectResponse
    {
        try {
            $country->delete();
            return redirect()->route('admin.country.index');

        } catch (Exception $ex) {
            return back()->withError($ex->getMessage());

        }
    }
}
