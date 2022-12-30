<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\State\UpdateStateRequest;
use App\Models\Country;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\State;
use Illuminate\Http\Request;
use App\Http\Requests\State\StoreStateRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Exception;




class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $states = State::all();
        return view('layouts.state.index')->with('states', $states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): view
    {
        $countries = Country::all();
        return view('layouts.state.add')->with('countries', $countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStateRequest $request
     * @return RedirectResponse
     */
    public function store(StoreStateRequest $request):RedirectResponse
    {
        try {
            $state = state::create($request->validated());
            if ($state) {
                return redirect()->route('admin.state.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $st) {
            return back()->withError($st->getMessage());
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     *  @param  State  $State
     * @return View
     */
    public function edit(State $state): View
    {
        $countries = Country::all();
        return view('layouts.State.edit')->with(['state'=>$state, 'countries'=>$countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateStateRequest  $request
     * @param  State  $State
     * @return RedirectResponse
     */
    public function update(UpdateStateRequest $request, State $state): RedirectResponse
    {
        try {
           $state =$state->update($request->validated());
            if ($state) {
                return redirect()->route('admin.state.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $st) {
            return back()->withError($st->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  State  $state
     * @return RedirectResponse
     */
    public function destroy(State $state): RedirectResponse
    {
        try {
            $state->delete();
            return redirect()->route('admin.state.index');

        } catch (Exception $st) {
            return back()->withError($st->getMessage());

        }
    }
}
