@extends("template")
@section("content")
@include("addUser")
<div class="card" style="inline-size: 90%; clear:both">
    <div class="card-body">
        
        <div class="row">
            <h5 class="card-title col-10">Liste des utilisateurs</h5>
            <button class="btn btn-outline-primary col-2" data-bs-toggle="modal"
                data-bs-target="#createUserModal">Ajouter</button>

        </div>
        <table class="table table-bordered table-hover mt-4">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col">sexe</th>
                <th scope="col">Age</th>
                <th scope="col">Username</th>
                <th scope="col">Action</th>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id_user}} </td>
                        <td>{{$user->nom}} </td>
                        <td>{{$user->prenom}} </td>
                        <td>{{$user->telephone}} </td>
                        <td>{{$user->sexe}} </td>
                        <td>{{$user->age}} </td>
                        <td>{{$user->username}} </td>
                        <td class="text-center">
                            <a href="" class="btn btn-outline-secondary"><i class="bi bi-pencil"></i> </a>
                            <a href="" class="btn btn-outline-danger"><i class="bi bi-trash"></i> </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection