@extends('layouts.dashboard.dashboard')
@section('content')
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body" onclick="window.location.href='{{ asset('/products') }}'" style="cursor: pointer">
                    <h5>Movies Showing</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $product }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Movies had been added.</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-movie-outline text-primary ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body" onclick="window.location.href='{{ asset('/soons') }}'" style="cursor: pointer">
                    <h5>Coming Soon</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $soon }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Movies that coming soon had been added.</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-movie-roll text-danger ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body" onclick="window.location.href='{{ asset('/theaters') }}'" style="cursor: pointer">
                    <h5>Theaters</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $theater }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Theaters had been added.</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-theater text-success ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body" onclick="window.location.href='{{ asset('/users') }}'" style="cursor: pointer">
                    <h5>Users</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $user }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Users had been created</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-account-multiple text-info ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4 grid-margin">
            <div class="card">
                <div class="card-body" onclick="window.location.href='{{ asset('/contacts') }}'" style="cursor: pointer">
                    <h5>Contacts</h5>
                    <div class="row">
                        <div class="col-8 col-sm-12 col-xl-8 my-auto">
                            <div class="d-flex d-sm-block d-md-flex align-items-center">
                                <h2 class="mb-0">{{ $contact }}</h2>
                            </div>
                            <h6 class="text-muted font-weight-normal">Messages that hold from users.</h6>
                        </div>
                        <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                            <i class="icon-lg mdi mdi-email-outline text-warning ml-auto"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
