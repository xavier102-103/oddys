@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.offer.index') }}" >Toutes les offres</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.offer.traduction' , $offer)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')

      <!-- Field: offer name -->
    <div class="admin-form-group">
        <label for="title">Titre de l'offre *</label>
        <input type="text" name="title" id="title" value="{{ old('title', $offer->title) ?? $offer->title }}">
        @error('title')
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

     <!-- Field: Offer Type  -->
     <div class="admin-form-group">
          <label for="type">Country *</label>
          <input type="text" name="country" id="country" value="{{ old('country', $offer->country) ?? $offer->country }}">
          @error('country')
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
       <!-- Field: Offer Schedule (french)  -->
       <div class="admin-form-group">
          <label for="schedule">Horaires </label>
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
      @if( $offer->uuids->isNotEmpty())
      <div class="admin-form-group">
          <img src="{{ $offer->uuids[0]->path }}" alt="" style="width:100px;height:100px;">
          <label for="title_image">Titre *</label>
          <input type="text" name="title_image" id="title_image" value="{{ old('offer', $offer->uuids->isNotEmpty() ? $offer->uuids[0]->title : '' ) }}">
          <label for="alt_image">Alt *</label>
          <input type="text" name="alt_image" id="alt_image" value="{{ old('offer', $offer->uuids->isNotEmpty() ? $offer->uuids[0]->alt : '') }}">
      </div>
      @endif
    <input type="hidden" name="lang" value="{{$lang}}">
    <!-- Button to return to the previous offer -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.offer.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>
    
    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
        Sauvegarder les modifications
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
