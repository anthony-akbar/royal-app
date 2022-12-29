@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a href="#" data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m pt-2">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Clients</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s pt-2">
                    <i class="bi bi-list font-20"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style mt-5">
        <div class="content mb-0">
            <h4>Clients</h4>
        <div class="list-group list-custom list-group-m list-group-flush rounded-xs overflow-visible check-visited">
        @foreach ($clients as $client)
            <a class="list-group-item">
                <i class="bi bi-person-fill"></i>
                <strong class="font-600">{{ $client->name }}</strong>
            </a>
        @endforeach
        </div>
    </div>
    </div>
@endsection
