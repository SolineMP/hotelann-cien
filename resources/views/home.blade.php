@extends('layouts.template')

@section('content')

<section id="two">
    <div class="inner">
    <div class="article">
        <div class="box">
            <div class="image fit">
                <header>
                    <h3> Path of Exile </h3>
                </header>
                <img src="/img/Poe.png" alt="logo de path of exile">
            </div>
                    <p> Chasse aux chaos ! Cliquez dessus le plus de fois possible pour en garder un maximum <p>
            <div id="chaosResult">
                <img src="/img/chaos.png" alt="chaos" id="chaosCurrency" height="15%" width="15%" onclick=onclickk()>
            </div>
            <div id="result"></div>
        </article>
    </div>
    <div class="article">
        <div class="box">
            <div class="image fit">
                <img src="/img/saber.jpg" alt="sabre laser">
            </div>
            <h3>Coin Star Wars</h3>
            <p>Entrez un chiffre entre 1 et 61 pour découvrir la planète qui sera faite pour vous :</p>
            <div  id="search"> 
                <input type="text" id="searchPlanet">
                <button id="searchButton">Rechercher !</button>  </br>
            </div>
        </div>
    </div>
    <div class="article">
        <div class="box">
            <div class="image fit">
                <img src="/img/girls.jpg" alt="sorcière de path of exile" ">
            </div>
            <h3>Notre hôtel</h3>
            <p> Venez découvrir notre charmant personnel toujours prêt à vous aider pour vous installer correctement </p>
        </div>
    </div>
    </div>
</section>

@endsection
