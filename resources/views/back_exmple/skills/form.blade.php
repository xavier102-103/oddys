@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $skill->exists ? 'Editer un skill' : "Créer un skill")

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.skill.index') }}" >Tous les skills</a></li>
@endsection

@section('content')
    <form class="form-admin" id="form-admin" action="{{ route('back789658.skill.form') }}" method="post" enctype="multipart/form-data">
        @csrf

        <!-- Field: Skill name -->
        <div class="admin-form-group">
            <label for="name">Nom du skill *</label>
            <input type="text" name="name" id="name" value="{{ old('name', $skill->name) ?? $skill->name }}">
            @error('name')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.skill.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
        <input type="hidden" name="id" value="{{$skill->id}}" >
        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            @if ($skill->exists)
                Sauvegarder les modifications
            @else
                Créer le skill
            @endif
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
@endsection
