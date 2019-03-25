@extends('layouts.master')

@section('content')
<!--======= SUB BANNER =========-->
<section class="sub-bnr">
    <div class="position-center-center">
        <div class="container">
            <h4>Bo Shop with Sidebar </h4>
            <ol class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Advertises</li>
            </ol>
        </div>
    </div>
</section>
<!-- Content -->
<div id="content">

    <!-- Products -->
    <section class="shop-page padding-top-100 padding-bottom-100">
        <div class="container-full">
            <div class="row">

                <!-- Shop SideBar -->
                <div class="col-md-2">
                    <div class="shop-sidebar">

                        <!-- Category -->
                        <h5 class="shop-tittle margin-bottom-30">Category</h5>
                        <ul class="shop-cate">
                            <li v-for="category in categories">
                                <a href="#."><i :class="category.icon"
                                        class="margin-right-15"></i>@{{category.name}}<span>24</span></a>
                            </li>
                        </ul>

                        <!-- TAGS -->
                        <h5 class="shop-tittle margin-top-60 margin-bottom-30">Tags</h5>
                        <ul class="shop-tags">
                            <li v-for="tag in tags">
                                <span class="badge badge-warning"><a href="#.">@{{tag.name}}</a></span>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- Item Content -->
                <div class="col-md-10">
                    <div class="sidebar-layout">

                        <!-- Item Filter -->
                        <div class="item-fltr">
                            <!-- short-by -->
                            <div class="short-by"> Showing 1–10 of 20 results </div>
                            <!-- List and Grid Style -->
                            <div class="lst-grd">
                                <!-- Select -->
                                <select>
                                    <option>All Cities</option>
                                    <option v-for="city in cities">@{{city.name}}</option>
                                </select>
                            </div>
                        </div>

                        <!-- Item -->
                        <div id="products" class="arrival-block col-item-4 list-group">
                            <div class="row">

                                <!-- Item -->
                                <div class="item grid-group-item list-group-item">
                                    <div class="img-ser">

                                        <!-- Images -->
                                        <div class="thumb"> <img class="img-1" src="images/item-img-1-1.jpg" alt=""><img
                                                class="img-2" src="images/item-img-1-1-1.jpg" alt="">
                                            <!-- Overlay  -->
                                            <div class="overlay">
                                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                                        href="#qck-view-shop"><i class="icon-eye"></i></a> </div>
                                                <div class="add-crt"><a href="advertises/detail">Advertise Details</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item Details -->
                                        <div class="cap-text">
                                            <div class="item-name">
                                                <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a>
                                                <div class="row">
                                                    <div class="col-md-9">

                                                        <i
                                                            class="fa fa-user margin-right-5"></i>{{Auth::user()->username}}
                                                    </div>
                                                    <div class="col-md-3">
                                                        <i
                                                            class="fa fa-map-marker margin-right-5"></i>{{Auth::user()->city->name}}
                                                    </div>

                                                </div>
                                                <!-- Stars -->
                                                <div>
                                                    <i class="icon-call-end margin-right-5"></i>1.800.123.456789
                                                    <a href="#." class="wsh-list margin-right-100"><i class="icon-heart"></i>0</a>
                                                </div>
                                                <!-- Details -->
                                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac
                                                    ante ipsum primis in faucibus.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- View All Items -->

                                <!-- Pagination -->
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">&gt;</a></li>
                                </ul>

                                <!-- Quick View -->
                                <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
                                    <div class="row">
                                        <div class="col-md-6">

                                            <!-- Images Slider -->
                                            <div class="images-slider">
                                                <ul class="slides">
                                                    <li data-thumb="images/item-img-1-1.jpg" class="flex-active-slide"
                                                        data-thumb-alt=""
                                                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                                        <img src="images/item-img-1-1.jpg" alt="" draggable="false">
                                                    </li>
                                                    <li data-thumb="images/item-img-1-1-1.jpg" data-thumb-alt=""
                                                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                                        <img src="images/item-img-1-1-1.jpg" alt="" draggable="false">
                                                    </li>
                                                    <li data-thumb="images/item-img-1-1.jpg" data-thumb-alt=""
                                                        style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                                        <img src="images/item-img-1-1.jpg" alt="" draggable="false">
                                                    </li>
                                                </ul>
                                                <ol class="flex-control-nav flex-control-thumbs">
                                                    <li><img src="images/item-img-1-1.jpg" class="flex-active"
                                                            draggable="false"></li>
                                                    <li><img src="images/item-img-1-1-1.jpg" draggable="false"></li>
                                                    <li><img src="images/item-img-1-1.jpg" draggable="false"></li>
                                                </ol>
                                                <ul class="flex-direction-nav">
                                                    <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a>
                                                    </li>
                                                    <li class="flex-nav-next"><a class="flex-next" href="#">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- Content Info -->
                                        <div class="col-md-6">
                                            <div class="contnt-info">
                                                <h3>Mid Rise Skinny Jeans</h3>
                                                <p>This is dummy copy. It is not meant to be read. It has been placed
                                                    here
                                                    solely to demonstrate the look and feel of finished, typeset text.
                                                    Only for
                                                    show. He who searches for meaning here will be sorely disappointed.
                                                    <br>
                                                    <br>
                                                    These words are here to provide the reader with a basic impression
                                                    of how
                                                    actual text will appear in its final presentation. </p>

                                                <!-- Btn  -->
                                                <div class="add-info">
                                                    <a href="#." class="like-us margin-right-50">
                                                        <i class="icon-heart padding-right-10"></i>0
                                                    </a>
                                                    <i class="icon-call-end margin-right-50">1.800.123.456789</i>
                                                    <a href="#." class="btn"><i class="fa fa-envelope fa-lg"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</div>
@endsection

@section('scripts')

<script>
    new Vue({
        el: '#app',

        data: {
            tags: {!!$tags!!},
            categories: {!!$categories!!},
            cities: {!!$cities!!},
        },
    });

</script>

@endsection
