@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.module.index',['id' => $formule->id ]) }}" >Tous les modules</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.module.traduction' , $module)}}" method="post" enctype="multipart/form-data">
    @csrf

    
    <!-- Field: content name -->
   

<!-- Field Sets for Different Content Types -->
<div class="admin-form-group">
        <label for="title">Nom du module *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $module->name) ?? $module->name }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="admin-form-group">
        <label for="description">Description*</label>
        <textarea name="description" id="description" class="simple-editor">
          @if ($module->description)
            {{ $module->description }}
          @endif
          {{ old('description') }}
        </textarea>
        @error('description')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>
    <div class="admin-form-group">
        <label for="description">Complement *</label>
        <input type="text" name="complement" id="complement" value="{{ old('complement', $module->complement) ?? $module->complement }}">
        @error('meta')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <input type="hidden" name="lang" value="{{$lang}}">
   

    <input type="hidden" name="module_id" value="{{$module->id}}">
    <input type="hidden" name="formule_id" value="{{$module->formule_id}}">
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.module.index',['id' => $formule->id ]) }}" onClick="cancelEvent(event)">Revenir en arrière</button>

    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($module->exists)
        Sauvegarder les modifications
    @else
        Créer le module
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
@endsection
