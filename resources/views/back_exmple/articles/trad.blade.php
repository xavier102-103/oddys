@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.article.index') }}" >Tous les articles</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.article.traduction' , $article)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')

      <!-- Field: article name -->
    <div class="admin-form-group">
        <label for="title">Titre de l'article *</label>
        <input type="text" name="title" id="title" value="{{ old('title', $article->title) ?? $article->title }}">
        @error('title')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="admin-form-group">
        <label for="meta">Métadescription *</label>
        <input type="text" name="meta" id="meta" value="{{ old('meta', $article->meta) ?? $article->meta }}">
        @error('meta')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    
     <!-- Field: Article Description (french) (that attracts the reader)-->
    <div class="admin-form-group">
        <label for="description">Description*</label>
        <textarea name="description" id="description" class="simple-editor">
            @if ($article->description)
            {{ $article->description }}
            @endif
            {{ old('description') }}
        </textarea>
        @error('description')
            <div class="alert-error">
            {{ $message }}
            </div>
        @enderror
    </div>
    <!-- Field: Article Content (french) -->
    <label for="content">Contenu de l'article*</label>
      <div id="contents-container">
       
        <div class="content-item">
        
          <div class="content-row">
            <textarea name="content" id="content" class="custom-form-control tinymce-editor">
              @if ($article->content)
                {{ $article->content }}
              @endif
              {{ old('content') }}
            </textarea>
          </div>
        </div>
      </div>

      <div class="admin-form-group">
          <img src="{{ $article->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('article', $article->uuids->isNotEmpty() ? $article->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('article', $article->uuids->isNotEmpty() ? $article->uuids[0]->alt : '') }}">
      </div>
    <input type="hidden" name="lang" value="{{$lang}}">
    <!-- Button to return to the previous article -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.article.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
        Sauvegarder les modifications
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
