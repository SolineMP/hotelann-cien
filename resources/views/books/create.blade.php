@extends('layouts.template')
@section('content')

<form action="/storeBook" method="POST">
    @csrf 
    <div>
        <label for="room_id">Chambre</label>
        <select name="room_id">
    @foreach ($rooms as $room)
            <option value="{{$room->id}}">{{$room->name}}</option>
    @endforeach
        </select>
    </div>
    <div>
        <label for="user_id">Client</label>
        <select name="user_id">
    @foreach ($users as $user)
        @if ($user->role == 'customer') 
            <option value="{{$user->id}}"> M. {{$user->firstName}} {{$user->lastName}} </option>      
        @endif
    @endforeach
        </select>
    </div>
    <div>
        <label for="reservation"> Date :</label>
        <input type="date" name="reservation">
    </div>
    <div>
        <label for="registration">Enregistré le :</label>
        <input type="date" name="registration" value="{{ date('Y-m-d') }}" readonly>
    </div>
    <div>
        <input type="submit" value="Ajouter">
    </div>
</form>

@endsection 
