@extends('layouts.template')

@section('content')
<form action="/storeUser" method="post">
    @csrf 
    <div>
        <label for="role">Fiche</label>
        <select name="role">
            <option value="customer">Client</option>
        </select>
    </div>
    <div>
        <label for="firstName">Nom :</label>
        <input type="text" name="firstName">
    </div>
    <div>
        <label for="lastName">Prénom :</label>
        <input type="text" name="lastName">
    </div>
    <div>
        <label for="phone">Numéro de téléphone</label>
        <input type="number" name="phone">
    </div>
    <div>
        <label for="email">Email :</label>
        <input type="email" name="email">
    </div>
    <div>
        <label for="adress">Adresse :</label>
        <input type="text" name="adress">
    </div>
    <div>
        <label for="zipCode">Code postal :</label>
        <input type="number" name="zipCode">
    </div>
    <div>
        <label for="password">Mot de passe </label>
        <input type="password" name="password">
    </div>
    <div>
        <input type="submit" value="Ajouter">
    </div>
</form>
</div>
@endsection
