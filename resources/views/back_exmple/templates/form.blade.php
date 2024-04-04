@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $template->exists ? 'Editer un template' : "Créer un template")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.template.index') }}" >Tous les templates</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.template.form') }}" method="post" enctype="multipart/form-data">
      @csrf
     

      <!-- Field: Template name -->
    <div class="admin-form-group">
        <label for="name">Nom du template *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $template->name) ?? $template->name }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.template.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    <input type="hidden" name="id" value="{{$template->id}}" >
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($template->exists)
        Sauvegarder les modifications
    @else
        Créer le template
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
@endsection
