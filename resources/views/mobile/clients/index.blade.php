@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m pt-2">
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

    <a class="list-group-item" data-auto-hide-target="#menu-auto-hide-bottom" data-auto-hide-time="15000" href="#">
        <i class="bi bi-arrow-up-circle-fill color-green-dark font-16"></i>
        <div>Bottom Auto Hide</div>
        <i class="bi bi-chevron-right"></i>
    </a>

    <div class="card card-style mt-5">
        <div class="content mb-0">
            <h4>Clients</h4>
        <div class="list-group list-custom list-group-m list-group-flush rounded-xs overflow-visible check-visited">
        @foreach ($clients as $client)
            <a class="list-group-item" href="{{ route('clients.show', $client->id) }}">
                <i class="bi bi-person-fill"></i>
                <strong class="font-600">{{ $client->name }}</strong>
            </a>
        @endforeach
        </div>
    </div>
    </div>

    <div id="menu-auto-hide-bottom" style="height:380px; z-index: 2;" class="offcanvas offcanvas-bottom rounded-m offcanvas-detached">
        <div class="d-flex m-3">
            <div class="align-self-center">
                <h2 class="font-700 mb-0">Create Client</h2>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                    <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
                </a>
            </div>
        </div>
        <div class="content mt-0">
            <form class="demo-animation m-0" method="post" action="{{ route('clients.store') }}" >
                @csrf
                @method('post')
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle mt-3 font-14"></i>
                    <input type="text" class="form-control rounded-xs" id="c1" placeholder="Name" name="name" required/>
                    <label for="c1" class="color-theme">Client Name</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Name is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle mt-3 font-14"></i>
                    <input type="text" class="form-control rounded-xs" id="c2" placeholder="Phone Number" name="phone_number" required/>
                    <label for="c2" class="color-theme">Client Phone Number</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Phone Number is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle mt-3 font-14"></i>
                    <input type="text" class="form-control rounded-xs" id="c3" placeholder="Address" name="address" required/>
                    <label for="c3" class="color-theme">Client Address</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Address is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <button type="submit" class="btn btn-full gradient-highlight shadow-bg shadow-bg-xs">Submit</button>
            </form>
        </div>
    </div>

@endsection
