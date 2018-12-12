@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            @lang('Modifier un projet')
        @endslot

        <form method="POST" action="{{ route('project.update', $project->id) }}">
        {{ csrf_field() }} {{ method_field('PUT') }}

            @include('components.form-group', [
                'title' => __('Nom'),
                'type' => 'text',
                'name' => 'name',
                'value' => $project->name,
                'required' => true,
            ])
            
            @component('components.button')
                @lang('Envoyer')
            @endcomponent
        </form>

    @endcomponent

@endsection