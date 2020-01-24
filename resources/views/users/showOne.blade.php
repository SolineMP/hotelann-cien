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
            @if($user->role == 'manager') 
                <th> Salaire </th> 
            @elseif($user->role == 'employee')
                <th> Salaire </th> 
            @elseif($user->role == 'owner')    
                <th> Salaire </th> 
            @elseif($user->role == 'customer')

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
            @if($user->role == 'manager') 
                <td> {{ $user->salary}} </td>
            @elseif($user->role == 'employee') 
                <td> {{ $user->salary}} </td>
            @elseif($user->role == 'owner')
                <td> {{ $user->salary}} </td>
            @elseif($user->role == 'customer')

            @endif
    </tbody>
<table>    
@endsection
