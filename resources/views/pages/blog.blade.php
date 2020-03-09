@extends('master')
@section('title','Blog & News')
@section('blog','active')
@section('content')
    <div class="container">
        <marquee class="mt-3">A scrolling text created with HTML Marquee element.</marquee>
        <h2 class="head_title mt-5 mb-3 text-center">Blog & News</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery1.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery2.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery3.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery1.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery3.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="home-blog">
                    <div class="home-blog-img">
                        <img src="{{ asset('assets/images/random/gallery2.jpg') }}" alt="">
                    </div>
                    <div class="home-blog-body mt-3">
                        <h4 class="blog-title">Join US Quickly</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <a href="{{ route('pages.blogShow') }}" class="btn btn-outline-success">Read more</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
