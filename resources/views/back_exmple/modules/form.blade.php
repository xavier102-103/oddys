@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $module->exists ? 'Editer un module' : "Créer un module")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.module.index',['id' => $formule->id ]) }}" >Tous les blocs</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.module.form') }}" method="post" enctype="multipart/form-data">
      @csrf
     
    
      <!-- Field: content name -->
    <div class="admin-form-group">
        <label for="name">Nom du module *</label>
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
        <label for="name">Complement </label>
        <input type="text" name="complement" id="complement" value="{{ old('complement', $module->complement) ?? $module->complement }}">
        @error('complement')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="admin-form-group">
        <label>Active *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="active_true" name="active" value="1" {{ old('active', $module->active) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="visible_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="active_false" name="active" value="0" {{ old('active', $module->active) == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="active_false">Non</label>
            </div>
        </div>
        @error('active')
            <div class="alert-error">{{ $message }}</div>
        @enderror
    </div>
  
    
  
    <input type="hidden" name="formule_id" value="{{$formule->id}}">
    <input type="hidden" name="id" value="{{$module->id}}">
    
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.module.index',['id' => $formule->id]) }}" onClick="cancelEvent(event)">Revenir en arrière</button>

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
