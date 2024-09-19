<?php 

namespace  App\Http\Controllers\Ressources;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as Validator;
use Termwind\Components\Dd;

class UserController extends Controller {

    public function index()
    {
        $users = User::all();
        return view('users', compact('users'));
    }


    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [

            'nom' => 'required|string|max:255',
            'sexe' => 'required|string|max:1',
            'age' => 'required|integer|max:100',
            'telephone' => 'required|string||max:15|unique:users',
            'username' => 'required|string||max:15|unique:users',
            'password' => 'required|string||min:8',
        ]);
        $users = User::all();
        if($validatedData->fails()){
            return view('users', compact('users'))->with("error","Le formulaire est mal rempli");
        }
        try {
            $user = User::create(array_merge($request->all(), ["id_user" => $this ->generateID()]));
            $message = 'Utilisateur enregistré avec succès';
            $users = User::all();
            return view('users', compact('users'))->with("message", $message);
        } catch (\Throwable $th) {
            return view('users', compact('users'))->with("error" , "Erreur d'enregistrement");        }

    }


    function generateID()
{
        $id = 'U'.rand(100,999).'R';
        $user= User::where('id_user', $id)->first();
        if($user){
            return $this->generateID();
        }
        return $id;
    }

}