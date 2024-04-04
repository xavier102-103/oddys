@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.formule.index') }}" >Toutes les formules</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.formule.traduction' , $formule)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')

      <!-- Field: formule name -->
    <div class="admin-form-group">
        <label for="title">Titre de la formule *</label>
        <input type="text" name="title" id="title" value="{{ old('title', $formule->title) ?? $formule->title }}">
        @error('title')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="admin-form-group">
        <label for="description">description *</label>
        <input type="text" name="description" id="description" value="{{ old('description', $formule->description) ?? $formule->description }}">
        @error('meta')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    
     
      <div class="admin-form-group">
          <img src="{{ $formule->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('formule', $formule->uuids->isNotEmpty() ? $formule->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('formule', $formule->uuids->isNotEmpty() ? $formule->uuids[0]->alt : '') }}">
      </div>
    <input type="hidden" name="lang" value="{{$lang}}">
    <!-- Button to return to the previous formule -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.formule.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
        Sauvegarder les modifications
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
