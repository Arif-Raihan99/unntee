<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.service.manage', [
            'services' => Service::latest()->get()
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
            'name' => ['required', 'max:100']
        ]);
        Service::saveService($request);
        return redirect()->back()->with('success', 'Service added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        $service->status = $service->status == 1 ? 0 : 1;
        $service->save();
        return redirect()->back()->with('success', 'Status changed successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'edit_name' => ['required', 'max:100']
        ]);
        $service->name = $request->edit_name;
        $service->slug = Str::slug($request->edit_name);
        $service->save();
        return redirect()->back()->with('success', 'Service update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('success', 'Service delete successfully.');
    }
}
