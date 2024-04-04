@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.page.index') }}" >Toutes les pages</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.page.traduction' , $page)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')

      <!-- Field: page name -->
    <div class="admin-form-group">
        <label for="title">Titre de la page *</label>
        <input type="text" name="title" id="title" value="{{ old('title', $page->title) ?? $page->title }}">
        @error('title')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="admin-form-group">
        <label for="meta">Métadescription *</label>
        <input type="text" name="meta" id="meta" value="{{ old('meta', $page->meta) ?? $page->meta }}">
        @error('meta')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <input type="hidden" name="lang" value="{{$lang}}">
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.page.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>

    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
        Sauvegarder les modifications
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
