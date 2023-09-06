<?php

namespace App\Http\Controllers;

use App\Models\Expertise;
use Illuminate\Http\Request;

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
            'name'      => ['required', 'max:100'],
            'fromMonth' => ['required', 'integer', 'between:1,12'],
            'fromYear'  => ['required', 'string'],
            'toMonth'   => ['required', 'integer', 'between:1,12'],
            'toYear'    => ['required', 'string'],

        ]);

        $expertise          = new Expertise();
        $expertise->name    = $request->name;
        $expertise->from    =  json_encode(['month' => $request->fromMonth, 'year' => $request->fromYear]);
        $expertise->to      =  json_encode(['month' => $request->toMonth, 'year' => $request->toYear]);
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
            'edit_name'      => ['required', 'max:100'],
            'edit_fromMonth' => ['required', 'integer', 'between:1,12'],
            'edit_fromYear'  => ['required', 'string'],
            'edit_toMonth'   => ['required', 'integer', 'between:1,12'],
            'edit_toYear'    => ['required', 'string'],

        ]);


        $expertise->name    = $request->edit_name;
        $expertise->from    =  json_encode(['month' => $request->edit_fromMonth, 'year' => $request->edit_fromYear]);
        $expertise->to      =  json_encode(['month' => $request->edit_toMonth, 'year' => $request->edit_toYear]);
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
