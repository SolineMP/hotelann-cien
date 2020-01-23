@extends('layouts.template')

@section('content')

<table>
    <thead>
        <tr> 
            <th> Prénom </th>
            <th> Nom </th>
            <th> Numéro de téléphone </th>
            <th> Email </th>
            <th> Adresse et Ville </th>
            <th> Code postal </th> 
            @if($user->role = 'manager' && $user->role = 'employee' && $user->role = 'owner' )
                <th> Salaire </th> 
            @endif 

        </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $user->firstName }} </td>
            <td> {{ $user->lastName }} </td>
            <td> {{ $user->phone }} </td>
            <td> {{ $user->email}} </td>
            <td> {{ $user->adress}} </td>
            <td> {{ $user->zipCode }} </td>
            @if($user->role = 'manager' && $user->role = 'employee' && $user->role = 'owner')
                <td> {{ $user->salary}} </td>
            @else
            @endif
    </tbody>
<table>    
@endsection
