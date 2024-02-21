@extends('layouts.master')

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a New Post</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('posts.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" rows="4" required autofocus>{{ old('content') }}</textarea>

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Create Post
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
