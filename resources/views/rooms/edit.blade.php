@extends('layouts.template')
@section('content')


<form action="{{route('updateRoom', $room->id)}}" method="POST">
    @csrf
    <div>
        <label for="type">Standing :</label>
        <select name="type">
    {% if $room->type %}
            <option value="{{$room->type}}">{{$room->type}}</option>
    {% else %}
            <option value="standard">Standard</option>
            <option value="juniorStandard">Junior Standard</option>
            <option value="juniorSuperior">Junior Supérieur</option>
            <option value="suite">Suite</option>
    {% endif %}
        </select>
    </div>
    <div>
        <label for="number">Numéro: </label>
        <input type="number" name="number" value="{{ $room->number }}">
    </div>
    <div>
        <label for="name">Nom :</label>
        <input type="text" name="name" value="{{ $room->name }}">
    </div>
    <div>
        <label for="price">Prix :</label>
        <input type="number" name="price" value="{{ $room->price }}">
    </div>
    <div>
        <input type="submit" value="Modifier">
    </div>
</form>

@endsection 