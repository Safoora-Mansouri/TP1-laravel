@extends('layouts.app')
@section('title','edit the student')
@section('titleHeader','edit the student')
@section('content')
<form action="{{ route('etudient.update', $etudient->id) }}" method="POST" class="needs-validation" novalidate>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nom">Nom:</label>
        <input type="text" class="form-control" id="nom" name="nom" value="{{ $etudient->nom }}" required>
        <div class="invalid-feedback">
            Please enter a name.
        </div>
    </div>

    <div class="form-group">
        <label for="adresse">Adresse:</label>
        <input type="text" class="form-control" id="adresse" name="adresse" value="{{ $etudient->adresse }}" required>
        <div class="invalid-feedback">
            Please enter an address.
        </div>
    </div>

    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone" name="phone" value="{{ $etudient->phone }}" required>
        <div class="invalid-feedback">
            Please enter a phone number.
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $etudient->email }}" required>
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>

    <div class="form-group">
        <label for="date_de_naissance">Date de Naissance:</label>
        <input type="date" class="form-control" id="date_de_naissance" name="date_de_naissance" value="{{ $etudient->date_de_naissance }}" required>
        <div class="invalid-feedback">
            Please enter a valid date of birth.
        </div>
    </div>

    <div class="form-group">
        <label for="ville_id">Ville ID:</label>
        <input type="number" class="form-control" id="ville_id" name="ville_id" value="{{ $etudient->ville_id }}" required>
        <div class="invalid-feedback">
            Please enter a valid Ville ID.
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection