@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', 'Informations sur la candidature n°' . $application->id)

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.application.index') }}" >Toutes les candidatures</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{ route('back789658.application.view') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <!-- Field: Application first name -->
        <div class="admin-form-group">
            <label for="firstname">Prénom de la candidature</label>
            <input type="text" name="firstname" id="firstname" value="{{ $application->firstname }}" disabled>
        </div>

        <!-- Field: Application last name -->
        <div class="admin-form-group">
            <label for="lastname">Nom de la candidature</label>
            <input type="text" name="lastname" id="lastname" value="{{ $application->lastname }}" disabled>
        </div>

        <!-- Field: Application email -->
        <div class="admin-form-group">
            <label for="email">Email de la candidature</label>
            <input type="email" name="email" id="email" value="{{ $application->email }}" disabled>
        </div>

        <!-- Field: Application phone -->
        <div class="admin-form-group">
            <label for="phone">Téléphone de la candidature</label>
            <input type="text" name="phone" id="phone" value="{{ $application->phone }}" disabled>
        </div>

        <!-- Field: Application message -->
        <div class="admin-form-group">
            <label for="message">Message de la candidature</label>
            <textarea name="message" id="message" disabled>{{ $application->message }}</textarea>
        </div>


        <!-- Field: Application cv -->
        @if($application->cv)
            <div class="admin-form-group">
                <label for="cv">CV de la candidature</label>
                <a href="{{ asset('storage/' . $application->cv) }}" target="_blank">Télécharger le CV</a>
            </div>
        @endif

        <!-- Button to return to the previous page -->
        <a href="{{ route('back789658.application.index') }}" class="cancel-button" id="cancel-button">Revenir en arrière</a>
        <input type="hidden" name="id" value="{{$application->id}}" >

    </form>
  
@endsection
