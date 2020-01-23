<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hôtel de l'exilé</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">  
    
</head>
<body>
    <header> 

<!-- Right Side Of Navbar -->
<ul class="contact">
    <!-- Authentication Links -->
    @guest
        <li class="contact" id="menu"> <a href="{{ route('home') }}">Accueil</a></li>
        <li class="contact">
            <a class="contact" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li> <a href="{{ route('register')}}">S'enregistrer</a></li>
    @endguest 
    @auth
        @if(Auth::user()->role == 'customer')
            <li class="contact" id="menu"> <a href="{{ route('home') }}">Accueil</a></li>
            <li class="contact" id="menu"> <a href="{{ route('showOne', Auth::user()->id )}}"> Profil </a></li>
            <li class="contact" id="menu"> <a href="{{ route('rooms') }}"> Liste des chambres</a></li>
            <li class="contact" id="menu"> <a href="{{ route('books') }}"> Réserver </a></li>
        @else 
            <li class="contact" id="menu"> <a href="{{ route('home') }}">Accueil</a></li>
            <li class="contact" id="menu"> <a href="{{ route('showOne', Auth::user()->id )}}"> {{Auth::user()->email}} </a></li>
            <li class="contact" id="menu"> <a href="{{ route('users') }}"> Liste d'utilisateurs</a></li>
            <li class="contact" id="menu"> <a href="{{ route('rooms') }}"> Liste des chambres</a></li>
            <li class="contact" id="menu"> <a href="{{ route('books') }}"> Liste des réservations</a></li> 
        @endif
                              
            <div class="contact" aria-labelledby="navbarDropdown">
                <a class="contact" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endauth    
</ul>
    </header>

    <main> 
        @yield('content')
    </main>

    <footer>
        <p id="copyright" class="container"> Soline © qui tente des trucs </p>
    </footer>
    <script src="{{ asset('/js/script.js') }}"></script>
    
</body>
</html>