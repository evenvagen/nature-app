@extends('rootnavbar.navbar')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header bg-warning">
                    <p class="h3 text-center mt-2">DM</p>
                </div>

                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Avsender</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                        @for ($i = 0; $i < 3; $i++)
                            <tr>
                                <th scope="row">1</th>
                                <td>Desertdan</td>
                                <td> <a class="text-success" href="#">(͡ ͡° ͜ つ ͡͡°)</a></td>
                            </tr>
                        @endfor
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection
