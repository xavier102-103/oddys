@extends('back789658.admin')

@section('title',  'Traduction : ' . $lang)
@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.skill.index') }}" >Touts les skills</a></li>
@endsection
@section('content')
<form class="form-admin" id="form-admin" action="{{route('back789658.skill.traduction' , $skill)}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('post')

      <!-- Field: Skill name -->
    <div class="admin-form-group">
        <label for="name">Nom du skill *</label>
        <input type="text" name="name" id="name" value="{{ old('name', $skill->name) ?? $skill->name }}">
        @error('title')
        <div class="alert-error">
            {{ $message }}
        </div>
        @enderror
    </div>

    <input type="hidden" name="lang" value="{{$lang}}">
    <!-- Button to return to the previous page -->
    <button type="button" class="cancel-button" id="cancel-button" data-url="{{ route('back789658.skill.index') }}" onClick="cancelEvent(event)">Revenir en arrière</button>

    <button class="form-validation">
    <!-- Form validation button: Modify / Create -->
        Sauvegarder les modifications
    </button>

    <div class="rules">
    <em>Les champs accompagnés de * sont obligatoires.</em>
    </div>
</form>
  
@endsection
