const searchSW = document.querySelector('#search'); 

if (searchSW) {
    document.querySelector("#searchButton").addEventListener("click", () => {
        let planet = document.querySelector("#searchPlanet").value
        fetch(`https://swapi.co/api/planets/${planet}/`)
        .then ((response) => {
            response.json()
            .then((data) => {
                let SWresponse = document.createElement("div")
                document.querySelector("#search").appendChild(SWresponse)

                let SWname = document.createElement("p")
                SWname.innerHTML = `Pour vous ${data.name} est le meilleur choix! Le climat est ${data.climate}. Avec une rotation orbitale de ${data.orbital_period} jours, ${data.name} est splendide! Attention, le terrain est plutôt ${data.terrain}.`
                SWresponse.appendChild(SWname)
            })
        
        })
    })
}; 

const chaosHunter = document.querySelector('#chaosCurrency')

function enlarge() {
    chaosHunter.addEventListener("click", () => {
	    chaosHunter.style.height = '18%';
        chaosHunter.style.width = '18%';
});
}

function decrease() {
    chaosHunter.addEventListener("click", () => {
	    chaosHunter.style.height = '15%';
        chaosHunter.style.width = '15%';
});
}

let clicks = 0

onclickk = function () {
    clicks += 1
    if (chaosHunter.style.width == "18%") {
        decrease();
    } else {
        enlarge();
    }
    document.querySelector('#result').innerHTML = '' ;
    let result = document.createElement("p");
    result.innerHTML = `Bravo ! Vous avez remporté ${clicks} chaos !`;
    document.querySelector('#result').appendChild(result);
}



    
    
    