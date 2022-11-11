@extends('layouts.master')

@section('title', 'XBOX - Community')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center pb-5">Our Community</h1>

                 {{-- Message Success --}}
                 @if (Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                {{-- Message Update --}}
                @if (Session::has('update-comment'))
                    <div class="alert alert-info">{{ Session::get('update-comment') }}</div>
                @endif

                {{-- Message Delete --}}
                @if (Session::has('delete-comment'))
                    <div class="alert alert-danger">{{ Session::get('delete-comment') }}</div>
                @endif

                <div class="card">
                    <div class="card-header card-head">{{ __('Leave a comment') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('community') }}">
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
                                <label for="fav_console" class="col-md-4 col-form-label text-md-end">{{ __('Favorite Console') }}</label>
    
                                <div class="col-md-6">
                                    <select class="form-select @error('fav_console') is-invalid @enderror" name="fav_console" id="fav_console">
                                        <option selected value="none">None</option>
                                        <option value="Xbox">Xbox</option>
                                        <option value="Playstation">Playstation</option>
                                        <option value="Nintendo">Nintendo</option>
                                        <option value="Other">Other</option>
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
                                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title">
    
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
                                    <textarea class="form-control @error('message_content') is-invalid @enderror" name="message_content" id="message_content" rows="10"></textarea>
    
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
                                    <button type="submit" class="btn btn-green btn-community">
                                        {{ __('Post Comment') }}
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
        
        {{-- Comments --}}
        <h1 class="text-center my-5 comment-header">All Comments</h1>
        
        @if ($comments->count() === 0)
            <h4 class="text-center">No Comments. Be first and tell us what you think.</h4>
        @endif

        <div class="d-flex flex-wrap border-top border-bottom border-dark">

            @foreach ($comments as $comment)
                <div class="border bg-white border-secondary my-3 comment">
                    <h3 class="text-center">{{ $comment->name }}</h3> <br>
                    Gender: <b>{{ $comment->gender }}</b> &nbsp;|
                    Date: <b>{{ $comment->created_at }}</b> <br> <hr>
                    <b>FAVORITE CONSOLE:&nbsp;</b> <span class="text-primary">{{ $comment->fav_console }}</span> <br>
                    <b>TITLE:&nbsp;</b> {{ $comment->title }}<br>
                    <b>COMMENT:&nbsp;</b> <p>{{ $comment->message_content }}</p>
                    <hr>
                    <a href="{{ route('edit', $comment->id) }}"><i class="bi bi-pencil-fill text-primary"></i></a>
                    <a href="{{ route('delete', $comment->id) }}"><i class="bi bi-trash3-fill text-danger"></i></a>
                </div>
            @endforeach

        </div>
    </div>
@endsection