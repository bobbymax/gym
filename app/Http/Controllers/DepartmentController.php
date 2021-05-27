<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $departments = Department::all();
        return view('pages.departments.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request->all(), [
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255|unique:departments',
            'code' => 'required|string|max:7|unique:departments',
            'type' => 'required|string|in:directorate,division,department,unit',
            'parentId' => 'required'
        ]);

        $department = Department::create([
            'name' => $request->name,
            'label' => $request->label,
            'code' => $request->code,
            'type' => $request->type,
            'parentId' => $request->parentId
        ]);

        return redirect()->route('departments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Department $department)
    {
        return view('pages.departments.show', compact('department'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit(Department $department)
    {
        return view('pages.departments.show', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Department $department)
    {
        $this->validate($request->all(), [
            'name' => 'required|string|max:255',
            'label' => 'required|string|max:255|unique:departments',
            'code' => 'required|string|max:7|unique:departments',
            'type' => 'required|string|in:directorate,division,department,unit',
            'parentId' => 'required'
        ]);

        $department->update([
            'name' => $request->name,
            'label' => $request->label,
            'code' => $request->code,
            'type' => $request->type,
            'parentId' => $request->parentId
        ]);

        return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Department $department)
    {
        $department->delete();
        return back();
    }
}
