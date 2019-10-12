@extends('layouts.form')

@section('card')

    @component('components.card')

        @slot('title')
            Gestion des projets
        @endslot

        <table class="table table-dark text-white">
            <tbody>

            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>
                        
                        <a type="button" href="{{ route('project.destroy', $project->id) }}"
                            class="btn btn-danger btn-sm float-right invisible" data-toggle="tooltip"
                            title="Supprimer le projet {{ $project->name }}"><i class="fas fa-trash fa-lg"></i></a>

                        <a type="button" href="{{ route('project.edit', $project->id) }}"
                            class="btn btn-warning btn-sm float-right mr-2 invisible" data-toggle="tooltip"
                            title="Modifier le projet {{ $project->name }}"><i class="fas fa-edit fa-lg"></i></a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    @endcomponent
@endsection

@section('script')

    <script>
        $(() => {
            $('a').removeClass('invisible')
        })
    </script>

    @include('partials.script-delete', ['text' => 'Vraiment supprimer le projet ?', 'return' => 'removeTr'])

@endsection