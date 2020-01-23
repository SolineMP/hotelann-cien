@extends('layouts.template')
@section('content')

<form action="/storeRoom" method="POST">
    @csrf 
    <div>
        <label for="number">Numéro: </label>
        <input type="number" name="number">
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="type">Standing :</label>
        <select name="type">
            <option value="standard">Standard</option>
            <option value="juniorStandard">Junior Standard</option>
            <option value="juniorSuperior">Junior Supérieur</option>
            <option value="suite">Suite</option>
        </select>
    </div>
    <div>
        <label for="price">Prix :</label>
        <input type="number" name="price">
    </div>
    <div>
        <input type="submit" value="Ajouter">
    </div>
</form>
@endsection 