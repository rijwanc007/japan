@extends('master')
@section('title','Blog 1')
@section('content')
<div class="container">
    <div class="col-md-12 mt-4">
        <div class="blog_show">
            <img class="img-responsive mb-3" style="width: 100%;height: 400px" src="{{ asset('assets/images/random/gallery1.jpg') }}" alt="">


            <div class="row mb-3" style="border-bottom: 1px solid;margin: 0 1px;">
                <div class="col-md-6">
                    <span class="pb-3" style="display: block">
                        <ul class="" style="list-style: none;display: inline-flex;padding: 0;margin-bottom: 0">
                            <li class="top_bar_link"><i class="fas fa-user-friends"></i></li>
                            <li class="top_bar_link">Zahid</li>
                            <li class="top_bar_link"><i class="fas fa-stopwatch"></i></li>
                            <li class="top_bar_link">25-10-2019</li>
                        </ul>
                    </span>
                </div>
                <div class="col-md-6">
                    <ul class="" style="list-style: none;display: inline-flex;font-weight: 600;padding: 0;margin-bottom: 0;float: right">
                        <li class="top_bar_link"><a href="https://www.facebook.com/"><i class="fab fa-facebook-square" style="font-size: 35px;color: #3b5998;"></i></a></li>
                        <li class="top_bar_link"><a href="https://www.facebook.com/"><i class="fab fa-linkedin" style="font-size: 35px;color: #2867B2;;"></i></a></li>
                    </ul>
                </div>
            </div>

            <p style="text-align: justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                has a more-or-less normal distribution of letters, as opposed to using
                <img src="{{ asset('assets/images/random/back1.jpg') }}" style="height: 300px;width: 300px;float: right;padding: 1em" alt="">
                'Content here, content here', making it look like readable English. Many desktop publishing packages
                and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum
                et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first
                line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                <br><br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                <img src="{{ asset('assets/images/random/back1.jpg') }}" style="height: 300px;width: 300px;float: left;padding: 1em" alt="">
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages
                and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


                Where does it come from?
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and
                going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum
                et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first
                line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release
                of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                <br><br><br>
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages
                and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions
                have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>

            <div style="background: #eaeaea;padding: 1em 3em 1em 3em;">
                <h4 class="mb-5">Comments</h4>
                <div class="comments">
                    <div class="comments_top">
                        <div class="row">
                            <img src="{{ asset('assets/images/random/std1.jpg') }}"  alt="">
                            <div class="comments_name">
                                <h5>Zahid Hossain</h5>
                                <span><i class="fas fa-stopwatch"></i> 08-05-2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="comments_body">
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>
                </div>
                <div class="comments">
                    <div class="comments_top">
                        <div class="row">
                            <img src="{{ asset('assets/images/random/std2.jpg') }}"  alt="">
                            <div class="comments_name">
                                <h5>Rifat Alam</h5>
                                <span><i class="fas fa-stopwatch"></i> 28-09-2019</span>
                            </div>
                        </div>
                    </div>
                    <div class="comments_body">
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum
                            is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like</p>
                    </div>
                </div>

                <div class="comment_form mt-5">
                    <form action="" method="post">
                        <textarea name="comment" id="" cols="110" rows="5"></textarea>
                        <input type="submit" class="btn btn-outline-success">
                    </form>
                </div>
            </div>



        </div>

    </div>
</div>
@endsection
