<?php

namespace App\Http\Controllers;

use App\Models\Medical;
use App\Models\User;
use Illuminate\Http\Request;

class MedicalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create(User $user)
    {
        return view('pages.medicals.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
        $this->validate($request, [
            'weight' => 'required',
            'height' => 'required',
            'emergency_name' => 'required',
            'mobile' => 'required',
            'health_conditions' => 'min:3'
        ]);

        $medical = new Medical;
        $medical->weight = $request->weight;
        $medical->height = $request->height;
        $medical->emergency_name = $request->emergency_name;
        $medical->mobile = $request->mobile;
        $medical->health_conditions = $request->health_conditions;

        $user->medical()->save($medical);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medical  $medical
     * @return \Illuminate\Http\Response
     */
    public function show(Medical $medical)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medical  $medical
     * @return \Illuminate\Http\Response
     */
    public function edit(Medical $medical)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medical  $medical
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medical $medical)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medical  $medical
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medical $medical)
    {
        //
    }
}
