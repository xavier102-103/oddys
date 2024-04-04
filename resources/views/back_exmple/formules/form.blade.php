@extends('back789658.admin')

<!-- Depending on the existence of the formule: Edit / Create -->
@section('title', $formule->exists ? 'Editer une formule' : "Créer une formule")

@section('content')
    <form class="form-admin" id="form-admin" action="{{ route('back789658.formule.form') }}" method="post" enctype="multipart/form-data">
      @csrf
    

      <!-- Field: Formule Title (french) -->
      <div class="admin-form-group">
        <label for="title">Titre*</label>
        <input type="text" name="title" id="title" value="{{ old('title', $formule->title) ?? $formule->title }}">
        @error('title')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="admin-form-group">
        <label for="description">Description*</label>
        <input type="text" name="description" id="description" value="{{ old('description', $formule->description) ?? $formule->description }}">
        @error('slug')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

    
      <div class="admin-form-group">
        <label>Publié *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_true" name="publish" value="1" {{ old('publish', $formule->publish) == 1 || !$formule->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_false" name="publish" value="0" {{ old('publish', $formule->publish) == 0 && $formule->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_false">Non</label>
            </div>
        </div>
        @error('publish')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
      <div class="admin-form-group">
        <label>Populaire *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="popular_true" name="popular" value="1" {{ old('popular', $formule->popular) == 1 || !$formule->popular ? 'checked' : '' }}>
                <label class="form-check-label" for="popular_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="popular_false" name="popular" value="0" {{ old('popular', $formule->popular) == 0 && $formule->popular ? 'checked' : '' }}>
                <label class="form-check-label" for="popular_false">Non</label>
            </div>
        </div>
        @error('publish')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
      <div class="admin-form-group">
        <label>Type *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="type_true" name="type" value="1" {{ old('type', $formule->type) == 1 || !$formule->type ? 'checked' : '' }}>
                <label class="form-check-label" for="type_true">Donneur d'ordre</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="type_false" name="type" value="2" {{ old('type', $formule->type) == 0 && $formule->type ? 'checked' : '' }}>
                <label class="form-check-label" for="type_false">Fournisseur</label>
            </div>
        </div>
        @error('publish')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
    
      <div class="admin-form-group">
          <label for="image_path">Télécharger l'image *</label>
          
          @if (count($formule->uuids)>0)
          <div id="uploaded_file" style="position:relative">
              <img src="{{ $formule->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
              <input type="hidden" name="image_path" class="form-control" value="{{ $formule->uuids[0]->path }}">
              <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>

          </div>
          <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
          
          @else
          <input type="file" class="form-control" name="image_path" id="image_path">
          @endif
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('formule', $formule->uuids->isNotEmpty() ? $formule->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('formule', $formule->uuids->isNotEmpty() ? $formule->uuids[0]->alt : '') }}">
      </div>
     

      <!-- Button to return to the previous page -->
      <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.formule.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
      <input type="hidden" name="id" value="{{$formule->id}}" >
      <button class="form-validation">
        <!-- Form validation button: Modify / Create -->
        @if ($formule->exists)
          Sauvegarder les modifications
        @else
          Créer l'formule
        @endif
      </button>

      <div class="rules">
        <em>Les champs accompagnés de * sont obligatoires.</em>
      </div>
  </form>

@endsection
