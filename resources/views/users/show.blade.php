@extends('layouts.template')

@section('content')


@if(Auth::user()->role == 'employee')
<h2>Clients</h2>
@else
<button><a href="{{route('createUser')}}"><h3> Créer un nouvel utilisateur : </h3> </a></button>
<h2> Utilisateurs enregistrés : </h2> 
@endif


<table>
    <thead>
        <tr> 
            <th> Prénom </th>
            <th> Nom </th>
            <th> Numéro de téléphone </th>
            <th> Email </th>
            <th> Adresse et Ville </th>
            <th> Code postal </th>
            @if(Auth::user()->role == 'manager' && Auth::user()->role == 'owner') 
                <th> Rôle </th>
                <th> Salaire </th>   
                <th> Editer </th>
            @endif
        </tr>
    </thead>
    <tbody>
@foreach ($users as $user)
        <tr>
    @if(Auth::user()->role == 'employee')
        @if ( $user->role == 'customer' )
                <td> {{ $user->firstName }} </td>
                <td> {{ $user->lastName }} </td>
                <td> {{ $user->phone }} </td>
                <td> {{ $user->email}} </td>
                <td> {{ $user->adress}} </td>
                <td> {{ $user->zipCode }} </td>
        @endif
    @else        
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
    @endif             
        </tr>
        @endforeach
    </tbody>
</table>

@endsection