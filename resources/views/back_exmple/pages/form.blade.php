@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $page->exists ? 'Editer une page' : "Créer une page")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.page.index') }}" >Toutes les pages</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.page.form') }}" method="post" enctype="multipart/form-data">
      @csrf
    
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
        <label for="name">Slug de la page *</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug', $page->slug) ?? $page->slug }}">
        @error('slug')
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

    <div class="admin-form-group">
        <label>Visible *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="visible_true" name="visible" value="1" {{ old('visible', $page->visible) == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="visible_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="visible_false" name="visible" value="0" {{ old('visible', $page->visible) == 0 ? 'checked' : '' }}>
                <label class="form-check-label" for="visible_false">Non</label>
            </div>
        </div>
        @error('visible')
            <div class="alert-error">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="admin-form-group">
        <label for="template_id">Template *</label>
        <select name="template_id" id="template_id">
            @foreach($templates as $template)
                <option value="{{ $template->id }}" {{ old('template_id', $page->template_id) == $template->id ? 'selected' : '' }}>
                    {{ $template->name }}
                </option>
            @endforeach
        </select>
        @error('template_id')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.page.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    <input type="hidden" name="id" value="{{$page->id}}" >
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($page->exists)
        Sauvegarder les modifications
    @else
        Créer la page
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
