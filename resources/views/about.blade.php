@extends('layouts.main')
@section('container')
<div class="row p-3">
    <div class="col-md-6 col-sm-12">
        <div class="header_right">
            <img src="/img/logo.png" class="banner_img">
        </div>
    </div>
    <div class="col-md-6">
        <h1 class="mt-3 text-center">About Us</h1>
        <h3>Hi, Welcome to gallery SHOWTIME!</h3>
        <p class="banner_text">
            This gallery is a place that serves to present and exhibit works of art to be communicated to the wider community.
        </p>
        <p class="banner_text">
            This website functions to show off the results of taking pictures in a way that everyone can upload portraits to show off their own work
        </p>
    </div>
</div>

<div class="row mt-4 mb-4">
    <h1 class="text-center mb-3">Our Team</h1>
    <div class="col-md-3 col-sm-10 mb-3">
        <div class="card bg-dark text-white text-center">
            <img
                src="img/nina.jpeg"
                class="card-img-top" style="max-height: 500px; overflow: hidden;"
            />
            <div class="card-body">
                <h5 class="card-title">Nina Rosita</h5>
                <p class="card-text">203040082</p>
                
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-10 mb-3">
        <div class="card bg-dark text-white text-center">
            <img
                src="img/ulum.jpeg"
                class="card-img-top" style="max-height: 500px; overflow: hidden;"
            />
            <div class="card-body">
                
                <h5 class="card-title">Bahrul ulum</h5>
                <p class="card-text">203040089</p>   
                
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-10 mb-3">
        <div class="card bg-dark text-white text-center">
            <img
                src="img/rafli.jpeg"
                class="card-img-top" style="max-height: 500px; overflow: hidden;"
            />
            <div class="card-body">
                <h5 class="card-title">Muhamad Rafliansyah</h5>
                <p class="card-text">203040105</p>
                
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-10 ">
        <div class="card bg-dark text-white text-center">
            <img
                src="img/faiz.jpeg"
                class="card-img-top" style="max-height: 500px; overflow: hidden;"
            />
            <div class="card-body">
                <h5 class="card-title">Paiz Abdul Jabar</h5>
                <p class="card-text">203040108</p>
                
            </div>
        </div>
    </div>
</div>
@endsection