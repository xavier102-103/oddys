@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $category->exists ? 'Editer une categorie' : "Créer une categorie")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.category.index') }}" >Toutes les categorie</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.category.form') }}" method="post" enctype="multipart/form-data">
      @csrf
     

      <!-- Field: Category name -->
    <div class="admin-form-group">
        <label for="name">Nom de la categorie *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $category->name) ?? $category->name }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.category.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    <input type="hidden" name="id" value="{{$category->id}}" >
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($category->exists)
        Sauvegarder les modifications
    @else
        Créer la categorie
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
@endsection
