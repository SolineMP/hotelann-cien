@extends('layouts.template')
@section('content')

<h1> Les différents types de chambre : </h1>
@if(Auth::user()->role == 'customer' && Auth::user()->role == 'employee')
@else 
<button><a href="{{route('createRoom')}}">Ajouter une chambre </a></button>
@endif
@foreach ($rooms as $room)
        <ul>
                <li> 
                        {{ $room->number }} </br>
                        {{ $room->name }} </br>
                        {{ $room->price }} </br>
                        {{ $room->type}} </br>

                        @if(Auth::user()->role == 'customer' && Auth::user()->role == 'employee')

                        @else 
                                <form action="{{ route('editRoom', $room->id) }}" method="POST">
                                        @csrf                                
                                        <button type="submit">Modifier</button>
                                </form> 
                                <form action="{{ route('deleteRoom', $room->id) }}" method="POST">
                                        @csrf 
                                        <button type="submit">Supprimer</button>    
                                </form>   
                        @endif
                </li>         
        </ul>
        @endforeach

@endsection 