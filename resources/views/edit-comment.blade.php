@extends('layouts.master')

@section('title', 'XBOX - Community')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center pb-5">Update Comment</h1>
                <div class="card">
                    <div class="card-header card-head">{{ __('Update comment') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('update-post', $comment->id) }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $comment->name }}" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fav_console" class="col-md-4 col-form-label text-md-end">{{ __('Favorite Console') }}</label>
    
                                <div class="col-md-6">
                                    <select class="form-select @error('fav_console') is-invalid @enderror" name="fav_console" id="fav_console" value="{{ $comment->fav_console }}">
                                        <option selected value="none">None</option>
                                        <option value="Xbox">Xbox</option>
                                        <option value="Playstation">Playstation</option>
                                        <option value="Nintendo">Nintendo</option>
                                    </select>
    
                                    @error('fav_console')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $comment->title }}">
    
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="message_content" class="col-md-4 col-form-label text-md-end">{{ __('Your Message') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control @error('message_content') is-invalid @enderror" name="message_content" id="message_content" rows="10">{{ $comment->message_content }}</textarea>
    
                                    @error('message_content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">{{ __('Who are you') }}</label>

                                <div class="col-md-6">
                                    <div class="form-check @error('gender') is-invalid @enderror">
                                        <input class="form-check-input" type="radio" name="gender" value="Male" >
                                        <label class="form-check-label" for="gender">Male</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="Female" >
                                        <label class="form-check-label" for="gender">Female</label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" value="doesn't matter" >
                                        <label class="form-check-label" for="gender">Doesn't Matter</label>
                                    </div>

                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
    
    
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-green">
                                        {{ __('Update Comment') }}
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