@extends('layouts.master')

@section('content')


<div class="inputBox">
    <h3>Registreer account</h3>
    <form>
        <div class="mb-3">
            <label for="firstname" class="form-label">Voornaam</label>
            <input type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Achternaam</label>
            <input type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <span><a href="{{ route('user.register') }}">Nog niet geregistreerd?</a></span>
    </form>
</div>

@endsection
