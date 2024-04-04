@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.menu.index') }}" >Tous les menus</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{route('back789658.menu.traduction' , $menu)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <!-- Field: Menu libelle -->
        <div class="admin-form-group">
            <label for="libelle" class="form-label">Libellé du menu*</label>
            <input type="text" class="form-control" name="libelle" id="libelle" value="{{ old('libelle', $menu->libelle) ?? $menu->libelle }}">
            @error('libelle')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <input type="hidden" name="lang" value="{{$lang}}">
        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.menu.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>

        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            Sauvegarder les modifications
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
  
@endsection
