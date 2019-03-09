@extends('layouts.master')

@section('content')
    <!-- Quick View -->
    <div id="qck-view-shop" class="zoom-anim-dialog qck-inside mfp-hide">
        <div class="row">
            <div class="col-sm-6">

                <!-- Images Slider -->
                <div class="images-slider">
                    <ul class="slides">
                        <li data-thumb="images/item-img-1-1.jpg"><img src="images/item-img-1-1.jpg" alt=""></li>
                        <li data-thumb="images/item-img-1-1-1.jpg"><img src="images/item-img-1-1-1.jpg" alt=""></li>
                        <li data-thumb="images/item-img-1-1.jpg"><img src="images/item-img-1-1.jpg" alt=""></li>
                    </ul>
                </div>
            </div>

            <!-- Content Info -->
            <div class="col-sm-6">
                <div class="contnt-info">
                    <h3>Mid Rise Skinny Jeans</h3>
                    <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate the
                        look and feel of finished, typeset text. Only for show. He who searches for meaning here will be
                        sorely disappointed. <br>
                        <br>
                        These words are here to provide the reader with a basic impression of how actual text will
                        appear in its final presentation. </p>

                    <!-- Btn  -->
                    <div class="add-info">
                        <div class="quantity">
                            <input type="number" min="1" max="100" step="1" value="1" class="form-control qty">
                        </div>
                        <a href="#." class="btn btn-inverse"><i class="icon-heart"></i></a> <a href="#." class="btn">ADD
                            TO CART </a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- New Arrival -->
    <section class="padding-top-100 padding-bottom-100">
        <div class="container-full">

            <!-- Main Heading -->
            <div class="heading text-center">
                <h4>Best Collection Arrived</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula. </span>
            </div>

            <!-- New Arrival -->
            <div class="arrival-block">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="active" id="Best-tab" data-toggle="tab" href="#bst-sell" role="tab"
                                            aria-selected="true">Best Selling</a></li>
                    <li class="nav-item"><a id="Papular-tab" data-toggle="tab" href="#pap" role="tab"
                                            aria-selected="false">Hand Made Items</a></li>
                    <li class="nav-item"><a id="Top-tab" data-toggle="tab" href="#top-10" role="tab"
                                            aria-selected="false">Top 10 Items <span class="top-tgs">Specials</span></a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="arrival-tab">

                    <!-- Best Selling  -->
                    <div class="tab-pane fade show active" id="bst-sell" role="tabpanel">

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser"><img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt="">

                                <!-- Images
                                <img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt=""> -->
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">The Child Special T-Shirts</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-2.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-2-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Ladies Sandle Clean</a> <span
                                    class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                                                                   href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-3.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-3-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Lather Bags Inside and outside</a>
                                <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-4.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-4-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Neck Skaff Full </a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-5.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-5-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Men's Fashion Winter Blue</a> <span
                                    class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                                                                   href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">

                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-6.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-6-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Angry T-Shirts White</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-7.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-7-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Angry T-shites</a> <span class="price"> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-8.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-8-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Child Dressing Shorts Jeans</a> <span
                                    class="price"> <small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                                                                    href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-9.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-9-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">The Best Hand Back Small</a> <span
                                    class="price"> <small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                                                                    href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-10.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-10-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Child White Skinny Jeans</a> <span
                                    class="price"><small>$</small>199.00</span> <a class="deta animated fadeInRight"
                                                                                   href="#.">View Detail</a></div>
                        </div>
                    </div>

                    <!-- Papular Items -->
                    <div class="tab-pane animated fadeInDown" id="pap" role="tabpanel">
                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-5.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-5-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop">Quick View</a> <a
                                            href="#."><i class="icon-magnifier"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small>299.00</span></div>
                        </div>

                        <!-- Item -->
                        <div class="item">

                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-4.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-4-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-3.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-3-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-2.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-2-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-10.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-10-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-9.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-9-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-8.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-8-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-7.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-7-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <!-- Sale -->
                            <div class="on-sale"> Sale</div>
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-6.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-6-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>
                    </div>

                    <!-- Top 10 Items -->
                    <div class="tab-pane fade" id="top-10" role="tabpanel">

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-10.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-10-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-9.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-9-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-8.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-8-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-7.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-7-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-6.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-6-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>
                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-5.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-5-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-4.jpg" alt=""> <img class="img-2"
                                                                                                       src="images/item-img-1-4-1.jpg"
                                                                                                       alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-3.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-3-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-2.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-2-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>

                        <!-- Item -->
                        <div class="item">
                            <div class="img-ser">
                                <!-- Images -->
                                <img class="img-1 lazyload" src="images/item-img-1-1.jpg" alt=""> <img
                                    class="img-2 lazyload" src="images/item-img-1-1-1.jpg" alt="">
                                <!-- Overlay  -->
                                <div class="overlay">
                                    <div class="position-center-center"><a class="popup-with-move-anim"
                                                                           href="#qck-view-shop"><i
                                                class="icon-eye"></i></a></div>
                                    <div class="add-crt"><a href="#."><i class="icon-basket margin-right-10"></i> Add To
                                            Cart</a></div>
                                </div>
                            </div>
                            <!-- Item Name -->
                            <div class="item-name"><a href="#." class="i-tittle">Mid Rise Skinny Jeans</a> <span
                                    class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                                <a class="deta animated fadeInRight" href="#.">View Detail</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about">
        <div class="light-gray-bg">
            <div class="main-page-section half_left_layout">

                <!-- Left Background -->
                <div class="main-half-layout half_left_layout studio-bg"></div>
                <!-- Right Content -->
                <div class="main-half-layout-container half_left_layout">
                    <div class="about-us-con">
                        <h3>A Brief History of the BoShop</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget
                            pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. Nunc consectetur
                            scelerisque felis, et volutpat massa aliquam in.<br>
                            <br>
                            Consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget pharetra ac, cursus sed
                            sapien.</p>
                        <h6>1950 <span></span> 1999</h6>
                        <p>Lorem ipsum dolor sit amet, efficitur eget pharetra ac, cursus sed sapien. Cras posuere
                            ligula ut blandit varius. Nunc consectetur scelerisque felis. consectetur adipiscing elit.
                            Maecenas nibh dolor</p>
                        <h6>2000 <span></span> 2018</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget
                            pharetra ac, cursus sed sapien.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="about">
        <!-- Right Background -->
        <div class="main-page-section half_left_layout">
            <div class="main-half-layout half_right_layout"></div>

            <!-- Left Content -->
            <div class="main-half-layout-container half_right_layout">
                <div class="about-us-con">
                    <h3>Fully Customizability Options Look Beautiful in 2018</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nibh dolor, efficitur eget
                        pharetra ac, cursus sed sapien. Cras posuere ligula ut blandit varius. </p>
                    <ul class="order-info">
                        <li><i class="flaticon-sewing-machine"> </i>
                            <h5>Fully Customizability</h5>
                        </li>
                        <li><i class="flaticon-needle-with-thread-to-sew-clothes"> </i>
                            <h5>Fully Hand Made</h5>
                        </li>
                        <li><i class="flaticon-shirt"> </i>
                            <h5>Elegant Looks</h5>
                        </li>
                    </ul>
                    <a href="#." class="btn btn-inverse">Order Now</a></div>
            </div>
        </div>
    </section>

    <!-- Popular item-img-1s -->
    <section class="dark-bg padding-top-150 padding-bottom-150">
        <div class="container-full">

            <!-- Main Heading -->
            <div class="heading text-center">
                <h4>Popular Products</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
            Sed feugiat, tellus vel tristique posuere, diam</span></div>

            <!-- Popular Item Slide -->
            <div class="papular-block block-slide">

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-1.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-1-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-1.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-2.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-2-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-2.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-3.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-3-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-3.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Sale -->
                    <div class="on-sale"> Sale</div>
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-4.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-4-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-4.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small><span class="line-through">299.00</span> <small>$</small>199.00</span>
                </div>
                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-5.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-5-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-5.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-6.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-6-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-6.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-7.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-7-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-7.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>

                <!-- Item -->
                <div class="item">
                    <!-- Item img -->
                    <div class="item-img"><img class="img-1" src="images/item-img-1-8.jpg" alt=""> <img class="img-2"
                                                                                                        src="images/item-img-1-8-1.jpg"
                                                                                                        alt="">
                        <!-- Overlay -->
                        <div class="overlay">
                            <div class="position-bottom">
                                <div class="inn"><a href="images/item-img-1-8.jpg" data-lighter><i
                                            class="icon-magnifier"></i></a> <a href="#." data-toggle="tooltip"
                                                                               data-placement="top" title="Add To Cart"><i
                                            class="icon-basket"></i></a> <a href="#." data-toggle="tooltip"
                                                                            data-placement="top"
                                                                            title="Add To WishList"><i
                                            class="icon-heart"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Item Name -->
                    <div class="item-name"><a href="#.">Mid Rise Skinny Jeans </a>
                        <p>Lorem ipsum dolor sit amet</p>
                    </div>
                    <!-- Price -->
                    <span class="price"><small>$</small>299</span></div>
            </div>
        </div>
    </section>

    <!-- Shipment -->
    <section class="shipment">
        <div class="container">
            <ul>
                <li><i class="flaticon-shipped"></i>
                    <h4>Free Shipment Over 50$</h4>
                </li>
                <li><i class="flaticon-support-1"></i>
                    <h4>24/7 online Support</h4>
                </li>
                <li><i class="flaticon-credit-card"></i>
                    <h4>100% Secure Payment </h4>
                </li>
                <li><i class="flaticon-box"></i>
                    <h4>World Wide Shipment</h4>
                </li>
            </ul>
        </div>
    </section>

    <!-- Knowledge Share -->
    <section class="light-gray-bg padding-top-100 padding-bottom-80">
        <div class="container-full">

            <!-- Main Heading -->
            <div class="heading text-center">
                <h4>Knowledge Share</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
            Sed feugiat, tellus vel tristique posuere,</span></div>
            <div class="knowledge-share">
                <ul class="row">

                    <!-- Post 1 -->
                    <li class="col-md-4">

                        <!-- Post Img -->
                        <div class="img-por"><img src="images/history-img.jpg" alt=""></div>
                        <article>
                            <!-- Date And comment -->
                            <div class="date"><span class="huge">10</span> <span>January</span></div>
                            <div class="com-sec"><span>By: <strong><a href="#.">Admin</a></strong></span> <span>Comments: <strong><a
                                            href="#.">32</a></strong></span></div>
                            <div class="clearfix"></div>
                            <a href="#." class="b-tittle">Donec commo is vulputate</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                                tellus vel tristique posuere, <a href="#.">Read more</a></p>
                        </article>
                    </li>

                    <!-- Post 2 -->
                    <li class="col-md-4">

                        <!-- Post Img -->
                        <div class="img-por"><img src="images/about-img.jpg" alt=""></div>
                        <article>
                            <!-- Date And comment -->
                            <div class="date"><span class="huge">25</span> <span>February</span></div>
                            <div class="com-sec"><span>By: <strong><a href="#.">Admin</a></strong></span> <span>Comments: <strong><a
                                            href="#.">32</a></strong></span></div>
                            <div class="clearfix"></div>
                            <a href="#." class="b-tittle">Donec commo is vulputate</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus. Sed
                                feugiat, tellus vel tristique posuere, <a href="#.">Read more</a></p>
                        </article>
                    </li>

                    <!-- Post 2 -->
                    <li class="col-md-4">
                        <!-- Post Img -->
                        <div class="img-por"><img src="images/custom-img.jpg" alt=""></div>
                        <article>
                            <!-- Date And comment -->
                            <div class="date"><span class="huge">25</span> <span>February</span></div>
                            <div class="com-sec"><span>By: <strong><a href="#.">Admin</a></strong></span> <span>Comments: <strong><a
                                            href="#.">32</a></strong></span></div>
                            <div class="clearfix"></div>
                            <a href="#." class="b-tittle">Donec commo is vulputate</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus maximus vehicula.
                                Sed feugiat, tellus vel tristique posuere, <a href="#.">Read more</a></p>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="small-about">
        <div class="container-full">
            <div class="news-letter padding-top-150 padding-bottom-150">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>We always stay with our clients and respect their business. We deliver 100% and provide
                            instant response to help them succeed in constantly changing and challenging business
                            world. </h3>
                        <ul class="social_icons">
                            <li><a href="#."><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#."><i class="icon-social-twitter"></i></a></li>
                            <li><a href="#."><i class="icon-social-tumblr"></i></a></li>
                            <li><a href="#."><i class="icon-social-youtube"></i></a></li>
                            <li><a href="#."><i class="icon-social-dribbble"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <h3>Subscribe Our Newsletter</h3>
                        <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac.</span>
                        <form>
                            <input type="email" placeholder="Enter your email address" required>
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="testimonial padding-top-60 padding-bottom-80">
        <div class="container-full"><i class="fa fa-quote-left"></i>

            <!-- Slide -->
            <div class="single-slide">

                <!-- Slide -->
                <div class="testi-in">
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                        faucibus. Sed ullamcorper sapien lacus, eu luctus non. Nulla lacinia, eros vel fermentum
                        consectetur,</p>
                    <h5>John Smith</h5>
                    <span>Themeforest</span></div>

                <!-- Slide -->
                <div class="testi-in">
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum primis in
                        faucibus. Sed lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum
                        consectetur, </p>
                    <h5>John Smith</h5>
                    <span>Themeforest</span></div>

                <!-- Slide -->
                <div class="testi-in">
                    <p>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsum. Sed ullamcorper
                        sapien lacus, eu posuere odio luctus non. Nulla lacinia, eros vel fermentum consectetur, </p>
                    <h5>John Smith</h5>
                    <span>Themeforest</span></div>
            </div>
        </div>
    </section>

    <!-- Clients -->
    <section class="clients light-gray-bg padding-top-60 padding-bottom-80">
        <div class="container-full">
            <div class="clients-slide">
                <div><img src="images/c-mg-1.png" alt=""></div>
                <div><img src="images/c-mg-2.png" alt=""></div>
                <div><img src="images/c-mg-3.png" alt=""></div>
                <div><img src="images/c-mg-1.png" alt=""></div>
                <div><img src="images/c-mg-2.png" alt=""></div>
                <div><img src="images/c-mg-3.png" alt=""></div>
                <div><img src="images/c-mg-1.png" alt=""></div>
                <div><img src="images/c-mg-2.png" alt=""></div>
                <div><img src="images/c-mg-3.png" alt=""></div>
            </div>
        </div>
    </section>
@endsection
