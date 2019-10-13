@extends('layouts.app')

@include('partials.nametitle')

<div class="container text-center">
    <h2 class="h2 py-3 font-weight-bold text-left">Blog de l'écrivain Jean Forteroche :</h2>
    <h2 class="h2 py-3 font-weight-bold">Mon premier projet avec un back-end en PHP.</h2>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche0.jpg" alt="Jean Forteroche 0" width="100%"/>
    </figure>
    <p class="lead py-3">Ce premier projet PHP fut assez révélateur pour moi. J'ai en effet fait connaissance de la programmation PHP et j'ai pris un immense plaisir à découvrir ce langage.<br/>L'objectif de ce projet était de permettre de fournir à un écrivain un blog "clé-en-main" où il pourait simplement administrer son blog et ses abonnés.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche1.jpg" alt="Jean Forteroche 1" width="100%"/>
    </figure>
    <p class="lead py-3">Sur la page des billets de blog l'organisation visuelle est antéchronologique, le plus récent est en haut à gauche et ainsi de suite. Le billet de blog sont présentés avec le composant "card" de Bootstrap. Nous affichons les premiers caractères du billet dans le corps de cette carte.</p>
    <div class="row">
        <figure class="col-12 col-md-6">
            <img class="rounded-top" src="/storage/projects/forteroche2.jpg" alt="Jean Forteroche 2" width="100%"/>
            <figcaption class="bg-dark text-white rounded-bottom">Vue d'un billet de blog</figcaption>
        </figure>
        <figure class="col-12 col-md-6">
            <img class="rounded-top" src="/storage/projects/forteroche3.jpg" alt="Jean Forteroche 3" width="100%"/>
            <figcaption class="bg-dark text-white rounded-bottom">L'utilisateur abonné peut commenter les billet s'il est connecté.</figcaption>
        </figure>
    </div>
    <p class="lead py-3">Ce blog permet aux utilisateurs de s'inscrire pour pouvoir commenter les billets de l'écrivain et échanger avec lui.</p>
    <div class="row">
        <figure class="col-12 col-md-6">
            <img class="rounded-top" src="/storage/projects/forteroche4.png" alt="Jean Forteroche 4" width="100%"/>
            <figcaption class="bg-dark text-white rounded-bottom">Une fois connecté l'abonné peut aussi signaler des commentaires déplacés.</figcaption>
        </figure>
        <figure class="col-12 col-md-6">
            <img class="rounded-top" src="/storage/projects/forteroche5.png" alt="Jean Forteroche 5" width="100%"/>
            <figcaption class="bg-dark text-white rounded-bottom">Vue d'un commentaire signalé</figcaption>
        </figure>
    </div>
    <p class="lead py-3">Pour s'abonner le visiteur doit remplir un formulaire contenant un captcha Google.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche6.png" alt="Jean Forteroche 6" width="100%"/>
    </figure>
    <p class="lead py-3">Une fois inscrit l'utilisateur a accès à son profil où il peut renseigner des éléments complémentaires, réinitialiser son mot de passe, supprimer son compte ou encore définir une photo de profil. Par défaut nous attribuons un avatar.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche7.png" alt="Jean Forteroche 7" width="100%"/>
    </figure>
    <p class="lead py-3">Aussi il peut accéder à une page affichant l'ensemble des abonnés et leur nombre de commentaires respectifs.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche8.png" alt="Jean Forteroche 8" width="100%"/>
    </figure>
    <p class="lead py-3">Nous voyons ici que les abonnés possèdent des "rangs". Avec ce système nous permettons à l'écrivain de définir des modérateurs qui ont des droits plus étendus que les simples abonnées. Toute cette gestion d'abonnés, de commentaire, et d'articles se fait grâce à une administration accessible en partie pour les modérateurs et en totalité pour l'écrivain.</p>
    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche9.png" alt="Jean Forteroche 9" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Page d'accueil de l'administration pour un modérateur.</figcaption>
    </figure>
    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche10.png" alt="Jean Forteroche 10" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Page d'accueil de l'administration pour l'écrivain, ou un ayant droit.</figcaption>
    </figure>
    <p class="lead py-3">Dans cette administration nous avons plusieurs partie : la gestion des commentaires, l'ajout de nouveau récit, la gestion des récits et la gestion des abonnées.</p>
    <p class="lead py-3">Tout d'abord la gestion des commentaires qui permet de traiter les commentaires signalés, de les modérer (masquer leurs affichages), ou de les supprimer complétement.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche11.png" alt="Jean Forteroche 11" width="100%"/>
    </figure>
    <p class="lead py-3">Pour l'ajout de nouveau récit nous avons mis en place une interface WYSIWYG.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche12.png" alt="Jean Forteroche 12" width="100%"/>
    </figure>
    <p class="lead py-3">Nous avons aussi ajouté une interface d'administration des récits existant pour pouvoir les modifier ou les supprimer.</p>
    <figure>
        <img class="rounded" src="/storage/projects/forteroche13.png" alt="Jean Forteroche 13" width="100%"/>
    </figure>
    <p class="lead py-3">Pour gérer les abonnées nous avons aussi suivi la même présentation en ajoutant une gestion des rôles et aussi des photos de profils uploadées.</p>
    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche14.png" alt="Jean Forteroche 14" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Vue de gestion des abonnés.</figcaption>
    </figure>
    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche15.png" alt="Jean Forteroche 15" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Vue des infos de l'abonné et de gestion de la photo de profil.</figcaption>
    </figure>
    <figure>
        <img class="rounded-top" src="/storage/projects/forteroche16.png" alt="Jean Forteroche 16" width="100%"/>
        <figcaption class="bg-dark text-white rounded-bottom">Gestion des droits de l'abonné.</figcaption>
    </figure>
    <p class="lead py-3">Voilà pour la présentation générale de mon premier projet en PHP.</p>
    <div class="alert alert-success my-3">
        <p class="lead py-3">Vous pouvez trouver ce projet à l'adresse suivante : <a href="http://forteroche.jmvveb.fr" class="alert-link" rel="noopener noreferrer" target="_blank">http://forteroche.jmvveb.fr</a></p>
        <p class="lead py-3">Et le code source du site sur GitHub à l'adresse suivante : <a href="https://github.com/Jean-M4rc/P4" class="alert-link" rel="noopener noreferrer" target="_blank">https://github.com/Jean-M4rc/Forteroche</a></p>
    </div>
</div>

@include('partials.footer')