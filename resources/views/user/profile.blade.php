@extends('rootnavbar.navbar')

@section('content')

    <div class="jumbotron text-center text-warning" style="background-color: rgb(25, 25, 25)">
        <h1>{{ $user->name }}</h1>

        <tt> {{ $followers }} følgere</tt>
        <tt>|</tt>
        <tt>følger {{ $following }}</tt>

        <br>

        <tt>Nytt album +</tt>


    </div>

    <div class="container">

        <div class="row">
            @foreach ($themes as $theme)
                <div class="col-sm-6">

                    <div class="card mb-2 bg-warning">

                        <div class="card-header bg-warning">
                            <span> {{ $theme->title }}</span>
                            <div class="float-right">Legg til bilde +</div>

                            <br>

                            <tt>{{ $theme->description }}</tt>
                        </div>

                        <img src={{ asset($theme->img_teaser) }} alt="vealøs">

                    </div>



                </div>
            @endforeach
        </div>

    </div>

@endsection
