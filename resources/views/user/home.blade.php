@extends('rootnavbar.navbar')

@section('content')

    <br>

    @foreach ($posts as $post)

        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">
                    <div class="card bg-warning">
                        <div class="card-header bg-warning">

                            <div>
                                <a href="{{ route('user.visitprofile', $post->theme->user->id) }}" class="text-dark">
                                    <b>{{ $post->theme->user->name }}</b>
                                </a>

                                <livewire:like-button />

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
