@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $menu->exists ? 'Editer un menu' : "Créer un menu")

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.menu.index') }}" >Tous les menus</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{ route('back789658.menu.form') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="row">
        <!-- Field: Menu libelle -->
        <div class="admin-form-group col-4">
            <label for="libelle" class="form-label">Libellé du menu*</label>
            <input type="text" class="form-control" name="libelle" id="libelle" value="{{ old('libelle', $menu->libelle) ?? $menu->libelle }}">
            @error('libelle')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Field: Menu slug -->
        <div class="admin-form-group col-4">
            <label for="slug" class="form-label">Slug du menu*</label>
            <select name="slug" id="slug" class="form-control py-0">
                <option>Sélectionnez une page</option>
                @foreach ($pages as $page)
                    <option value="{{ $page->slug }}" {{ $page->slug == $menu->slug ? 'selected' : '' }}>
                        {{ $page->slug }}
                    </option>
                @endforeach
            </select>
            @error('page')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <!-- Field: Menu sort -->
        <div class="admin-form-group col-4">
            <label for="sort" class="form-label">Sort du menu*</label>
            <input type="number" class="form-control" name="sort" id="sort" value="{{ old('sort', $menu->sort) ?? $menu->sort }}">
            @error('sort')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>
        </div>

        <div class="row">
        <!-- Field: Menu header -->
        <div class="admin-form-group col-2">
            <label for="header" class="form-label">Header ?</label>
            <div class="d-flex gap-4">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="header" id="header_yes" value="1" @if(old('header', $menu->header === 1)) checked @endif>
                    <label for="header_yes" class="form-check-label">Oui</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="header" id="header_no" value="0" @if(old('header', $menu->header === 0)) checked @endif>
                    <label for="header_no" class="form-check-label">Non</label>
                </div>
            </div>
        </div>

        <!-- Field: Menu footer -->
        <div class="admin-form-group col-2">
            <label for="footer" class="form-label">Footer ?</label>
            <div class="d-flex gap-4">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="footer" id="footer_yes" value="1" @if(old('footer', $menu->footer === 1)) checked @endif>
                    <label for="footer_yes" class="form-check-label">Oui</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="footer" id="footer_no" value="0" @if(old('footer', $menu->footer === 0)) checked @endif>
                    <label for="footer_no" class="form-check-label">Non</label>
                </div>
            </div>
        </div>
        <div class="admin-form-group col-2">
        <label>Visible *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="visible_true" name="visible" value="1" {{ old('visible', $menu->visible) == 1 || !$menu->visible ? 'checked' : '' }}>
                <label class="form-check-label" for="visible_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="visible_false" name="visible" value="0" {{ old('visible', $menu->visible) == 0 && $menu->visible ? 'checked' : '' }}>
                <label class="form-check-label" for="visible_false">Non</label>
            </div>
        </div>
        @error('visible')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
        </div>

        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.menu.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
        <input type="hidden" name="id" value="{{$menu->id}}" >

        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            @if ($menu->exists)
                Sauvegarder les modifications
            @else
                Créer le menu
            @endif
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
  
@endsection
