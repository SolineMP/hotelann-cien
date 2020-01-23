@extends('layouts.template')
@section('content')

    <button><a href="{{route('createBook')}}">Réserver</a></button>
    
    @if(Auth::user()->role == 'customer')
    @else 
    <h2> Réservations actuelles </h2> 
    <table>
        <tr>
            <td>Prénom</td>
            <td>Nom</td>
            <td>Chambre</td>
            <td>Date de réservation</td>
            <td>Date d'enregistrement </td>
        </tr>
        @foreach ($books->sortBy('reservation') as $book)
        <tr>
                <td> {{ $book->user->firstName }} </td>
                <td> {{ $book->user->lastName }} </td>
                <td> {{ $book->room->name }} </td>
                <td> {{ date('d-m-Y', strtotime($book->reservation)) }}</td>
                <td> {{ date('d-m-Y', strtotime($book->registration)) }} </td>
        </tr>
        @endforeach
    </table>
    @endif

@endsection 