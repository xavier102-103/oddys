@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $collaborator->exists ? 'Editer un collaborateur' : "Créer un collaborateur")

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.collaborator.index') }}" >Tous les collaborateurs</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{ route('back789658.collaborator.form') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <!-- Field: Collaborator first name -->
        <div class="admin-form-group">
            <label for="first_name">Prénom du collaborateur *</label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name', $collaborator->first_name) ?? $collaborator->first_name }}">
            @error('first_name')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Field: Collaborator last name -->
        <div class="admin-form-group">
            <label for="last_name">Nom du collaborateur *</label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name', $collaborator->last_name) ?? $collaborator->last_name }}">
            @error('last_name')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Field: Collaborator profession -->
        <div class="admin-form-group">
            <label for="profession">Profession du collaborateur *</label>
            <input type="text" name="profession" id="profession" value="{{ old('profession', $collaborator->profession) ?? $collaborator->profession }}">
            @error('profession')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Field: Collaborator description -->
        <div class="admin-form-group">
            <label for="description">Description du collaborateur *</label>
            <textarea name="description" id="description">@if($collaborator->description){{ $collaborator->description }}@endif{{ old('description') }}</textarea>
            @error('description')
                <div class="alert-error">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Field: Collaborator image -->
        <div class="admin-form-group">
            <label for="image_path">Télécharger l'image *</label>
            
            @if (count($collaborator->uuids)>0)
                <div id="uploaded_file" style="position:relative">
                    <img src="{{ $collaborator->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
                    <input type="hidden" name="image_path" class="form-control" value="{{ $collaborator->uuids[0]->path }}">
                    <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>
                </div>
                <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
            @else
                <input type="file" class="form-control" name="image_path" id="image_path">
            @endif

            <label for="title_image">Titre de l'image *</label>
            <input type="text" name="title_image" id="title_image" value="{{ old('collaborator', $collaborator->uuids->isNotEmpty() ? $collaborator->uuids[0]->title : '' ) }}">
            
            <label for="alt_image">Alt de l'image *</label>
            <input type="text" name="alt_image" id="alt_image" value="{{ old('collaborator', $collaborator->uuids->isNotEmpty() ? $collaborator->uuids[0]->alt : '') }}">
        </div>

        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.collaborator.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
        <input type="hidden" name="id" value="{{$collaborator->id}}" >

        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            @if ($collaborator->exists)
                Sauvegarder les modifications
            @else
                Créer le collaborateur
            @endif
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
  
@endsection
