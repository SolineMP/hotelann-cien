<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hôtel de l'exilé</title>
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet"> 
    <link href="{{ asset('/css/css/font-awesome.min.css') }}" rel="stylesheet">  
</head>
<body>
    <header id="header"> 
<!-- Left Side Of Navbar -->
<div class="inner">
    <nav id="nav">
       
    <!-- Authentication Links -->
        @guest
             <a href="{{ route('home') }}">Accueil</a>
            
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
            
             <a href="{{ route('register')}}">S'enregistrer</a>
        @endguest 
        @auth
            @if(Auth::user()->role == 'customer')
                 <a href="{{ route('home') }}">Accueil</a>
                 <a href="{{ route('showOne', Auth::user()->id )}}"> Profil </a>
                 <a href="{{ route('rooms') }}"> Liste des chambres</a>
                 <a href="{{route('createBook')}}"> Réserver </a>
            @else 
                 <a href="{{ route('home') }}">Accueil</a>
                 <a href="{{ route('showOne', Auth::user()->id )}}"> {{Auth::user()->email}} </a>
                 <a href="{{ route('users') }}"> Liste d'utilisateurs</a>
                 <a href="{{ route('rooms') }}"> Liste des chambres</a>
                 <a href="{{ route('books') }}"> Liste des réservations</a> 
            @endif
            <button class="inner">
                <a  href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" >
                    {{ __('Logout') }}
                </a>
    ​
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </button>
                
    @endauth    
    
    </nav>
</div>
</header>
<section id="banner">
    <div id="inner">
        <h1>Bienvenue aux exilés</h1>
    </div>
</section>

    <main> 
        @yield('content')
    </main>

    <footer id="footer">
        <div class="copyright">
            <p> Soline © qui tente des trucs </p>
        </div>
    </footer>
    <script src="{{ asset('/js/script.js') }}"></script>
    <script src="{{ asset('/js/jquery.min.js')}}"></script>
    <script src="{{ asset('/js/main.js')}}"></script>
    <script src="{{ asset('/js/skel.min.js')}}"></script>
    <script src="{{ asset('/js/util.js')}}"></script>
</body>
</html>