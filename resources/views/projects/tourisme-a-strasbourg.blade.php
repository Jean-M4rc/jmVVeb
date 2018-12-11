@extends('layouts.app')

@include('partials.nametitle')

<div class="container text-center">

    <h2 class="h2 py-3 font-weight-bold text-left">Tourisme à Strasbourg :</h2>
    <h2 class="h2 py-3 font-weight-bold">L'office de tourisme de Starsbourg</h2>

    <img class="shadow-lg rounded" src="/storage/projects/strasbourg0.jpg" alt="Strabourg" width="100%"/>

    <p class="lead py-3">Voici un site web WordPress pour l’office de tourisme de la ville de Strasbourg !<br/>Ceci est aussi mon premier site réalisé avec le CMS WordPress.</p>

    <p class="lead py-3">Ce site devait répondre à un cahier des charges précis. Avec une section "Actualités" permettant de compiler les articles des différentes animations et événements de la ville.</p>

    <img class="shadow-lg rounded" src="/storage/projects/strasbourg1.jpg" alt="Strabourg" width="100%"/>

    <p class="lead py-3">Il est possible pour toutes personnes inscrit sur le site de l'office de tourisme de Strasbourg de commenter chaque article. Ce site contient une présentation des principaux lieux touristiques de Strasbourg.</p>

    <img class="shadow-lg rounded" src="/storage/projects/strasbourg2.jpg" alt="Strabourg" width="100%"/>

    <p class="lead py-3">Aussi il est possible d'établir une gestion de réservation aux événements présents. Cela nous permet de réserver un nombre de places, avec un prix par personne, des réductions possibles et une gestion des annulations.</p>
    
    <img class="shadow-lg rounded" src="/storage/projects/strasbourg3.jpg" alt="Strabourg" width="100%"/>

    <p class="lead py-3">Enfin ce site permet de prendre contact avec l'office de tourisme de Strasbourg grâce à un formulaire de contact. Aussi ce site est responsive et réponds aux enjeux d'accessibilités avec un mode d'affichage conçu pour les déficients visuels</p>

    <div class="row">

        <figure class="col-12 col-md-6">
            <img class="rounded" src="/storage/projects/strasbourg4.jpg" alt="WebAgency" width="100%"/>
            <figcaption>Formulaire de contact</figcaption>
        </figure>

        <figure class="col-12 col-md-6">
            <img class="rounded" src="/storage/projects/strasbourg5.jpg" alt="WebAgency" width="100%"/>
            <figcaption>Vue avec constraste élevé et police plus grande</figcaption>
        </figure>
        
    </div>

    <div class="alert alert-success my-3">

        <p class="lead">Vous pouvez trouver ce projet à l'adresse suivante : <a href="http://strasbourgcity.code-one.fr/" class="alert-link" target="_blank">http://strasbourgcity.code-one.fr</a></p>
    
    </div>

</div>

@include('partials.footer')