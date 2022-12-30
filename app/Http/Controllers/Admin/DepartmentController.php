<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\department\UpdateDepartmentRequest;
use App\Models\Department;
use App\Models\Ticket;
use Illuminate\View\View;
use App\Http\Requests\department\StoreDepartmentRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Exception;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        return view('layouts.department.index')->with('departments', $departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $tickets = Ticket::all();
        return view('layouts.department.add')->with('tickets', $tickets);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDepartmentRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreDepartmentRequest $request): RedirectResponse
    {
        try {
            $department = Department::create($request->validated());
            if ($department) {
                return redirect()->route('admin.department.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $dep) {
            return back()->withError($dep->getMessage());
        }
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  Department $department
     * @return View
     */
    public function edit(Department $department): View
    {
        $tickets = Ticket::all();
        return view('layouts.department.edit')->with(['department'=>$department, 'tickets'=>$tickets]);
    }

    /**
     * Update the specified resource in storage.
     *
   * @param  UpdateDepartmentRequest $request
     * @param  Department  $department
     * @return RedirectResponse
     */
    public function update(UpdateDepartmentRequest $request, Department $department): RedirectResponse
    {
        try {
            $department = $department->update($request->validated());
            if ($department) {
                return redirect()->route('admin.department.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $dep) {
            return back()->withError($dep->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
  * @param  Department $department
     * @return RedirectResponse
     */
    public function destroy(Department $department): RedirectResponse
    {
        try {
            $department->delete();
            return redirect()->route('admin.department.index');

        } catch (Exception $dep) {
            return back()->withError($dep->getMessage());

        }
    }
}
