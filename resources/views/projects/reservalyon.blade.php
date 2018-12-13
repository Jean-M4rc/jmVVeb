@extends('layouts.app')

@include('partials.nametitle')

<div class="container text-center">

    <h2 class="h2 py-3 font-weight-bold text-left">Site de réservation de vélo :</h2>
    <h2 class="h2 py-3 font-weight-bold">Réserva'Lyon</h2>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon1.jpg" alt="Réserva'Lyon" width="100%"/>

    <p class="lead py-3">Pour ce projet je devais réaliser une cartographie des différentes stations de locations de vélos de la ville de Lyon. Pour se faire j'ai utilisé l'API de Google Maps Plateform pour avoir une fond de carte dynamique, ainsi que l'API de JCDecaux, société exploitante des stations et locations de vélos, pour obtenir les informations nécessaire sur les stations de locations.<br/>Ceci est ma première utilisation concrète du langage JavaScript.</p>

    <p class="lead py-3">J'ai développé ce site en programmation orientée objet (POO) en javascript natif (ECMAScript 2015).</p>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon2.jpg" alt="Réserva'Lyon" width="100%"/>

    <p class="lead py-3">Pour améliorer l'expérience utilisateur (UX) et rendre le traitement de l'information plus efficace j'ai mis en place différentes icônes pour traduire l'état de la station de location directement à l'affcihage sans devoir cliquer dessus. Avec ce système l'utilisateur peut rapidement voir si la station qui l'intéresse est vide, pleine ou hors service.</p>

    <p class="lead py-3">L'API de JCDecaux actualise ses données toutes les 2 minutes ce qui permet d'avoir un état "en temps réel" des stations. La requête est faite en AJAX et la réponse est un fichier JSON contenant toutes les informations demandées. Ensuite je transforme se JSON en icône suivant l'information reçu, je récupère le nom de la station et sa géolocalisation ce qui me permet d'ajouter les marqueurs sur la carte. Aussi j'utilise l'aggrégateur de marqueurs de Goggle (MarkerClusterer) pour regrouper les marqueurs suivants le zoom de la carte.</p>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon3.jpg" alt="Réserva'Lyon" width="100%"/>

    <p class="lead py-3">Suivant l'état de la station de location, nous proposons la réservation qui se valide avec une signature sur un canvas.</p>

    <p class="lead py-3">La signature est fonctionnelle avec une souris ou sur un écran tactile (smartphone).</p>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon4.jpg" alt="Réserva'Lyon" width="100%"/>

    <p class="lead py-3">La signature est mémorisé et un timer démarre pour rendre la réservation effective pendant 20 minutes.</p>

    <p class="lead py-3">L'utilisateur peut libérer la réservation à tout moment.</p>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon6.jpg" alt="Réserva'Lyon" width="100%"/>

    <p class="lead py-3">Concernant le code j'ai défini plusieurs objets.</p>

    <p class="lead py-3">Nous avons un objet qui représente le DOM et son animation. L'apparition du bloc de réservation, du canvas de signature. Tout les mouvements du DOM sont dans cet objet.</p>

    <img class="shadow-lg rounded" src="/storage/projects/reservalyon5.jpg" alt="Réserva'Lyon" width="100%"/>


</div>