@extends('layouts.template')

@section('content')



<button><a href="{{route('createUser')}}"><h3> Créer un nouvel utilisateur : </h3> </a></button>

<h2> Utilisateurs enregistrés : </h2> 

<table>
    <thead>
        <tr> 
            <th> Prénom </th>
            <th> Nom </th>
            <th> Numéro de téléphone </th>
            <th> Email </th>
            <th> Adresse et Ville </th>
            <th> Code postal </th> 
            <th> Rôle </th>
            <th> Salaire (NE PAS OUBLIER LE IF APRES) </th>   
            <th> Editer </th>
        </tr>
    </thead>
    <tbody>
@foreach ($users as $user)
        <tr>
                <td> {{ $user->firstName }} </td>
                <td> {{ $user->lastName }} </td>
                <td> {{ $user->phone }} </td>
                <td> {{ $user->email}} </td>
                <td> {{ $user->adress}} </td>
                <td> {{ $user->zipCode }} </td>
                <td> {{ $user->role }} </td>
                <td> {{ $user->salary}} </td>
                <td>
                    <form action="{{ route('editUser', $user->id) }}" method="POST">
                        @csrf                                
                        <button type="submit">Modifier</button>
                    </form>    
                </td>
                <td>
                    <form action="{{ route('deleteUser', $user->id) }}" method="POST">
                        @csrf 
                        <button type="submit">Supprimer</button>    
                    </form>    
                </td>         
        </tr>
        @endforeach
    </tbody>
</table>

@endsection