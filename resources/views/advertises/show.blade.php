@extends('layouts.master')

@section('content')
<!--======= SUB BANNER =========-->
<section class="sub-bnr">
    <div class="position-center-center">
        <div class="container">
            <h4>Rise Skinny Jeans</h4>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('advertises.index')}}">Advertise</a></li>
                <li class="active">Detail</li>
            </ol>
        </div>
    </div>
</section>
<!-- Content -->
<div id="content">

    <!-- Popular Products -->
    <section class="padding-top-100 padding-bottom-100">
        <div class="container">

            <!-- SHOP DETAIL -->
            <div class="shop-detail">
                <div class="row">

                    <!-- Popular Images Slider -->
                    <div class="col-md-7">

                        <!-- Place somewhere in the <body> of your page -->
                        <div id="slider-shop" class="flexslider">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <li class="flex-active-slide" style="width: 627px; margin-right: 0px; float: left; display: block;">
                                        <img class="img-responsive" src="{{asset('images/item-img-1-1-1.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                    <li style="width: 627px; margin-right: 0px; float: left; display: block;"> <img
                                            class="img-responsive" src="{{asset('images/item-img-1-1-1.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                    <li style="width: 627px; margin-right: 0px; float: left; display: block;"> <img
                                            class="img-responsive" src="{{asset('images/item-img-1-1-1.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                            </ul>
                        </div>
                        <div id="shop-thumb" class="flexslider">

                            <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                <ul class="slides" style="width: 600%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                    <li class="flex-active-slide" style="width: 210px; margin-right: 5px; float: left; display: block;">
                                        <img class="img-responsive" src="{{asset('images/item-img-1-16.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                    <li style="width: 210px; margin-right: 5px; float: left; display: block;"> <img
                                            class="img-responsive" src="{{asset('images/item-img-1-9.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                    <li style="width: 210px; margin-right: 5px; float: left; display: block;"> <img
                                            class="img-responsive" src="{{asset('images/item-img-1-11.jpg')}}" alt=""
                                            draggable="false">
                                    </li>
                                </ul>
                            </div>
                            <ul class="flex-direction-nav">
                                <li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li>
                                <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- COntent -->
                    <div class="col-md-5">
                        <h4>Rise Skinny Jeans</h4>
                        <ul class="item-owner">
                            <li>Tags:<span class="badge badge-warning"><a href="#">Top Shop</a></span></li>
                            <li>Category:<span> <a href="#">women</a></span></li>
                        </ul>

                        <!-- Item Detail -->
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use Lorem Ipsum as their default model text,</p>

                        <!-- Short By -->
                        <div class="some-info">
                            <ul class="row margin-top-30">

                                <!-- LIKE -->
                                <li class="col-sm-6">
                                        <a href="#." class="like-us"><i class="icon-heart padding-right-5"></i>0</a>
                                    </li>

                                    <li> <i class="icon-call-end"></i> 1.800.123.456789</li>
                                <!-- ADD TO CART -->
                                <li class="col-sm-12">
                                    <a href="#." class="btn"><i class="fa fa-envelope fa-lg"></i></a>
                                </li>
                            </ul>

                            <!-- INFOMATION -->
                            <div class="inner-info">
                                <h5>Share</h5>
                                <!-- Social Icons -->
                                <ul class="social_icons">
                                    <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                                    <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--======= PRODUCT DESCRIPTION =========-->
            <div class="item-decribe">
                <!-- Nav tabs -->
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" href="#review" role="tab" data-toggle="pill"
                            aria-selected="true">COMMENT (03)</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <!-- REVIEW -->
                    <div role="tabpanel" class="tab-pane fade active show" id="review">
                        <h6>3 COMMENTS</h6>

                        <!-- REVIEW PEOPLE 1 -->
                        <div class="media">
                            <div class="media-left">
                                <!--  Image -->
                                <div class="avatar"> <a href="#"> <img class="media-object" src="images/avatar-1.jpg"
                                            alt=""> </a> </div>
                            </div>
                            <!--  Details -->
                            <div class="media-body">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.”</p>
                                <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                            </div>
                        </div>

                        <!-- REVIEW PEOPLE 1 -->

                        <div class="media">
                            <div class="media-left">
                                <!--  Image -->
                                <div class="avatar"> <a href="#"> <img class="media-object" src="images/avatar-2.jpg"
                                            alt=""> </a> </div>
                            </div>
                            <!--  Details -->
                            <div class="media-body">
                                <p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua.”</p>
                                <h6>TYRION LANNISTER <span class="pull-right">MAY 10, 2016</span> </h6>
                            </div>
                        </div>

                        @auth
                        <!-- ADD REVIEW -->
                        <h6 class="margin-t-40">ADD Comment</h6>
                        <form>
                            <ul class="row">
                                <li class="col-sm-12">
                                    <label> *YOUR COMMENT
                                        <textarea></textarea>
                                    </label>
                                </li>
                                <li class="col-sm-6">
                                </li>
                                <li class="col-sm-6">
                                    <button type="submit" class="btn btn-dark btn-small pull-right no-margin">POST
                                        COMMENT</button>
                                </li>
                            </ul>
                        </form>
                        @endauth
                    </div>

                    <!-- TAGS -->
                    <div role="tabpanel" class="tab-pane fade" id="tags"> </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
