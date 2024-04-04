@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.content.index',['entity_id' => $content->entity_id , 'entity_type' => $content->entity_type]) }}" >Tous les blocs</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.content.traduction' , $content)}}" method="post" enctype="multipart/form-data">
    @csrf

    
    <!-- Field: content name -->
   

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

    <input type="hidden" name="lang" value="{{$lang}}">
    <input type="hidden" name="fields" value="{{$fields}}">

    <input type="hidden" name="content_id" value="{{$content->id}}">
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.content.index',['entity_id' => $content->entity_id , 'entity_type' => $content->entity_type]) }}" onClick="cancelEvent(event)">Revenir en arrière</button>

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
