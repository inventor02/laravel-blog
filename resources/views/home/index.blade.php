@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Latest Posts</h1>
                <div class="card bg-light mb-2">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-user"></i> George &nbsp; <i
                                    class="fas fa-calendar"></i> 5/7/18</h6>
                        <hr>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Eget duis at tellus at urna. Pellentesque id nibh tortor id
                            aliquet lectus. Amet venenatis urna cursus eget. Ligula ullamcorper malesuada proin libero.
                            Amet commodo nulla facilisi nullam vehicula. Vel pretium lectus quam id leo in vitae turpis
                            massa. Pellentesque elit eget gravida cum sociis natoque. Est placerat…
                        </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
                <div class="card bg-light">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet</h5>
                        <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-user"></i> George &nbsp; <i
                                    class="fas fa-calendar"></i> 5/7/18</h6>
                        <hr>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Eget duis at tellus at urna. Pellentesque id nibh tortor id
                            aliquet lectus. Amet venenatis urna cursus eget. Ligula ullamcorper malesuada proin libero.
                            Amet commodo nulla facilisi nullam vehicula. Vel pretium lectus quam id leo in vitae turpis
                            massa. Pellentesque elit eget gravida cum sociis natoque. Est placerat…
                        </p>
                        <a href="#" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h1 class="d-lg-block d-sm-none">&nbsp;</h1>
                @include('includes.right-sidebar')
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ asset('js/home/home.js') }}"></script>
@endsection