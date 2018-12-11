@extends('layouts.app')

@include('partials.nametitle')

<div class="container text-center">

    <h2 class="h2 py-3 font-weight-bold">WebAgency : L'agence de tous vos projets !</h2>

    <img class="shadow-lg rounded" src="/storage/projects/webagency0.png" alt="WebAgency" width="100%"/>

    <p class="lead py-3">Voici mon premier site Web à proprement parlé !<br/><br/>Ce site a était réalisé en pur HTML5 et CSS3 uniquement. Pour le réaliser j’ai suivi une maquette graphique imposé.<br/><br/>Le « Slider » d’accueil est réalisé en CSS seulement ainsi que le filtrage du menu de navigation dans la partie « Nos Projets ».</p>
    
    <img class="shadow-lg rounded" src="/storage/projects/webagency1.png" alt="WebAgency" width="100%"/>

    <p class="lead py-3">Ensuite j’ai disposé les éléments pour être le plus « Responsive Design » possible et garder une belle cohérence.</p>

    <div class="row">

        <figure class="col-12 col-md-7">
            <img class="rounded" src="/storage/projects/webagency2.png" alt="WebAgency" width="100%"/>
            <figcaption>Vue sur écran large</figcaption>
        </figure>

        <figure class="col-12 col-md-5">
            <img class="rounded" src="/storage/projects/webagency3.png" alt="WebAgency" width="100%"/>
            <figcaption>Vue sur mobile</figcaption>
        </figure>
        
    </div>

    <p class="lead py-3">Hack des checboxs pour pouvoir filtrer l'affichage sans JavaScript.</p>

    <div class="row">
        
        <figure class="col-12 col-md-6">
            <img class="rounded" src="/storage/projects/webagency4.png" alt="WebAgency" width="100%"/>
            <figcaption>Filtre inactif, tout les projets sont visibles.</figcaption>
        </figure>

        <figure class="col-12 col-md-6">
            <img class="rounded" src="/storage/projects/webagency5.png" alt="WebAgency" width="100%"/>
            <figcaption>Filtre actif, uniquement en CSS3</figcaption>
        </figure>
        
    </div>

    <p class="lead py-3">Enfin j’ai intégré un simple formulaire de contact (non-fonctionnel) ainsi qu’une localisation grâce à un iframe de Google Map.</p>

    <img class="shadow-lg rounded" src="/storage/projects/webagency6.png" alt="WebAgency" width="100%"/>

    <div class="alert alert-success my-3">

        <p class="lead py-3">Vous pouvez trouver ce projet à l'adresse suivante : <a href="" class="alert-link">http://webagency.jmvveb.fr.</a></p>

        <p class="lead py-3">Et le code source du site sur GitHub à l'adresse suivante : <a href="https://github.com/Jean-M4rc/WebAgency" class="alert-link" target="_blank">https://github.com/Jean-M4rc/WebAgency</a></p>
    </div>
    

</div>

@include('partials.footer')