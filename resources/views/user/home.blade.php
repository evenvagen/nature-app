@extends('rootnavbar.navbar')

@section('content')

    @foreach ($posts as $post)

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="card bg-warning">
                        <div class="card-header bg-warning">

                            <div>
                                <span><b>{{ $post->theme->user->name }}</b></span>
                                <div class="float-right">♡</div>
                                {{-- <div class="float-right">♥</div> --}}

                                <br>

                                <tt>{{ $post->theme->title }} | {{ $post->description }}</tt>

                            </div>

                        </div>

                        <img src="{{ asset($post->img_url) }}" alt="vealøs">

                    </div>


                </div>
            </div>

        </div>

    @endforeach
@endsection
