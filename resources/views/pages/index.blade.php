@extends('master')
@section('title','Home')
@section('home','active')
@section('content')
    <div id="hero">
        <div id="bike" class="rellax" data-rellax-speed="-5"> <img src="{{ asset('assets/images/random/building.png') }}" alt="bike" /> </div>
        <div id="cherry" class="rellax" data-rellax-speed="-2"> <img src="{{ asset('assets/images/random/cherry.png') }}" alt="bike" /> </div>
        <div id="cherry2" class="rellax" data-rellax-speed="1"> <img src="{{ asset('assets/images/random/cherry3.png') }}" alt="bike" /> </div>
        <div id="japan" class="rellax" data-rellax-speed="-4"> <img src="{{ asset('assets/images/random/japan.png') }}" alt="cherry" style="width: 281px" /> </div>
        <div id="kaneda" class="rellax" data-rellax-speed="6"> <img src="{{ asset('assets/images/random/kaneda.png') }}" alt="Kaneda" /> </div>
        <div id="logo" class="rellax" data-rellax-speed="1"> <img src="{{ asset('assets/images/logo/setcolbd.png') }}" style="width: 350px;" alt="Akira" /> </div>
        {{--        <div id="akira" class="rellax" data-rellax-speed="-1"> <img src="https://jeffbredenkamp.neocities.org/akira-min.png" alt="Akira" /> </div>  --}}
    </div>

    <div class="promote mt-5">
        <div class="container">
            <div class="text-center">
                <h4>APPLY NOW FOR APRIL 2020:
                    STUDENT VISA FINAL INTAKE DEADLINE 29TH OF NOVEMBER</h4>
            </div>
            <div class="promotion">
                <div class="row">
                    <div class="col-md-4">
                        <div class="promotion_img text-center">
                            <img src="{{ asset('assets/images/random/search.png') }}" alt="">
                        </div>
                        <div class="promotion_text text-center">
                            <h4>Find The Perfect Career</h4>
                            <p>We partner with the best language schools located in Japan and are confident that we can help you find the one that matches your needs the best.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promotion_img text-center">
                            <img src="{{ asset('assets/images/random/language.png') }}" alt="">
                        </div>
                        <div class="promotion_text text-center">
                            <h4>Learn Japanese</h4>
                            <p>We partner with the best language schools located in Japan and are confident that we can help you find the one that matches your needs the best.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="promotion_img text-center">
                            <img src="{{ asset('assets/images/random/24hr.png') }}" alt="">
                        </div>
                        <div class="promotion_text text-center">
                            <h4>24/7 hour Support</h4>
                            <p>We partner with the best language schools located in Japan and are confident that we can help you find the one that matches your needs the best.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="promotion2 mt-5">
        <div class="container-fluid">
            <div class="row" >
                <div class="col-md-3">
                    <div class="promotion_card">
                        <div class="row" style="margin: 0">
                            <div class="col-md-3 promotion_card_left">
                                <span style="top: 35%;">About US</span>

                            </div>
                            <div class="col-md-9 promotion_card_right">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="promotion_card">
                        <div class="row" style="margin: 0">
                            <div class="col-md-3 promotion_card_left">
                                <span>Course</span>

                            </div>
                            <div class="col-md-9 promotion_card_right">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="promotion_card">
                        <div class="row" style="margin: 0">
                            <div class="col-md-3 promotion_card_left">
                                <span>Place</span>

                            </div>
                            <div class="col-md-9 promotion_card_right">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="promotion_card">
                        <div class="row" style="margin: 0">
                            <div class="col-md-3 promotion_card_left">
                                <span>Support</span>

                            </div>
                            <div class="col-md-9 promotion_card_right">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner mt-5 p-3">
        <div class="heading text-center mb-5">
            <h2>Specially We Offer</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4"><img src="{{ asset('assets/images/random/gallery1.jpg') }}" alt=""></div>
                <div class="col-md-4"><img src="{{ asset('assets/images/random/gallery2.jpg') }}" alt=""></div>
                <div class="col-md-4"><img src="{{ asset('assets/images/random/gallery3.jpg') }}" alt=""></div>
            </div>

        </div>
    </div>
    <div class="our_student_say mt-5">
        <div class="heading text-center mb-5">
            <h2>What Student say About Us</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="student_say_img text-center">
                        <img src="{{ asset('assets/images/random/std1.jpg') }}" alt="">
                    </div>
                    <div class="student_say_comment text-center">
                            <h4>Zahid Hossain</h4>
                        <span><b>Bangladesh</b></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="student_say_img text-center">
                        <img src="{{ asset('assets/images/random/std2.jpg') }}" alt="">
                    </div>
                    <div class="student_say_comment text-center">
                        <h4>Zahid Hossain</h4>
                        <span><b>Bangladesh</b></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="student_say_img text-center">
                        <img src="{{ asset('assets/images/random/std1.jpg') }}" alt="">
                    </div>
                    <div class="student_say_comment text-center">
                        <h4>Zahid Hossain</h4>
                        <span><b>Bangladesh</b></span>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recent_blog mt-5 mb-5">
        <div class="heading text-center mb-5">
            <h2>Recent Blogs</h2>
        </div>

        <div class="container-fluid" style="padding: 0 70px">

            <div class="row">
                <div class="col-md-3">
                    <div class="home-blog">
                        <div class="home-blog-img">
                            <img src="{{ asset('assets/images/random/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="home-blog-body mt-3">
                            <h4 class="blog-title">Join US Quickly</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <a href="" class="btn btn-outline-success">Read more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-blog">
                        <div class="home-blog-img">
                            <img src="{{ asset('assets/images/random/gallery2.jpg') }}" alt="">
                        </div>
                        <div class="home-blog-body mt-3">
                            <h4 class="blog-title">Join US Quickly</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <a href="" class="btn btn-outline-success">Read more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-blog">
                        <div class="home-blog-img">
                            <img src="{{ asset('assets/images/random/gallery3.jpg') }}" alt="">
                        </div>
                        <div class="home-blog-body mt-3">
                            <h4 class="blog-title">Join US Quickly</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <a href="" class="btn btn-outline-success">Read more</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="home-blog">
                        <div class="home-blog-img">
                            <img src="{{ asset('assets/images/random/gallery1.jpg') }}" alt="">
                        </div>
                        <div class="home-blog-body mt-3">
                            <h4 class="blog-title">Join US Quickly</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                            <a href="" class="btn btn-outline-success">Read more</a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row mt-5">
                <div class="col-md-12 text-center ">
                    <button class="btn btn-outline-primary">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <div class="home_teacher">
        <div class="heading text-center mb-5">
            <h2>Our Best Teachers</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="home_teacher_card">
                        <div class="home_teacher_img text-center">
                            <img src="{{ asset('assets/images/random/teacher.jpg') }}" alt="">
                        </div>
                        <div class="home_teacher_description text-center mt-3">
                            <h3>Rifat Alam</h3>
                            <p>Lead Teacher</p>
                            <p>Former teacher of Language Institute club</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home_teacher_card">
                        <div class="home_teacher_img text-center">
                            <img src="{{ asset('assets/images/random/std2.jpg') }}" alt="">
                        </div>
                        <div class="home_teacher_description text-center mt-3">
                            <h3>Rifat Alam</h3>
                            <p>Assistant Teacher</p>
                            <p>Former teacher of Language Institute club</p>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="home_teacher_card">
                        <div class="home_teacher_img text-center">
                            <img src="{{ asset('assets/images/random/teacher.jpg') }}" alt="">
                        </div>
                        <div class="home_teacher_description text-center mt-3">
                            <h3>Rifat Alam</h3>
                            <p>Lead Teacher</p>
                            <p>Former teacher of Language Institute club</p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 mt-5 row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-outline-primary">Read More</button>
                </div>
            </div>

        </div>
    </div>
    <!--    ***************  WE WORK ACROSS *************      -->
    <div class="we_work_across mb-5">

        <div class="heading text-center mb-5">
            <h2>We Work Across</h2>
        </div>


            <div class="container">
                <div class="banner">
                    <div class="owl-carousel owl-theme " id="carousel01">
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni1.png')}}" alt="">
                            </div>

                        </div>
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni2.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni4.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni5.png')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="uni_logo">
                                <img src="{{asset('assets/images/logo/uni6.png')}}" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>



    </div>
    <!--    ***************  we WORK across end *************      -->
    <div class="contact mb-5">
        <div class="heading text-center mb-5">
            <h2>Contact Us</h2>
        </div>
        <div class="container">
            <div class="row margin_top">
                <div class="col-md-6">
                    <form>
                        <fieldset class="material">
                            <input class="input_field" type="text" autocomplete="off" required>
                            <hr class="input_field_hr">
                            <label>Please Enter Your Name</label>
                        </fieldset>
                        <br><br/>
                        <fieldset class="material">
                            <input class="input_field" type="text" autocomplete="off" required>
                            <hr class="input_field_hr">
                            <label>Please Enter Your Message</label>
                        </fieldset>
                        <br><br/>
                        <fieldset class="material">
                            <input class="input_field" type="text" autocomplete="off" required>
                            <hr class="input_field_hr">
                            <label>Please Type Your Phone Number</label>
                        </fieldset>
                        <br><br/>
                        <fieldset class="material">
                            <input class="input_field" type="email" autocomplete="off" required>
                            <hr class="input_field_hr">
                            <label>Please Type Your Email</label>
                        </fieldset>
                        <br>
                        <input type="submit" class="btn btn-outline-danger" value="Submit" />
                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29939.319939597666!2d139.31406364863383!3d35.700079902365886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60191f686a2d1da3%3A0x36771a8b0072653e!2z5p2P5p6X5aSn5a2mIOWFq-eOi-WtkOOCreODo-ODs-ODkeOCuQ!5e0!3m2!1sen!2sbd!4v1571715069445!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

    </div>

    <script>
        var rellax = new Rellax('.rellax', {
            speed: -2,
            center: false,
            round: true,
            vertical: true,
            horizontal: false
        });
    </script>
    <script>
        $('#carousel01').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: true,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: [
                "<i class='fa fa-caret-left'></i>",
                "<i class='fa fa-caret-right'></i>"
            ],
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:4
                },
                1000:{
                    items:4
                }
            }
        });
    </script>
@endsection
