@extends('layouts.master')

@section('content')
<!--======= SUB BANNER =========-->
<section class="sub-bnr">
    <div class="position-center-center">
        <div class="container">
            <h4>Bo Shop with Sidebar </h4>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Items</li>
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
                            <li><a href="#."> Chair <span>24</span></a></li>
                            <li><a href="#."> Bag <span>122</span></a></li>
                            <li><a href="#."> Soffa <span>09</span></a></li>
                            <li><a href="#."> Bed <span>12</span></a></li>
                            <li><a href="#."> Shoes <span>98</span></a></li>
                            <li><a href="#."> Table <span>34</span></a></li>
                            <li><a href="#."> Bedsheets <span>23</span></a></li>
                            <li><a href="#."> Curtains <span>43</span></a></li>
                            <li><a href="#."> TV Cabinets <span>12</span></a></li>
                            <li><a href="#."> Clocks <span>18</span></a></li>
                            <li><a href="#."> Towels <span>25</span></a></li>
                        </ul>

                        <!-- TAGS -->
                        <h5 class="shop-tittle margin-top-60 margin-bottom-30">Papular Tags</h5>
                        <ul class="shop-tags">
                            <li><span class="badge badge-warning"><a href="#.">Towels</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Chair</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Bedsheets</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Shoe</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Curtains</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Clocks</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">TV Cabinets</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Best Seller</a></span></li>
                            <li><span class="badge badge-warning"><a href="#.">Top Selling</a></span></li>
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
                            <div class="lst-grd"> <a href="#" id="list"><i class="flaticon-interface"></i></a> <a href="#"
                                    id="grid"><i class="icon-grid"></i></a>
                                <!-- Select -->
                                <select>
                                    <option>Short By: New</option>
                                    <option>Short By: New</option>
                                    <option>Short By: New</option>
                                    <option>Short By: New</option>
                                    <option>Short By: New</option>
                                </select>
                            </div>
                        </div>

                        <!-- Item -->
                        <div id="products" class="arrival-block col-item-4 list-group">
                            <div class="row">

                                <!-- Item -->
                                <div class="item">
                                    <div class="img-ser">
                                        <!-- Images -->
                                        <div class="thumb"> <img class="img-1" src="images/item-img-1-12.jpg" alt=""><img
                                                class="img-2" src="images/item-img-1-12-1.jpg" alt="">
                                            <!-- Overlay  -->
                                            <div class="overlay">
                                                <div class="position-center-center"> <a class="popup-with-move-anim"
                                                        href="#qck-view-shop"><i class="icon-eye"></i></a>
                                                    </div>
                                            </div>
                                        </div>

                                        <!-- Item Name -->
                                        <div class="item-name fr-grd">
                                            <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a>
                                                <a class="deta animated fadeInRight" href="advertises/detail">View Detail</a>
                                            </div>
                                        <!-- Item Details -->
                                        <div class="cap-text">
                                            <div class="item-name"> <a href="#." class="i-tittle">Mid Rise Skinny Jeans</a>

                                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac
                                                    ante ipsum primis in faucibus. Sed ullamcorper sapien lacus, eu
                                                    luctus non. Nulla lacinia, eros vel fermentum consectetur,</p>
                                                <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac
                                                    ante ipsum primis in faucibus.</p>
                                            </div>
                                        </div>
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
                                                data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;">
                                                <img src="images/item-img-1-1.jpg" alt="" draggable="false"> </li>
                                            <li data-thumb="images/item-img-1-1-1.jpg" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                                <img src="images/item-img-1-1-1.jpg" alt="" draggable="false"> </li>
                                            <li data-thumb="images/item-img-1-1.jpg" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
                                                <img src="images/item-img-1-1.jpg" alt="" draggable="false"> </li>
                                        </ul>
                                        <ol class="flex-control-nav flex-control-thumbs">
                                            <li><img src="images/item-img-1-1.jpg" class="flex-active" draggable="false"></li>
                                            <li><img src="images/item-img-1-1-1.jpg" draggable="false"></li>
                                            <li><img src="images/item-img-1-1.jpg" draggable="false"></li>
                                        </ol>
                                        <ul class="flex-direction-nav">
                                            <li class="flex-nav-prev"><a class="flex-prev" href="#">Previous</a></li>
                                            <li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- Content Info -->
                                <div class="col-md-6">
                                    <div class="contnt-info">
                                        <h3>Mid Rise Skinny Jeans</h3>
                                        <p>This is dummy copy. It is not meant to be read. It has been placed here
                                            solely to demonstrate the look and feel of finished, typeset text. Only for
                                            show. He who searches for meaning here will be sorely disappointed. <br>
                                            <br>
                                            These words are here to provide the reader with a basic impression of how
                                            actual text will appear in its final presentation. </p>

                                        <!-- Btn  -->
                                        <div class="add-info">
                                            <a href="#." class="btn"><i class="fa fa-thumbs-up"></i></a>
                                            <a href="#." class="btn"><i class="fa fa-envelope fa-lg"></i></a>
                                            <i class="icon-call-end">1.800.123.456789</i>
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
