@extends('layouts.Home.main')
@section('content')
    {{-- TOP SELLING & FEATURED EVENT --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h3>Featured Event</h3>
                <div class="card">
                    <div class="card-bod">
                        <img src="https://via.placeholder.com/370" alt="" srcset="" class="d-flex m-3">
                        <button type="button" class="btn btn-primary m-3"><i class="bi bi-plus"></i>Follow</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Top Selling</h3>
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/125" alt="" srcset="">
                        <button type="button" class="btn btn-primary m-3"><i class="bi bi-plus"></i>Follow</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/125" alt="" srcset="">
                        <button type="button" class="btn btn-primary m-3"><i class="bi bi-plus"></i>Follow</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/125" alt="" srcset="">
                        <button type="button" class="btn btn-primary m-3"><i class="bi bi-plus"></i>Follow</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- TOP SELLING & FEATURED EVENT - END --}}

    {{-- JUMBOTRON --}}
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Fluid jumbotron</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
    </div>
    {{-- JUMBOTRON - END --}}

    {{-- START - Categories Event --}}

    {{-- END - Categories Event --}}

@endsection
