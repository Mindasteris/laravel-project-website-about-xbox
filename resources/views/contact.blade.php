@extends('layouts.master')

@section('title', 'XBOX - Contact Us')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center pb-5">Contact Us</h1>

                 {{-- Message --}}
                 @if (Session::has('contact-success'))
                    <div class="alert alert-success">{{ Session::get('contact-success') }}</div>
                @endif

                <div class="card">
                    <div class="card-header card-head">{{ __('Contact us') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('contact') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="contact_message" class="col-md-4 col-form-label text-md-end">{{ __('Your Message') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control @error('contact_message') is-invalid @enderror" name="contact_message" id="contact_message" rows="10"></textarea>
    
                                    @error('contact_message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-green btn-contact">
                                        {{ __('Send') }}
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center p-3">
                                <img src="/img/xbox_logo_black.png" alt="xbox_logo_black" width="40%">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection