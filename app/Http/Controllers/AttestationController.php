<?php

namespace App\Http\Controllers;

use App\Models\Attestation;
use App\Models\User;
use Illuminate\Http\Request;

class AttestationController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        return view('pages.attestations.create', compact('user'));
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
            'oldie' => 'required|string',
            'time_span' => 'required|string',
            'program' => 'required|string',
            'success_rate' => 'required',
            'training_goal' => 'required|min:5'
        ]);

        $attestation = new Attestation;

        $attestation->oldie = $request->oldie;
        $attestation->time_span = $request->time_span;
        $attestation->program = $request->program;
        $attestation->success_rate = $request->success_rate;
        $attestation->training_goal = $request->training_goal;
        $attestation->observations = $request->attestation;

        $user->attestation()->save($attestation);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attestation  $attestation
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Attestation $attestation)
    {
        return view('pages.attestations.show', compact('user', 'attestation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attestation  $attestation
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Attestation $attestation)
    {
        return view('pages.attestations.edit', compact('user', 'attestation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attestation  $attestation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Attestation $attestation)
    {
        $this->validate($request, [
            'oldie' => 'required|string',
            'time_span' => 'required|string',
            'program' => 'required|string',
            'success_rate' => 'required',
            'training_goal' => 'required|min:5'
        ]);

        $attestation->oldie = $request->oldie;
        $attestation->time_span = $request->time_span;
        $attestation->program = $request->program;
        $attestation->success_rate = $request->success_rate;
        $attestation->training_goal = $request->training_goal;
        $attestation->observations = $request->attestation;

        $user->attestation()->save($attestation);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attestation  $attestation
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Attestation $attestation)
    {
        $attestation->delete();
        return back();
    }
}
