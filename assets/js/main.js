// -------- RÉCUPÉRER LES VALEURS D'INPUT TEXTE ------------------//

const logUser = function(){ // on prépare une fonction log en amont
    var fname = document.getElementById('fname').value;//On récupère la valeur de chaque élèment en ciblant son Id
    var lname = document.getElementById('lname').value;

    //alert("Bonjour monsieur " + fname + " " + lname);
    console.log("Hello monsieur " + fname + " " + lname);
    //Affichage en alert et console
}

document.addEventListener("DOMContentLoaded", function(event){
    console.log('loaded')// On charge le DOM

    var button = document.getElementById('submit');
    /* On cible l' Id du bouton en mettant en place une fonction à appeler 
    chaque fois que l'évènement est remis à la cible.*/

    button.addEventListener('click' , function(){ // Appelle de la fonction logUser uniquement au déclenchement de l'évènement
        logUser() 
    });     
    
});

/*
<section class="flex-row form">
    <div class="container">
        <form action="" method="get" class="form-example">
            <div class="form-example">
              <label for="name"> Votre Nom: </label>
              <input type="text"  id="fname">
            </div>
            <div class="form-example">
              <label for="fname">Votre Prénom: </label>
              <input type="text" id="lname">
            </div>
            <div class="form-example">
              <input type="submit" id="submit" value="Validez">
            </div>
        </form> 
    </div>
</section>
*/
 

/* document.addEventListener (DOM)chargé
var = button
button addEventListener(click)
var input value
console.log( 'Hello + input value )*/

/*--------------CHECK MY WORK Portfolio-------------*/

/*const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click' , () => {
  navbarLinks.classList.toggle('active')
})*/







    









