@extends('layouts.home')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>{{ __('Add New Post') }}</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item text-capitalize"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>

                    <li class="breadcrumb-item active text-capitalize">{{ __('Post') }}</li>
                    <li class="breadcrumb-item active text-capitalize">{{ __('Add New Post') }}</li>
                </ol>
            </nav>
        </div>

        <section class="section">
            <div class="container">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('savePost') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-3 col-md-6 mb-3">
                            <label for="title" class="form-label" required>{{ __('Post Title') }} </label>
                            <input name="post_title" id="title" type="text" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 col-md-6 mb-3">
                            <label for="slug" class="form-label" required> {{ __('Short Description') }}</label>
                            <input name="post_slug" id="slug" type="text" class="form-control"
                                placeholder="Short Description">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-sm-3 col-md-9">
                            <label for="desc">{{ __('Post Description') }}</label>
                            <textarea name="post_description" class="form-control" placeholder="Place Your Post Here" rows="12" id="desc"></textarea>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (Session::has('success'))
        <script>
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.success(" Success! <br> {{ Session::get('success') }}  ");
        </script>
    @endif
    @if (Session::has('error'))
        <script>
            toastr.options = {
                "progressBar": true,
                "closeButton": true,
            }
            toastr.error(" Error! <br> {{ Session::get('error') }}  ");
        </script>
    @endif

@endsection
