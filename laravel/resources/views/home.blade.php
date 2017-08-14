@extends('layouts.main')

@section('title')
    project
    @yield('title')
    @stop

@section('body')



    <section id="carou">

        <!-- Carousel-->
        <div id="bootstrap-touch-slider" class="carousel bs-slider slide  control-round indicators-line" data-ride="carousel" data-pause="hover" data-interval="5000" >

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bootstrap-touch-slider" data-slide-to="0" class="active"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="1"></li>
                <li data-target="#bootstrap-touch-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper For Slides -->
            <div class="carousel-inner" role="listbox">

                <!-- Third Slide -->
                <div class="item active">

                    <!-- Slide Background -->
                    <img src="https://images.pexels.com/photos/48726/pexels-photo-48726.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>

                    <div class="container">
                        <div class="row">
                            <!-- Slide Text Layer -->
                            <div class="slide-text slide_style_left">
                                <h1 data-animation="animated zoomInRight">Bootstrap Carousel</h1>
                                <p data-animation="animated fadeInLeft">Bootstrap carousel now touch enable slide.</p>
                                <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                                <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Second Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="https://images.pexels.com/photos/207990/pexels-photo-207990.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_center">
                        <h1 data-animation="animated flipInX">Bootstrap touch slider</h1>
                        <p data-animation="animated lightSpeedIn">Make Bootstrap Better together.</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInUp">select one</a>
                        <a href="http://bootstrapthemes.co/" target="_blank"  class="btn btn-primary" data-animation="animated fadeInDown">select two</a>
                    </div>
                </div>
                <!-- End of Slide -->

                <!-- Third Slide -->
                <div class="item">

                    <!-- Slide Background -->
                    <img src="https://images.pexels.com/photos/144345/pexels-photo-144345.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" alt="Bootstrap Touch Slider"  class="slide-image"/>
                    <div class="bs-slider-overlay"></div>
                    <!-- Slide Text Layer -->
                    <div class="slide-text slide_style_right">
                        <h1 data-animation="animated zoomInLeft">Beautiful Animations</h1>
                        <p data-animation="animated fadeInRight">Lots of css3 Animations to make slide beautiful .</p>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-default" data-animation="animated fadeInLeft">select one</a>
                        <a href="http://bootstrapthemes.co/" target="_blank" class="btn btn-primary" data-animation="animated fadeInRight">select two</a>
                    </div>
                </div>
                <!-- End of Slide -->


            </div><!-- End of Wrapper For Slides -->

            <!-- Left Control -->
            <a class="left carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <!-- Right Control -->
            <a class="right carousel-control" href="#bootstrap-touch-slider" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div> <!-- End  bootstrap-touch-slider Slider -->

        <!-- /.carousel -->

    </section>
    <section id="about">
        <div class="container mar-top-50px">
            <div class="row">
                <center>
                    <h1>THE ADVENTURES</h1>
        <span class="paragraph-size-18px "><br>
        <p>Mastering the art of perfect adventure for 10+ years in the wild?</p>
        </span>
                </center>
            </div>
            <hr>
            <div class="img-gallary row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="clearfix">
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert mar"><img src="{{URL::asset('/images/6.jpg')}}" class="img-responsive mar-">
                                <figcaption>
                                    <h3>Hello World</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/4.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/landscape-1427828526-55091a22b965e-ghk-0513-spicy-chick-casserole-getpdv-xl.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/landscape-1427828526-55091a22b965e-ghk-0513-spicy-chick-casserole-getpdv-xl.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/1(1).jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/blyuda_10.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/3.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 mar-bottom-30px">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/6.jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4 ">
                            <figure class="imghvr-flip-vert"><img src="{{URL::asset('/images/2(2).jpg')}}" class="img-responsive ">
                                <figcaption>
                                    <h3>Hello World</h3>
                                    <p>Life is too important to be taken seriously!</p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="text-gallary-right">
                    <div class=" col-md-6 col-sm-6 col-xs-12 mar-top-80px">
                        <h1>Living a Life of Adventure</h1>
                        <br>
                        <p class="paragraph-size-20px">Adventure tours wordpress theme entrada comes with features and functionalities dediacted towards helping a tour operator set up a site easily that looks and feels the way they want. The section on left here shows categories from wordpress that you chose to display on home page.</p>
                        <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">Sign up today</a> </div>
                </div>
            </div>
        </div>
    </section>
@stop


    @section('javascriptfiles')
            <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{URL::asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('/js/text-anim.js')}}"></script>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!--navbar toggle-->
    @yield('javascriptfiles')
@stop




