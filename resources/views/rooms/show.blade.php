@extends('layouts.template')
@section('content')

@if(Auth::user()->role == 'customer')
<h1> Les différents types de chambre : </h1>
@elseif(Auth::user()->role == 'owner') 
<h1> Liste des chambres: </h1>
<button><a href="{{route('createRoom')}}">Ajouter une chambre </a></button>
@elseif(Auth::user()->role = 'employee')
<h1> Chambres actuelles : </h1>
@elseif(Auth::user()->role == 'manager')
<h1> Liste des chambres: </h1>
<button><a href="{{route('createRoom')}}">Ajouter une chambre </a></button>
@endif

        <section id="2">
                <div class="inner">
                        @foreach ($rooms as $room)
                        <article class="article">
                                <div class="box">
                                        <header> Numéro {{ $room->number }} : {{ $room->name }}  </header>
                                        <div id="image fit">
                                                <img src="{{$room->picture}}" alt="Image de la planque">
                                        </div>
                                        <p>
                                        {{ $room->price }} chaos
                                        {{ $room->type}} 
                                        {{ $room->description}}
                                        </p>

                        @if(Auth::user()->role == 'customer')
                        
                        @elseif(Auth::user()->role == 'employee')

                        @elseif(Auth::user()->role == 'owner')
                                <form action="{{ route('editRoom', $room->id) }}" method="POST">
                                        @csrf                                
                                        <button type="submit">Modifier</button>
                                </form> 
                                <form action="{{ route('deleteRoom', $room->id) }}" method="POST">
                                        @csrf 
                                        <button type="submit">Supprimer</button>    
                                </form>
                        @elseif(Auth::user()->role == 'manager')
                                 <form action="{{ route('editRoom', $room->id) }}" method="POST">
                                        @csrf                                
                                        <button type="submit">Modifier</button>
                                </form> 
                                <form action="{{ route('deleteRoom', $room->id) }}" method="POST">
                                        @csrf 
                                        <button type="submit">Supprimer</button>    
                                </form>   
                        @endif
                                </div>
                        </article> </br>
                        @endforeach
                </div>
        </section>
@endsection 