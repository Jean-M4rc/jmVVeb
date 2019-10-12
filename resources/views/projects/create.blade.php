@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')

            Ajouter un projet

        @endslot

        <form method="POST" action="{{ route('project.store') }}">
            {{ csrf_field() }}
            @include('components.form-group', [
                'title' => __('Titre du Projet'),
                'type' => 'text',
                'name' => 'name',
                'required' => true,
                ])
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>

    @endcomponent 
@endsection