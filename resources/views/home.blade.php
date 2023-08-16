@extends('layouts.app')

@section('body')
<section class="container hero">
  <div class="row align-items-center h-100">
  <div class="col-12 col-lg-6">
    <h1>The Laravel<br/>Community Forum</h1>
    <p class="mb-4">Empowering Laravel Community to connect, share and learn</p>
    <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
    <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
  </div>
  <div class="col-12 col-lg-6 h315px order-first order-lg-last mb-3 mb-lg-0">
    <img class="hero-image float-lg-end" src="{{ url('assets/image_1.png') }}" alt="">
  </div>
  </div>            
</section>
<section class="container min-h-372px">
  <div class="row">
    <div class="col-12 col-lg-4 text-center">
      <img class="promote-icon mb-2" src="{{ url('assets/discussions.png') }}" alt="Discussion">
      <h2>Discussion</h2>
      <p class="fs-3">32,234</p>
    </div>
    <div class="col-12 col-lg-4 text-center">
      <img class="promote-icon mb-2" src="{{ url('assets/answers.png') }}" alt="Answers">
      <h2>Answers</h2>
      <p class="fs-3">5,938</p>
    </div>
    <div class="col-12 col-lg-4 text-center">
      <img class="promote-icon mb-2" src="{{ url('assets/users.png') }}" alt="Users">
      <h2>Users</h2>
      <p class="fs-3">9,349</p>
    </div>
  </div>
</section>
<section class="bg-gray">
  <div class="container py-80px">
    <h2 class="text-center mb-5">Help Others</h2>
    <div class="row">
      <div class="col-12 col-lg-4 mb-3">
         <div class="card">
          <a href="">
            <h3>How to add a custom validation in laravel?</h3>
          </a>
          <div>
            <p class="mb-5">
              I am working on a blogging application in Laravel 8. There are 4 user roles, among which, the ...
             </p>
             <div class="row">
              <div class="col me-1 m1-lg-2">
                <a href=""><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
              </div>
              <div class="col-5 col-lg-7">
                <div class="avatar-sm-wrapper d-inline-block">
                  <a href="#" class="me-1">
                    <img src="{{ url('assets/sm.png') }}" class="avatar rounded-circle" alt="">
                  </a>
                </div>
                <span class="fs-12px">
                  <a href="#" class="me-1 fw-bold">aerger</a>
                  <span class="color-gray">7 hours ago</span>
                </span>
              </div>
          </div>
         </div>
         </div>
      </div>
    </div>
  </div>
</section>
<section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
  <h2>Ready to contribute?</h2>
  <p class="mb-4">Want to make a big impact?</p>
  <div class="text-center">
    <a href="{{ route('auth.sign-up.show') }}" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
  <a href="{{ route('discussions.index') }}" class="btn btn-secondary mb-2 mb-lg-0">Join Discussion</a>
  </div>
 </section>
@endsection
