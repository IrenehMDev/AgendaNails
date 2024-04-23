<?php

namespace App\Http\Controllers\AppointmentType;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAppointmentTypeRequest;
use App\Http\Requests\UpdateAppointmentTypeRequest;
use App\Models\AppointmentType;
use Illuminate\Http\Request;

class AppointmentTypesController extends Controller
{
    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AppointmentType::paginate(15);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentTypeRequest $request)
    {
        $appointmentType = AppointmentType::create($request->all());
        return response()->json($appointmentType);
    }

    /**
     * Display the specified resource.
     */
    public function show(AppointmentType $appointmentType)
    {
        return $appointmentType;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentTypeRequest $request, AppointmentType $appointmentType)
    {
        $appointmentType->name =  $request->name;
        $appointmentType->description =  $request->description;
        $appointmentType->save();

        return response()->json($appointmentType);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppointmentType $appointmentType)
    {
        $appointmentType->delete();
        return response()->json(null, 204);
    }
}
