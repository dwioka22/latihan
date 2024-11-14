<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = School::all();
        return view ('backoffice.pages.school.index',[
            'page_title' => 'School',
            'data' => $data

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $data = null;
        return view ('backoffice.pages.school.form',[
            'page_title' => 'tambah',
            'data' => $data

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $formdata = [
            'nama' => $request->name
        ]; 
        School::create($formdata);

        return redirect()->route ('admin.school.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $data = School::find($id);
        return view ('backoffice.pages.school.form',[
            'page_title' => 'edit',
            'data' => $data

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $formdata = [
            'nama' => $request->name
        ]; 
        School::whereId($id)->update($formdata);

        return redirect()->route ('admin.school.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
