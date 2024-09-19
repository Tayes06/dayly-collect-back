@extends("template")
@section("content")
@include("addClient")
<div class="card" style="inline-size: 90%; clear:both">
    <div class="card-body">
        
        <div class="row">
            <h5 class="card-title col-10">Liste des clients</h5>
            <button class="btn btn-outline-primary col-2" data-bs-toggle="modal"
                data-bs-target="#createClientModal">Ajouter</button>

        </div>
        <table class="table table-bordered table-hover mt-4">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Nom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Telephone</th>
                <th scope="col">Sexe</th>
                <th scope="col">Age</th>
                <th scope="col">CNI</th>
                <th scope="col">Action</th>
            </thead>

            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{$client->id_client}} </td>
                        <td>{{$client->nom_client}} </td>
                        <td>{{$client->adresse_client}} </td>
                        <td>{{$client->telephone_client}} </td>
                        <td>{{$client->sexe_client}} </td>
                        <td>{{$client->age}} </td>
                        <td>{{$client->cni_client}} </td>
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