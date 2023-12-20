<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'name' => 'required',
            'email' => 'required|unique:people,email',
            
            'cell' => 'required'
        ]);

        $people = People::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'cell' => $request['cell'],
            
        ]);

        //envio de email
        $details = [
            'message'=> "El usuario " . $request['name'] . " se ha registrado",
            'name' => $request['name'],
            'email' => $request['email'],
            'cell' => $request['cell'],
            ];
            Mail::to('oviedocode@gmail.com')->send(new SendPost($details));


        return response()->json([
            'message' => 'Se agregó correctamente a la Persona',
            'data' => $people
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        //
    }
}
