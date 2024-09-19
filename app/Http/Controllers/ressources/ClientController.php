<?php

namespace App\Http\Controllers\ressources;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Validator as Validator;

class ClientController extends Controller
{
    //
    public function index()
    {
        $clients = Client::all();
        return view('clients', compact('clients'));
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [

            'nom_client' => 'required|string|max:255',
            'prenom_client' => 'required|string|max:255',
            'telephone_client' => 'required|string||max:30|unique:clients',
            'sexe_client' => 'required|string|max:1',
            'age' => 'required|integer|max:100',
            'adresse_client' => 'required|string||max:30',
            'cni_client' => 'required|string||min:8|unique:clients',
            'id_user' => 'required|string|'
        ]);
        // dd($request);
        $clients = Client::all();
        if($validatedData->fails()){
            return view('clients', compact('clients'))->with("error","Le formulaire est mal rempli");
            

        }
        try {
            $client = Client::create(array_merge($request->all(), ["id_client" => $this ->generateID(), "id_user" => "U492R"]));
            $message = 'Client enregistré avec succès';
            var_dump($client);
            $clients = Client::all();
            return view('clients', compact('clients'))->with("message", $message);
        } catch (\Throwable $th) {
            return view('clients', compact('clients'))->with("error" , "Erreur d'enregistrement");        }

    }


    function generateID()
{
        $id = 'CLI'.rand(100,999).'R';
        $client= Client::where('id_client', $id)->first();
        if($client){
            return $this->generateID();
        }
        return $id;
    }
}
