@extends('rootnavbar.navbar')

@section('content')

    <div class="jumbotron text-center text-warning" style="background-color: rgb(25, 25, 25)">
        <h1>{{ $user->name }}</h1>
        <tt>2 følgere</tt>
        <tt>|</tt>
        <tt>følger 3</tt>
    </div>

    <div class="container">

        <div class="row">
            @foreach ($themes as $theme)
                <div class="col-sm-6">

                    <div class="card mb-2 bg-warning">

                        <div class="card-header bg-warning">
                            <span> {{ $theme->title }}</span>
                            <div class="float-right"> // Følg +</div>

                            <br>

                            <tt>{{ $theme->description }}</tt>
                            <div class="float-right">Se mer</div>
                        </div>

                        <img src={{ asset($theme->img_teaser) }} alt="vealøs">

                    </div>



                </div>
            @endforeach
        </div>

    </div>

@endsection
