@extends('layouts.main')
@section('container')
<div class="row p-3">
    <div class="col-md-7 col-sm-12">
        {{-- <img src="img/bg.jpg" alt="about" class="img-fluid" /> --}}
        <div class="header_right">
            <img src="/img/logo.png" class="banner_img">
        </div>
    </div>
    <div class="col-md-5">
        <h1 class="mt-3 text-center">About Us</h1>
        <h3>Hi, Welcome to gallery SHOWTIME!</h3>
        <p class="banner_text">
          This gallery is a place that serves to present and exhibit works of art to be communicated to the wider community. </p>
    </div>
</div>

<div class="row mt-4 mb-4">
    <h1 class="text-center mb-3">Our Team</h1>
    
    <div class="col-md-3 col-sm-10">
        <div class="card">
            <img
                src="img/nina.jpeg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Nina Rosita</h5>
                <p class="card-text">203040082</p>
                
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="img/ulum.jpeg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                
                <h5 class="card-title">Bahrul ulum</h5>
                <p class="card-text">203040089</p>   
                
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="img/rafli.jpeg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Muhamad Rafliansyah</h5>
                <p class="card-text">203040105</p>
               
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card">
            <img
                src="img/faiz.jpeg"
                class="card-img-top"
                alt="..."
            />
            <div class="card-body">
                <h5 class="card-title">Paiz Abdul Jabar</h5>
                <p class="card-text">203040108</p>
               
            </div>
        </div>
    </div>
</div>

{{-- <div class="row mt-5 justify-content-center">
    <h1 class="text-center mb-4">Contact Us</h1>
    <div class="col-md-5 col-sm-12">
        <div class="card text-dark bg-light mb-3">
            <div class="card-header text-center">Contact</div>
            <div class="card-body">
                <p class="card-text">
                    Jika Anda memiliki pertanyaan, silakan kirimkan melalui formulir di bawah ini. Kami akan mencoba menjawab pertanyaan Anda.
                </p>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2015785999074!2d107.59059581487186!3d-6.866431369089696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6be3e8a0c49%3A0x730028bf4627def4!2sUniversitas%20Pasundan!5e0!3m2!1sen!2sid!4v1639199288259!5m2!1sen!2sid"
            width="525"
            height="305"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            class="d-none d-md-block"
        ></iframe>
    </div>
    <div class="col-md-5">
        <form action="https://formsubmit.co/gdriveegi@gmail.com" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputText" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                    >Email Address</label
                >
                <input type="email" name="email" class="form-control" id="exampleInputText" />
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"
                    >Telephone</label
                >
                <input type="tel" name="telephone" class="form-control" id="exampleInputText" />
            </div>
            <label for="exampleInputEmail1" class="form-label">Message</label>
            <div class="form-floating">
                <textarea
                name="message"
                    class="form-control"
                    placeholder="Leave a comment here"
                    id="floatingTextarea2"
                    style="height: 100px"
                ></textarea>
                <label for="floatingTextarea2"></label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div> --}}
@endsection