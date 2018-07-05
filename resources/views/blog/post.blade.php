@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Lorem ipsum dolor sit amet</h1>
                <p class="text-muted"><i class="fas fa-user"></i> George &nbsp; <i class="fas fa-calculator"></i> 5/7/18</p>

                <hr>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Feugiat nibh sed pulvinar proin gravida. Posuere sollicitudin aliquam ultrices sagittis orci a scelerisque purus semper. Id eu nisl nunc mi ipsum. Dignissim diam quis enim lobortis scelerisque fermentum. Diam sit amet nisl suscipit. Diam sollicitudin tempor id eu nisl. Quis blandit turpis cursus in hac habitasse platea dictumst quisque. Scelerisque in dictum non consectetur a erat nam at lectus. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare. Tellus elementum sagittis vitae et leo. Velit dignissim sodales ut eu sem integer. Imperdiet proin fermentum leo vel. Sit amet risus nullam eget felis. Sagittis id consectetur purus ut faucibus pulvinar elementum integer enim. Ut faucibus pulvinar elementum integer enim. Massa eget egestas purus viverra accumsan in nisl. At risus viverra adipiscing at in tellus integer feugiat. Morbi blandit cursus risus at ultrices mi.
                </p>
                <p>
                    Tristique risus nec feugiat in. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas. Nisi quis eleifend quam adipiscing vitae. Tincidunt ornare massa eget egestas purus viverra. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Fermentum et sollicitudin ac orci phasellus. Risus at ultrices mi tempus imperdiet nulla malesuada. Sit amet justo donec enim diam. Urna duis convallis convallis tellus id interdum. Leo a diam sollicitudin tempor. Placerat orci nulla pellentesque dignissim enim sit amet venenatis urna. Feugiat nisl pretium fusce id velit ut. Id cursus metus aliquam eleifend mi in nulla. Ipsum dolor sit amet consectetur adipiscing elit ut. Risus ultricies tristique nulla aliquet. Volutpat odio facilisis mauris sit amet massa vitae tortor condimentum. Condimentum mattis pellentesque id nibh tortor id aliquet lectus proin. Consectetur lorem donec massa sapien. Egestas purus viverra accumsan in. Tempor orci eu lobortis elementum.
                </p>

                <hr>

                <h3>Comments</h3>

                <div class="card mb-2">
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Type your comment here..."></textarea>
                            </div>
                            <button class="btn btn-primary fa-pull-right">Post</button>
                        </form>
                    </div>
                </div>

                <div class="card bg-light mb-2">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget duis at tellus at urna. Pellentesque id nibh tortor id aliquet lectus. Amet venenatis urna cursus eget.</p>
                        <p class="small text-muted mb-0"><i class="fas fa-user"></i> George &nbsp; <i class="fas fa-calculator"></i> 5/7/18</p>
                    </div>
                </div>

                <div class="card bg-light mb-2">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget duis at tellus at urna. Pellentesque id nibh tortor id aliquet lectus. Amet venenatis urna cursus eget.</p>
                        <p class="small text-muted mb-0"><i class="fas fa-user"></i> George &nbsp; <i class="fas fa-calculator"></i> 5/7/18</p>
                    </div>
                </div>

                <div class="card bg-light mb-2">
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eget duis at tellus at urna. Pellentesque id nibh tortor id aliquet lectus. Amet venenatis urna cursus eget.</p>
                        <p class="small text-muted mb-0"><i class="fas fa-user"></i> George &nbsp; <i class="fas fa-calculator"></i> 5/7/18</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h1 class="d-md-block d-sm-none">&nbsp;</h1>
                @include('includes.right-sidebar')
            </div>
        </div>
    </div>
@endsection