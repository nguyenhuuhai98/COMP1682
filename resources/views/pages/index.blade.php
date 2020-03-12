@extends('layouts.app')

@section('content')
    <div class="relative clearfix full-width">
        <!-- Menu & Slide -->
        <div class="clearfix container-web relative">
            <div class=" container relative">
                <div class="row">
                    <div class=" relative menu-slide col-lg-12 clear-padding bottom-margin-15-default">
                        <!-- Menu -->
                        <div class=" menu-web relative menu-bg-white border no-border-t" style="height: 590px; overflow-y: scroll;">
                            <ul>
                                @foreach ($f1Categories as $key => $category)
                                <li><a href="#"><img src="bower_components/comp1682-bower/Home V3_files/icon_hot_gray.png" alt="Icon Hot Deals"> <p>{{ $category['name'] }}</p></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Slide -->
                        <div class="clearfix slide-box-home slide-v3 relative top-margin-15-default left-margin-15-default">
                            <div class="clearfix slide-home owl-carousel owl-theme owl-loaded owl-drag">


                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2055px, 0px, 0px); transition: all 0.25s ease 0s; width: 4110px;"><div class="owl-item cloned" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/slide_v3.png" alt="Banner Home V3"></a></div></div><div class="owl-item cloned" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/banner_v3_1-min.png" alt="Banner Home V3"></a></div></div><div class="owl-item" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/slide_v3.png" alt="Banner Home V3"></a></div></div><div class="owl-item active" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/banner_v3_1-min.png" alt="Banner Home V3"></a></div></div><div class="owl-item cloned" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/slide_v3.png" alt="Banner Home V3"></a></div></div><div class="owl-item cloned" style="width: 685px;"><div class="item"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/banner_v3_1-min.png" alt="Banner Home V3"></a></div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="dots-slide"><button role="button" class="dot-slide-home"><span></span></button><button role="button" class="dot-slide-home active"><span></span></button></div></div>
                        </div>
                        <div class="category-image top-margin-15-default left-margin-15-default float-left border">
                            <div class="owl-carousel owl-theme owl-loaded owl-drag">





                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-683px, 0px, 0px); transition: all 0.25s ease 0s; width: 2049px;"><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_1-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Mobile</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_2-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Accessory</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_3-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Camera</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_shore.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Shoes</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_4-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Bags</p>
                                    </a>
                                </div></div><div class="owl-item active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_1-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Mobile</p>
                                    </a>
                                </div></div><div class="owl-item active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_2-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Accessory</p>
                                    </a>
                                </div></div><div class="owl-item active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_3-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Camera</p>
                                    </a>
                                </div></div><div class="owl-item active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_shore.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Shoes</p>
                                    </a>
                                </div></div><div class="owl-item active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_4-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Bags</p>
                                    </a>
                                </div></div><div class="owl-item cloned active" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_1-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Mobile</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_2-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Accessory</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_3-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Camera</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_shore.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Shoes</p>
                                    </a>
                                </div></div><div class="owl-item cloned" style="width: 136.6px;"><div class=" category-image-slide relative full-width">
                                    <div class="clearfix effect-hover-zoom overfollow-hidden img-categorys-slide center-vertical-image relative">
                                        <img class="animate-default" src="bower_components/comp1682-bower/Home V3_files/image_slide_top_4-min.png" alt="Image Shore">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">
                                        <p class="uppercase bold">Bags</p>
                                    </a>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
                        </div>
                        <div class="clearfix box-banner-small-v3 top-margin-15-default left-margin-15-default box-banner-small">
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative bottom-margin-15-default">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_slide_v3.png" alt="">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                            <div class="effect-layla banner-v3-home center-vertical-image zoom-image-hover relative">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_slide_v3_1-min.png" alt="">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Menu & Slide -->
                </div>
            </div>
        </div>
        <!-- Box Banner Percent 3 -->
        <div class=" banner-percent-3 container-web">
            <div class=" container">
                <div class="row">
                    <div class="banner-pecent-3-top bottom-margin-15-default display-table">
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative right-margin-15-default ">
                            <img src="bower_components/comp1682-bower/Home V3_files/banner_percent_3.png" class="" alt="Banner Percent">
                            <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative">
                            <img src="bower_components/comp1682-bower/Home V3_files/banner_pecent_3_1-min.png" class="" alt="Banner Percent">
                            <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                        </div>
                        <div class="effect-bubba zoom-image-hover overfollow-hidden float-left relative left-margin-15-default">
                            <img src="bower_components/comp1682-bower/Home V3_files/banner_pecent_3_2-min.png" class="" alt="Banner Percent">
                            <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Percent 3 -->
        <!-- List Logo Top -->
        <div class="container-web">
            <div class="container">
                <div class="row list-logo-top-v3">
                    <ul class="clear-margin border-collapsed-box">
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_3.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_7.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_8.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_5.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_9.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_6.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_10.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_1.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_11.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_2.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_12.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_13-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_14-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_4.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_15-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_16-min.png" alt="Logo"></a></li>
                        <li class="border-collapsed-element"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_17-min.png" alt="Logo"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End List Logo Top -->
        <!-- Product Box -->
        <div class="top-margin-default homepage-top-margin-default container-web" style="margin-bottom: 20px">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-green-bd relative">
                            <img src="bower_components/comp1682-bower/Home V3_files/icon_food_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">fresh food</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID(&#39;#confectionery&#39;,&#39;.box-food-content&#39;)">Confectionery</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID(&#39;#milk-cream&#39;,&#39;.box-food-content&#39;)">Milk &amp; Cream</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID(&#39;#dry-food&#39;,&#39;.box-food-content&#39;)">Dry Food</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID(&#39;#vegetables&#39;,&#39;.box-food-content&#39;)">Vegetables</a></li>
                                <li><a href="javascript:;" onclick="showBoxCateHomeByID(&#39;#drinks&#39;,&#39;.box-food-content&#39;)">Drinks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default homepage-bottom-margin-default full-width">
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative" style="width: 100%">
                            <div class="box-food-content relative animate-default active-box-category hidden-content-box " id="confectionery">
                                @for ($i = 0; $i < 10; $i++)
                                <div class="clearfix relative product-no-ranking percent-content-5" style="margin: 1%;">
                                    <div class="effect-hover-zoom center-vertical-image" style="border: 1px solid #dedede;">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix initial name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="milk-cream">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="dry-food">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="vegetables">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-food-content relative animate-default hidden-content-box border-collapsed-box" id="drinks">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_9-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Endeavor Daytrip Backpack</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_10-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH01-Black</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_8-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Wayfarer Messenger Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_16-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_17-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_15-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-jungle-green-bd relative">
                            <img src="bower_components/comp1682-bower/Home V3_files/icon_phone_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">mobile &amp; tablet</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID(&#39;#smart-phone&#39;,&#39;.box-mobile-content&#39;)" href="javascript:;">Smart phone</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#tablet&#39;,&#39;.box-mobile-content&#39;)" href="javascript:;">Tablet</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#smart-watch&#39;,&#39;.box-mobile-content&#39;)" href="javascript:;">Smart Watch</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#case&#39;,&#39;.box-mobile-content&#39;)" href="javascript:;">Case</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#gadget&#39;,&#39;.box-mobile-content&#39;)" href="javascript:;">Gadget</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default homepage-bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="bower_components/comp1682-bower/Home V3_files/banner_home_v3_1-min.png" alt="Banner Home V3">
                            <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box active-box-category" id="smart-phone">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="tablet">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="smart-watch">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="case">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-mobile-content border-collapsed-box animate-default hidden-content-box" id="gadget">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_6-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sprite Yoga Straps1</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_5-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Mauris varius</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Printed Summer Dress</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- List Logo V3 -->
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_3.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_4.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_5.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_6.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_1.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Full With -->
        <div class="clearfix relative full-width bottom-margin-default homepage-bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row relative banners-effect5 overfollow-hidden">
                        <img src="bower_components/comp1682-bower/Home V3_files/banner_full_w_1.png" alt="Banner Full Width . . .">
                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
        <!-- Product Box -->
        <div class=" container-web">
            <div class=" container">
                <div class="row">
                    <div class="clearfix title-box title-box-v3 full-width">
                        <div class="clearfix name-title-box title-category title-turquoise-bd relative">
                            <img src="bower_components/comp1682-bower/Home V3_files/icon_electric_color.png" alt="Icon Food" class="absolute">
                            <p class="text-default-color">electric</p>
                        </div>
                        <div class="clearfix menu-title-box capitalize">
                            <ul>
                                <li><a onclick="showBoxCateHomeByID(&#39;#television&#39;,&#39;.box-electric-content&#39;)" href="javascript:;">television</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#laptop&#39;,&#39;.box-electric-content&#39;)" href="javascript:;">laptop</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#camera&#39;,&#39;.box-electric-content&#39;)" href="javascript:;">camera</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#audio&#39;,&#39;.box-electric-content&#39;)" href="javascript:;">audio</a></li>
                                <li><a onclick="showBoxCateHomeByID(&#39;#accessories&#39;,&#39;.box-electric-content&#39;)" href="javascript:;">Accessories</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" bottom-margin-default homepage-bottom-margin-default full-width">
                        <!-- Banner Home V3 -->
                        <div class="effect-bubba zoom-image-hover overfollow-hidden banner-category banner-category-v3 float-left relative border no-border-t no-border-l no-border-r">
                            <img src="bower_components/comp1682-bower/Home V3_files/banner_home_v3_2-min.png" alt="Banner Home V3">
                            <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                        </div>
                        <!-- List Product V3 -->
                        <div class="clearfix box-content-product-home-v3 float-left relative">
                            <div class="border-collapsed-box active-box-category hidden-content-box box-electric-content animate-default" id="television">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="laptop">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="camera">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="audio">
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                            <div class="border-collapsed-box hidden-content-box box-electric-content animate-default" id="accessories">
                                <div class="clearfix border-collapsed-element relative product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_11-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Orange Shopper</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Sample Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Dark Flower Shoe</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Prestige Lite Heels</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_12-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Red Travel Handbag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative border-collapsed-element product-no-ranking percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/product_home_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Metropolis Classy</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clear-padding list-logo-category-v2 list-logo-category full-width border no-border-t">
                            <ul>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_3.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_4.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_5.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_6.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_1.png" alt="Logo"></a></li>
                                <li><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"><img src="bower_components/comp1682-bower/Home V3_files/logo_2.png" alt="Logo"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Box -->
        <!-- Banner Half Website -->
        <div class=" relative banner-half-web full-width bottom-margin-default homepage-bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class="clearfix content-left col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="bower_components/comp1682-bower/Home V3_files/banner_halt.png" alt="Banner . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                        </div>
                        <div class="clearfix content-right col-md-6 col-sm-6 col-xs-12 zoom-image-hover overfollow-hidden">
                            <div class="overfollow-hidden effect-oscar relative">
                                <img class="max-width" src="bower_components/comp1682-bower/Home V3_files/banner_percent_2.png" alt="Banner . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default homepage-bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-gold-bg relative">
                                    <img src="bower_components/comp1682-bower/Home V3_files/icon_fashion.png" alt="Icon Fashion" class="absolute">
                                    <p>fashion</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_product_percent.png" class="max-width" alt="Image . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_1.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Voyage Yoga Bag</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_2.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">MH02-Black09</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_3.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle2</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_4-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_4.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Impulse Duffle</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_5.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Rival Field Messenger</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-violet-bg relative">
                                    <img src="bower_components/comp1682-bower/Home V3_files/icon_health.png" alt="Icon Health &amp; Beauty" class="absolute">
                                    <p>health &amp; beauty</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product zoom-image-hover overfollow-hidden effect-oscar relative">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_p_2_1.png" class="max-width" alt="Image . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_7-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras sed quam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_10.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cras tempus molestie</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_9.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Nullam lectus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_8.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">expedita lirope</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_7.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">corrupti</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/h1_product_6.jpg" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">accusamus odiote</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Product Category Percent 2 -->
        <div class=" full-width category-percent-two bottom-margin-default homepage-bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container">
                    <div class="row">
                        <div class=" clearfix content-left col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-magenta-bg relative">
                                    <img src="bower_components/comp1682-bower/Home V3_files/icon_mother.png" alt="Icon Mother" class="absolute">
                                    <p>mother &amp; baby</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_p_2_2.png" class="max-width" alt="Image . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_13-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_14-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Aliquam Consequat</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_15-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Cas Meque Metus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_16-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Donec Ac Tempus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_17-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Donec Non Est</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_18-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Letraset Sheets</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" clearfix content-right col-md-6 col-sm-6">
                            <!-- Title Product -->
                            <div class="clearfix title-box full-width border">
                                <div class="clearfix name-title-box title-category title-orchild-bg relative">
                                    <img src="bower_components/comp1682-bower/Home V3_files/icon_auto.png" alt="Icon Auto" class="absolute">
                                    <p>auto &amp; moto</p>
                                </div>
                                <div class="clearfix menu-title-box">
                                    <p class="view-all-product-category title-hover-red"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#" class="animate-default">view all</a></p>
                                </div>
                            </div>
                            <div class=" banner-percent-product overfollow-hidden zoom-image-hover effect-oscar relative">
                                <img src="bower_components/comp1682-bower/Home V3_files/banner_p_2_3.png" class="max-width" alt="Image . . .">
                                <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                            </div>
                            <!-- Content Product Box -->
                            <div class="clearfix product-percent-content border-collapsed-box full-width">
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_19-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Fusce Aliquam</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_20-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Canmentum bar risus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_21-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Ecurna sceleriq</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_22-min.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Odales enimn</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_23.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Placerat ultriciesus</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                                <div class="clearfix relative product-no-ranking border-collapsed-element percent-content-3">
                                    <div class="effect-hover-zoom center-vertical-image">
                                        <img src="bower_components/comp1682-bower/Home V3_files/img_product_small_24.png" alt="Product Image . . .">
                                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                                    </div>
                                    <div class="clearfix absolute name-product-no-ranking">
                                        <p class="title-product clearfix full-width title-hover-black"><a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#">Placerat ligula</a></p>
                                        <p class="clearfix price-product"><span class="price-old">$700</span> $350</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Product Category Percent 2 -->
        <!-- Banner Full With -->
        <div class=" relative full-width bottom-margin-default homepage-bottom-margin-default">
            <div class="clearfix container-web">
                <div class=" container banner_full_width">
                    <div class="row overfollow-hidden banners-effect5 relative">
                        <img src="bower_components/comp1682-bower/Home V3_files/banner_full_width_v3-min.png" alt="Banner Full Width . . .">
                        <a href="http://landing.engotheme.com/html/megastore/demo/home_v3.html#"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Full With -->
    </div>
@stop
