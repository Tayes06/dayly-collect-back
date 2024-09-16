<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $validatedData = Validator::make($request->all(), [

            'nom' => 'required|string|max:255',
            'sexe' => 'required|string|max:1',
            'age' => 'required|integer|max:100',
            'telephone' => 'required|string||max:15|unique:users',
            'username' => 'required|string||max:15|unique:users',
            'password' => 'required|string||min:8',
        ]);
        if($validatedData->fails()){
            return response()->json($validatedData->errors()->all(), 400);
        }
        try {
            $new_client = Client :: findOrFail($client->id_client);
            $new_client->update($request->all());
            return response()->json(['message' => 'User updated successfully'],200);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'Error while updating user'],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
