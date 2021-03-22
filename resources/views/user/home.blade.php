@extends('rootnavbar.navbar')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-warning">

                        <div>
                            <span>Gåturer</span>
                            <div class="float-right">♡</div>
                            {{-- <div class="float-right">♥</div> --}}

                            <br>

                            <tt>Fjelleven</tt>
                            <div class="float-right">/////</div>

                        </div>

                    </div>

                    <img src={{ asset('userpics/Fjelleven/gåturer/vealøs2.jpeg') }} alt="vealøs">

                </div>
            </div>
        </div>
    </div>
@endsection
