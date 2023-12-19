<?php

namespace App\Http\Controllers;

use App\Mail\SendPost;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
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
            'first_name' => 'required',
            'email' => 'required|unique:persons,email',
            'cell_phone_number' => 'required'
        ]);

        $person = Person::create([
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'cell_phone_number' => $request['cell_phone_number'],
            
        ]);

        //envio de mail
        $details = [
            'message' => "El usuario ". $request['first_name'] . "se ha regristrado",
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'cell_phone_number' => $request['cell_phone_number'],
        ];

        Mail::to('jeremiasoviedo01@gmail.com')->send(new SendPost($details));

        return response()->json([
            'message' => 'Se agregó correctamente a la Persona',
            'data' => $person
        ]);
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
        //
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
