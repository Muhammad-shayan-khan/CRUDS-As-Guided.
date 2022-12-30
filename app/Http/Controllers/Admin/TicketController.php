<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ticket\UpdateTicketRequest;
use App\Models\Ticket;
use Illuminate\View\View;
use App\Http\Requests\ticket\StoreTicketRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Exception;



class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('layouts.ticket.index')->with('tickets', $tickets);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('layouts.ticket.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     *@param StoreTicketRequest $request;
     * @return RedirectResponse
     */
    public function store(StoreTicketRequest $request): RedirectResponse
    {
        try {
            $ticket = Ticket::create($request->validated());
            if ($ticket) {
                return redirect()->route('admin.ticket.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $tk) {
            return back()->withError($tk->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Ticket  $ticket
     * @return View
     */
    public function edit(Ticket $ticket): View
    {
        return view('layouts.ticket.edit')->with('ticket', $ticket);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateTicketRequest  $request
     * @param  Ticket  $ticket
     * @return RedirectResponse
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket): RedirectResponse
    {
        try {
            $ticket = $ticket->update($request->validated());
            if ($ticket) {
                return redirect()->route('admin.ticket.index');
            } else {
                return back()->withErrors('error');
            }
        } catch (Exception $tk) {
            return back()->withError($tk->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Ticket  $ticket
     * @return RedirectResponse
     */
    public function destroy(Ticket $ticket): RedirectResponse
    {
        try {
            $ticket->delete();
            return redirect()->route('admin.ticket.index');

        } catch (Exception $tk) {
            return back()->withError($tk->getMessage());

        }
    }
}
