@extends('back789658.admin')

<!-- Depending on the existence of the offer: Edit / Create  -->
@section('title', 'Informations sur le contact n°' . $contact->id)

@section('breadcrumbs')
    <li class="breadcrumb-item "> <a href="{{ route('back789658.contact.index') }}" >Tous les contacts</a></li>
@endsection

@section('content')

    <form class="form-admin" id="form-admin" action="{{ route('back789658.contact.view') }}" method="post" enctype="multipart/form-data">
        @csrf
    
        <!-- Field: Contact first name -->
        <div class="admin-form-group">
            <label for="first_name">Prénom du contact</label>
            <input type="text" name="first_name" id="first_name" value="{{ $contact->first_name }}" disabled>
        </div>

        <!-- Field: Contact last name -->
        <div class="admin-form-group">
            <label for="last_name">Nom du contact</label>
            <input type="text" name="last_name" id="last_name" value="{{ $contact->last_name }}" disabled>
        </div>

        <!-- Field: Contact profession -->
        <div class="admin-form-group">
            <label for="profession">Profession du contact</label>
            <input type="text" name="profession" id="profession" value="{{ $contact->profession }}" disabled>
        </div>

        <!-- Field: Contact company -->
        <div class="admin-form-group">
            <label for="company">Entreprise du contact</label>
            <input type="text" name="company" id="company" value="{{ $contact->company }}" disabled>
        </div>

        <!-- Field: Contact company type -->
        <div class="admin-form-group">
            <label for="company_type">Type d'entreprise du contact</label>
            <input type="text" name="company_type" id="company_type" value="{{ $contact->company_type }}" disabled>
        </div>

        <!-- Field: Contact email -->
        <div class="admin-form-group">
            <label for="email">Email du contact</label>
            <input type="email" name="email" id="email" value="{{ $contact->email }}" disabled>
        </div>

        <!-- Field: Contact subject -->
        <div class="admin-form-group">
            <label for="subject">Sujet du contact</label>
            <input type="text" name="subject" id="subject" value="{{ $contact->subject }}" disabled>
        </div>

        <!-- Field: Contact message -->
        <div class="admin-form-group">
            <label for="message">Message du contact</label>
            <textarea name="message" id="message" disabled>{{ $contact->message }}</textarea>
        </div>

        <!-- Button to return to the previous page -->
        <a href="{{ route('back789658.contact.index') }}" class="cancel-button" id="cancel-button">Revenir en arrière</a>
        <input type="hidden" name="id" value="{{$contact->id}}" >

    </form>
  
@endsection
