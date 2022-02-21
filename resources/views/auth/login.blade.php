@extends('customAuth.template')

@section('content')

<form method="POST" action="{{ route('login') }}" class="p-3 py-5 bg-white shadow rounded">
    @csrf
    <div class="mb-4">
        <label for="" class="form-label">{{ __('Email') }}</label>
        <input id="email" class="form-control rounded-0 border-0 bg-light" type="email" name="email" :value="old('email')" required autofocus>
    </div>


    <div class="mb-4">
        <label for="" class="form-label">{{ __('Mot de passe') }}</label>
        <input id="password" class="form-control rounded-0 border-0 bg-light" type="password" name="password" required autocomplete="current-password">
    </div>


    <div class="d-flex justify-content-end mb-4 ">
    @if (Route::has('password.request'))
                    <a class="text-muted text-decoration-none" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif
    </div>

    <div class="">
        <button type="submit" class="btn btn-warning rounded shadow x-text-fs5  border-0 w-100 text-white py-3">Se connecter</button>
    </div>


</form>

@endsection