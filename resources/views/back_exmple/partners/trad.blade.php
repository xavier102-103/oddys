@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.partner.index') }}" >Tous les partenaires</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{route('back789658.partner.traduction' , $partner)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

        <!-- Field: Partner image -->
        <div class="admin-form-group">
            <label for="image_path">Télécharger l'image *</label>
            
            @if (count($partner->uuids)>0)
                <div id="uploaded_file" style="position:relative">
                    <img src="{{ $partner->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
                    <input type="hidden" name="image_path" class="form-control" value="{{ $partner->uuids[0]->path }}">
                    <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>
                </div>
                <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
            @else
                <input type="file" class="form-control" name="image_path" id="image_path">
            @endif

            <label for="title_image">Titre de l'image *</label>
            <input type="text" name="title_image" id="title_image" value="{{ old('partner', $partner->uuids->isNotEmpty() ? $partner->uuids[0]->title : '' ) }}">
            
            <label for="alt_image">Alt de l'image *</label>
            <input type="text" name="alt_image" id="alt_image" value="{{ old('partner', $partner->uuids->isNotEmpty() ? $partner->uuids[0]->alt : '') }}">
        </div>

        <input type="hidden" name="lang" value="{{$lang}}">
        <!-- Button to return to the previous page -->
        <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.partner.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>

        <button class="form-validation">
            <!-- Form validation button: Modify / Create -->
            Sauvegarder les modifications
        </button>

        <div class="rules">
            <em>Les champs accompagnés de * sont obligatoires.</em>
        </div>
    </form>
  
@endsection
