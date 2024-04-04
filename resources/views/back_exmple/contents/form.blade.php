@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', $content->exists ? 'Editer un contenu' : "Créer un contenu")
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.content.index',['entity_id' => $entity->id , 'entity_type' => get_class($entity)]) }}" >Tous les blocs</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{ route('back789658.content.form') }}" method="post" enctype="multipart/form-data">
      @csrf
     
    
      <!-- Field: content name -->
    <div class="admin-form-group">
        <label for="name">Nom du contenu *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $content->name) ?? $content->name }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    <div class="admin-form-group">
        <label for="name">Description </label>
        <input type="text" name="description" id="description" value="{{ old('description', $content->description) ?? $content->description }}">
        @error('name')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>
    
    <div class="admin-form-group">
        <label for="content_type">Type de contenu *</label>
        <select name="type" id="content_type"  {{ get_class($entity) === 'App\Models\Page' ? 'disabled' : '' }}>
            <option value="1" {{ old('type', $content->type) == 1 ? 'selected' : '' }}>Texte</option>
            <option value="2" {{ old('type', $content->type) == 2 ? 'selected' : '' }}>Image</option>
            <option value="3" {{ old('type', $content->type) == 3 ? 'selected' : '' }}>Editeur</option>
            <option value="4" {{ old('type', $content->type) == 4 ? 'selected' : '' }}>Lien</option>
            <!-- Add more options as needed -->
        </select>
    </div>
    @if (get_class($entity) === 'App\Models\Page')
        <input type="hidden" name="type" value="{{$content->type}}">
    @endif
    <div style="{{ get_class($entity) === 'App\Models\Template'  ? 'display:none' : '' }}">
        <!-- Field Sets for Different Content Types -->
        <div id="1_fields" class="content-fields" style="{{ old('type', $content->type) === 1 ? '' : 'display:none' }}">
            <!-- Fields specific to 'text' content type -->
            <div class="admin-form-group">
                <label for="text_content">Contenu *</label>
                <input type="text" name="text_content" id="text_content" value="{{ old('content', $content->text_content) }}">
            </div>
        </div>

        <div id="2_fields" class="content-fields" style="{{ old('type', $content->type) === 2 ? '' : 'display:none' }}">
            <!-- Fields specific to 'image' content type -->
            <div class="admin-form-group">
                <label for="image_path">Télécharger l'image *</label>
                @if (!empty($content->uuids[0]))
                <div id="uploaded_file" style="position:relative">
                    <img src="{{ $content->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
                    <input type="hidden" name="image_path" class="form-control" value="{{ $content->uuids[0]->path }}">
                    <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>

                </div>
                <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
                
                @else
                <input type="file" class="form-control" name="image_path" id="image_path">
                @endif
                <label for="title_content">Titre *</label>
                <input type="text" name="title_content" id="title_content" value="{{ old('content', $content->title_content) }}">
                <label for="alt_content">Alt *</label>
                <input type="text" name="alt_content" id="alt_content" value="{{ old('content', $content->alt_content) }}">
            </div>
        </div>

        <div id="3_fields" class="content-fields" style="{{ old('type', $content->type) === 3 ? '' : 'display:none' }}">
            <!-- Fields specific to 'image' content type -->
            <div class="admin-form-group">
                <textarea name="editor_content" id="editor_content" class="simple-editor">
                {{ old('content', $content->editor_content) }}
                </textarea>
            </div>
        </div>

        <div id="4_fields" class="content-fields" style="{{ old('type', $content->type) === 4 ? '' : 'display:none' }}">
            <!-- Fields specific to 'image' content type -->
            <div class="admin-form-group">
                <label for="link_text">Texte du lien *</label>
                <input type="text" name="link_text" id="link_text" value="{{ old('content', $content->link_text) }}">
                <label for="link_url">Lien *</label>
                <input type="text" name="link_url" id="link_url" value="{{ old('content', $content->link_url) }}">
            </div>
        </div>
    </div>
    <input type="hidden" name="entity_type" value="{{get_class($entity)}}">
    <input type="hidden" name="entity_id" value="{{$entity->id}}">
    <input type="hidden" name="id" value="{{$content->id}}">
    
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.content.index',['entity_id' => $entity->id , 'entity_type' => get_class($entity)]) }}" onClick="cancelEvent(event)">Revenir en arrière</button>

    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
    @if ($content->exists)
        Sauvegarder les modifications
    @else
        Créer le content
    @endif
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
@endsection
