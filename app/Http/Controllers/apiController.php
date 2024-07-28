<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message'=>'je suis GET'

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $name= $request->name;
        $message= $request->message;
        return response()->json([
            'message'=>'operation reussie',
            'nom' => $name,
            'messagerier' =>$message,
            'status_code'=>'200'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'message'=>'je suis Show',
            'id'=>$id

        ]);
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
