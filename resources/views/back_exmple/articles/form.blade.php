@extends('back789658.admin')

<!-- Depending on the existence of the article: Edit / Create -->
@section('title', $article->exists ? 'Editer un article' : "Créer un article")

@section('content')
    <form class="form-admin" id="form-admin" action="{{ route('back789658.article.form') }}" method="post" enctype="multipart/form-data">
      @csrf
    

      <!-- Field: Article Title (french) -->
      <div class="admin-form-group">
        <label for="title_fr">Titre*</label>
        <input type="text" name="title" id="title" value="{{ old('title', $article->title) ?? $article->title }}">
        @error('title')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="admin-form-group">
        <label for="title_fr">Slug*</label>
        <input type="text" name="slug" id="title" value="{{ old('slug', $article->slug) ?? $article->slug }}">
        @error('slug')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

      <!-- Field: Article Category (french) -->
      <div class="admin-form-group">
        <label for="category">Catégorie*</label>
        <select name="category[]" id="category" multiple>
            
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ in_array($category->id, (array)old('category', $article->categories->pluck('id')->toArray())) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
      </div>
     
      <!-- Field: Date of creation / publication of the article -->
      <div class="admin-form-group">
        <label>Date *</label>
        <input type="date" name="date" id="date" value="{{ old('date', $article->date) }}">
        @error('date')
            <div class="alert-error">{{ $message }}</div>
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

     
      <!-- Field: Article Author -->
      <div class="admin-form-group">
        <label for="author">Auteur*</label>
        <input type="text" name="author"  id="author" value="{{ old('author', $article->author) ?? $article->author }}">
        @error('author')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>
      
      <div class="admin-form-group">
        <label>Publié *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_true" name="publish" value="1" {{ old('publish', $article->publish) == 1 || !$article->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_false" name="publish" value="0" {{ old('publish', $article->publish) == 0 && $article->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_false">Non</label>
            </div>
        </div>
        @error('publish')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
      <!-- Field: Article Meta Description (french) -->
      <div class="admin-form-group">
        <label for="meta">Metadescription*</label>
        <input type="text" name="meta" id="meta" value="{{ old('meta', $article->meta) ?? $article->meta}}">
        @error('meta')
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
          <label for="image_path">Télécharger l'image *</label>
          
          @if (count($article->uuids)>0)
          <div id="uploaded_file" style="position:relative">
              <img src="{{ $article->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
              <input type="hidden" name="image_path" class="form-control" value="{{ $article->uuids[0]->path }}">
              <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>

          </div>
          <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
          
          @else
          <input type="file" class="form-control" name="image_path" id="image_path">
          @endif
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('article', $article->uuids->isNotEmpty() ? $article->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('article', $article->uuids->isNotEmpty() ? $article->uuids[0]->alt : '') }}">
      </div>
     

      <!-- Button to return to the previous page -->
      <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.article.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
      <input type="hidden" name="id" value="{{$article->id}}" >
      <button class="form-validation">
        <!-- Form validation button: Modify / Create -->
        @if ($article->exists)
          Sauvegarder les modifications
        @else
          Créer l'article
        @endif
      </button>

      <div class="rules">
        <em>Les champs accompagnés de * sont obligatoires.</em>
      </div>
  </form>

@endsection
