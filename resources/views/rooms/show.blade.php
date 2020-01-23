@extends('layouts.template')
@section('content')

<h1> Les différents types de chambre : </h1>

<button><a href="{{route('createRoom')}}">Ajouter une chambre </a></button>

@foreach ($rooms as $room)
        <ul>
                
                <li> 
                        {{ $room->number }} </br>
                        {{ $room->name }} </br>
                        {{ $room->price }} </br>
                        {{ $room->type}} </br>
                         <form action="{{ route('editRoom', $room->id) }}" method="POST">
                                @csrf                                
                                <button type="submit">Modifier</button>
                        </form> 
                        <form action="{{ route('deleteRoom', $room->id) }}" method="POST">
                                @csrf 
                                <button type="submit">Supprimer</button>    
                        </form>   
                </li>         
        </ul>
        @endforeach

@endsection 