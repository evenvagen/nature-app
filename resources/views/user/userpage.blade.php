@extends('rootnavbar.navbar')

@section('content')



    <div class="container">


        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-sm-4">
                    <div class="card mb-2 bg-warning">
                        <h3 class="text-center">Collection</h3>
                        <img src={{ asset('userpics/Desertdan/polarørken/goldensky.jpeg') }} alt="vealøs">
                        <p>
                            Bilder av polarørkenen fra områder omkring nordpolen
                        </p>
                    </div>
                </div>
            @endfor
        </div>



    </div>

@endsection
