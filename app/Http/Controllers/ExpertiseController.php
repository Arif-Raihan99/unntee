<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ExpertiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.expertise.manage', [
            'expertises' => Expertise::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'       => ['required', 'min:4'],
            'from_month' => ['required_without:from_year', 'nullable', 'integer', 'between:1,11'],
            'from_year'  => ['required_without:from_month', 'nullable', 'string'],
            'to_month'   => ['required_without:to_year', 'nullable', 'integer', 'between:1,11'],
            'to_year'    => ['required_without:to_month', 'nullable', 'string'],
        ]);

        $expertise = new Expertise();
        $expertise->name = $request->name;
        $expertise->from =  json_encode(['month' => $request->from_month ?? 0, 'year' => $request->from_year ?? 0]);
        $expertise->to   =  json_encode(['month' => $request->to_month ?? 0, 'year' => $request->to_year ?? 0]);
        $expertise->save();

        return redirect()->back()->with('success', 'Expertise added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $expertise = Expertise::find($id);
       $expertise->status = $expertise->status == 1 ? 0 : 1 ;
       $expertise->save();
        return redirect()->back()->with('success', 'Status changed successfully.');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expertise $expertise)
    {
        $request->validate([
            'edit_name'       => ['required', 'min:4'],
            'edit_from_month' => ['required_without:from_year', 'nullable', 'integer', 'between:1,11'],
            'edit_from_year'  => ['required_without:from_month', 'nullable', 'string'],
            'edit_to_month'   => ['required_without:to_year', 'nullable', 'integer', 'between:1,11'],
            'edit_to_year'    => ['required_without:to_month', 'nullable', 'string'],
        ]);

        $expertise->name = $request->edit_name;
        $expertise->from =  json_encode(['month' => $request->edit_from_month ?? 0, 'year' => $request->edit_from_year ?? 0 ]);
        $expertise->to   =  json_encode(['month' => $request->edit_to_month ?? 0, 'year' => $request->edit_to_year ?? 0]);
        $expertise->save();

        return redirect()->back()->with('success', 'Expertise update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expertise $expertise)
    {
        $expertise->delete();
        return redirect()->back()->with('success', 'Service delete successfully.');
    }




}
