@extends('layouts.app')

@include('partials.nametitle')

<div class="container text-center">

    <h2 class="h2 py-3 font-weight-bold text-left">Blog de l'écrivain Jean Forteroche :</h2>
    <h2 class="h2 py-3 font-weight-bold">Mon premier projet avec un back-end en PHP.</h2>

    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche0.jpg" alt="Jean Forteroche 1" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Page d'accueil du blog de Jean Forteroche</figcaption>
    </figure>
    
    <p class="lead py-3">Ce premier projet PHP fut assez révélateur pour moi. J'ai en effet fait connaissance de la programmation PHP et j'ai pris un immense plaisir à découvrir ce langage.<br/>L'objectif de ce projet était de permettre de fournir à un écrivain un blog "clé-en-main" où il pourait simplement administrer son blog et ses abonnés.</p>

    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche1.jpg" alt="Jean Forteroche 2" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Les billets de blog sont présentés sous forme de carte.</figcaption>
    </figure>

    <p class="lead py-3">Sur la page des billets de blog l'organisation visuelle est antéchronologique, le plus récent est en haut à gauche et ainsi de suite. Le billet de blog sont présentés avec le composant "card" de Bootstrap. Nous affichons les premiers caractères du billet dans le corps de cette carte.</p>


</div>