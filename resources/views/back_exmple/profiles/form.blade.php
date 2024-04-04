@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $profile->exists ? 'Editer un profil' : "Créer un profil")

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.profile.index') }}" >Tous les profils recherchés</a></li>
@endsection

@section('content')
    <form class="form-admin" id="form-admin" action="{{ route('back789658.profile.form') }}" method="post" enctype="multipart/form-data">
        @csrf
        
        <!-- Field: Profile name -->
        <div class="admin-form-group">
            <label for="name">Nom du profil recherché *</label>
            <input type="text" name="name" id="name" value="{{ old('name', $profile->name) ?? $profile->name }}">
            @error('name')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.profile.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
        <input type="hidden" name="id" value="{{$profile->id}}" >
        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            @if ($profile->exists)
                Sauvegarder les modifications
            @else
                Créer le profil recherché
            @endif
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
@endsection
