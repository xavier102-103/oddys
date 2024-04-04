@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create -->
@section('title', $offer->exists ? 'Editer une offre' : "Créer une offre")

@section('content')
    <form class="form-admin" id="form-admin" action="{{ route('back789658.offer.form') }}" method="post" enctype="multipart/form-data">
      @csrf
    

      <!-- Field: Article Title (french) -->
      <div class="admin-form-group">
        <label for="title">Titre*</label>
        <input type="text" name="title" id="title" value="{{ old('title', $offer->title) ?? $offer->title }}">
        @error('title')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

      <!-- Field: Article Title (french) -->
      <div class="admin-form-group">
        <label for="slug">Slug*</label>
        <input type="text" name="slug" id="slug" value="{{ old('slug', $offer->slug) ?? $offer->slug }}">
        @error('slug')
          <div class="alert-error">
            {{ $message }}
          </div>
        @enderror
      </div>

        <!-- Field: Offer City  -->
        <div class="admin-form-group">
          <label for="city">Ville*</label>
          <input type="text" name="city" id="city" value="{{ old('city', $offer->city) ?? $offer->city }}">
          @error('city')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>

       <!-- Field: Offer Country (french)  -->
       <div class="admin-form-group">
          <label for="country">Pays *</label>
          <input type="text" name="country" id="country" value="{{ old('country', $offer->country) ?? $offer->country }}">
          @error('country')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>
     
       <!-- Field: Offer Type  -->
       <div class="admin-form-group">
          <label for="type">Type *</label>
          <input type="text" name="type" id="type" value="{{ old('type', $offer->type) ?? $offer->type }}">
          @error('type')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>
     
        <div class="admin-form-group">
          <label for="description">Description (Français)</label>
          <textarea name="description" id="description" class="simple-editor">
            @if ($offer->description)
              {{ $offer->description }}
            @endif
            {{ old('description') }}
          </textarea>
          @error('description')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>
     <!-- Field: Offer Salary  -->
     <div class="admin-form-group">
          <label for="salary_min">Salaire minimum</label>
          <input type="number" name="salary_min" id="salary_min" value="{{ old('salary_min', $offer->salary_min) ?? $offer->salary_min }}" step="0.01">
          @error('salary_min')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="admin-form-group">
          <label for="salary_max">Salaire maximum</label>
          <input type="number" name="salary_max" id="salary_max" value="{{ old('salary_max', $offer->salary_max) ?? $offer->salary_max }}" step="0.01">
          @error('salary_max')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>

        <!-- Field: Offer Schedule (french)  -->
        <div class="admin-form-group">
          <label for="schedule">Horaires*</label>
          <textarea name="schedule" id="schedule" class="simple-editor">
            @if ($offer->schedule)
              {{ $offer->schedule }}
            @endif
            {{ old('schedule') }}
          </textarea>
          @error('schedule')
            <div class="alert-error">
              {{ $message }}
            </div>
          @enderror
        </div>
     
       <!-- Field: Offer Skills  -->
       <div class="admin-form-group">
        <label for="skill">Compétences</label>
          <select name="skill[]" id="skill" multiple>
              
              @foreach($skills as $skill)
                  <option value="{{ $skill->id }}" {{ in_array($skill->id, (array)old('skill', $offer->skills->pluck('id')->toArray())) ? 'selected' : '' }}>
                      {{ $skill->name }}
                  </option>
              @endforeach
          </select>
          @error('skill')
          <div class="alert-error">
              {{ $message }}
          </div>
          @enderror
      </div>

       <!-- Field: Offer Skills  -->
       <div class="admin-form-group">
        <label for="profile">Profil recherché</label>
          <select name="profile[]" id="profile" multiple>
              
          @foreach($profiles as $profile)
                  <option value="{{ $profile->id }}" {{ in_array($profile->id, (array)old('profile', $offer->profiles->pluck('id')->toArray())) ? 'selected' : '' }}>
                      {{ $profile->name }}
                  </option>
              @endforeach
          </select>
          @error('profile')
          <div class="alert-error">
              {{ $message }}
          </div>
          @enderror
      </div>
      <div class="admin-form-group">
        <label>Publié *</label>
        <div class="d-flex gap-4">
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_true" name="publish" value="1" {{ old('publish', $offer->publish) == 1 || !$offer->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_true">Oui</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="publish_false" name="publish" value="0" {{ old('publish', $offer->publish) == 0 && $offer->publish ? 'checked' : '' }}>
                <label class="form-check-label" for="publish_false">Non</label>
            </div>
        </div>
        @error('publish')
            <div class="alert-error">{{ $message }}</div>
        @enderror
      </div>
      <div class="admin-form-group">
          <label for="image_path">Télécharger l'image *</label>
          
          @if (count($offer->uuids)>0)
          <div id="uploaded_file" style="position:relative">
              <img src="{{ $offer->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
              <input type="hidden" name="image_path" class="form-control" value="{{ $offer->uuids[0]->path }}">
              <a onclick="removeImage()" style="color:red;position:absolute;bottom:0px;left:80px;cursor:pointer"><i class="fas fa-trash-alt"></i></a>

          </div>
          <input type="file" class="form-control" name="image_path" id="image_path" style="display:none;">
          
          @else
          <input type="file" class="form-control" name="image_path" id="image_path">
          @endif
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('offer', $offer->uuids->isNotEmpty() ? $offer->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('offer', $offer->uuids->isNotEmpty() ? $offer->uuids[0]->alt : '') }}">
      </div>
     

      <!-- Button to return to the previous page -->
      <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.offer.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
      <input type="hidden" name="id" value="{{$offer->id}}" >
      <button class="form-validation">
        <!-- Form validation button: Modify / Create -->
        @if ($offer->exists)
          Sauvegarder les modifications
        @else
          Créer l'offre
        @endif
      </button>

      <div class="rules">
        <em>Les champs accompagnés de * sont obligatoires.</em>
      </div>
  </form>

@endsection
