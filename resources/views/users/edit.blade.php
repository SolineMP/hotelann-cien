@extends('layouts.template')

@section('content')


<form action="{{route('updateUser', $user->id)}}" method="POST">
    @csrf 
    <div>
        <label for="role">Rôle</label>
        <select name="role">
            {% if user->role  %}
            <option value="{{$user->role}}">{{$user->role}}</option>
            {% else %}
            <option value="owner">Propriétaire</option>
            <option value="manager">Directeur</option>
            <option value="employee">Employé</option>
            <option value="customer">Client</option>
            {% endif %}            
        </select>
    </div>
    <div>
        <label for="firstName">Nom :</label>
        <input type="text" name="firstName" value="{{ $user->firstName }}">
    </div>
    <div>
        <label for="lastName">Prénom :</label>
        <input type="text" name="lastName" value="{{ $user->lastName }}">
    </div>
    <div>
        <label for="phone">Numéro de téléphone</label>
        <input type="number" name="phone" value="{{ $user->phone }}">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email" value="{{ $user->email }}">
    </div>
    <div>
        <label for="adress">Adresse :</label>
        <input type="text" name="adress" value="{{ $user->adress }}">
    </div>
    <div>
        <label for="zipCode">Code postal :</label>
        <input type="number" name="zipCode" value="{{ $user->zipCode }}">
    </div>
    <div>
        <label for="salary">Salaire :</label>
        <input type="number" name="salary" value="{{ $user->salary }}">
    </div>
    <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password" value="{{ $user->password }}">
    </div>
    <div>
        <input type="submit" value="Modifier">
    </div>
</form>

@endsection