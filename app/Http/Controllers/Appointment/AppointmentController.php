<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\AppointmentType;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Get /appointments?page=1&limit=10
     * Te va a mostrar todos los datos de la tabla
     * Generalmente páginado
     */
    public function index(Request $request)
    {
        return AppointmentType::paginate(1);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     *  Get /appointments/1
     */
    public function show(Appointment $appointment)
    {
        return $appointment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
