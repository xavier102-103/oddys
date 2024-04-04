@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $lang->exists ? 'Editer une langue' : "Créer une langue")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.lang.index') }}" >Toutes les langues</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.lang.form') }}" method="post" enctype="multipart/form-data">
      @csrf
     

      <!-- Field: lang name -->
    <div class="admin-form-group">
        <label for="name">Nom de la langue *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $lang->name) ?? $lang->name }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="admin-form-group">
        <label for="name">Tag de la langue *</label>
        <input type="text" name="tag" id="tag" value="{{ old('tag', $lang->tag) ?? $lang->tag }}">
        @error('tag')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.lang.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    <input type="hidden" name="id" value="{{$lang->id}}" >
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($lang->exists)
        Sauvegarder les modifications
    @else
        Créer la langue
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
@endsection
