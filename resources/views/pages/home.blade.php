@extends('myLayouts.app')
@section('style')
    <style>
        @media(max-width: 765px) {
            #testimonialPictures{
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron" style="background-color:#0b0e0f; margin-top:-30px; margin-bottom:-30px">
        <div class="container" style="background-color:">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color:white;">Our Services</h2>
                    <div class="text-center">
                        <span style="color: rgba(0, 0, 0, 0); border-bottom: 2px solid #097d54">This is it for </span>
                    </div>

                    <br><br>
                </div>
            </div>{{-- First Row --}}
            <br>
            <div class="row" style="">
                <div class="col-md-4 services-icon">
                    <i class="far fa-desktop fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">WEB DESIGN</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
                <div class="col-md-4 services-icon">
                    <i class="far fa-code fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">WEB DEVELOPMENT</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
                <div class="col-md-4 services-icon">
                    <i class="far fa-comments-dollar fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">ONLINE MARKETING</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
            </div>{{--Second Row  --}}
            
            <div class="row">
                <div class="col-md-4 services-icon">
                    <i class="far fa-file-code fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">DESKTOP SOFTWARE</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
                <div class="col-md-4 services-icon">
                    <i class="fab fa-google fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">SEO EXPERTS</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
                <div class="col-md-4 services-icon">
                    <i class="far fa-user-graduate fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                    <br>
                    <h4 style="color:white; font-weight:bold">TRAININGS</h4>
                    <h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed minus eaque ullam doloremque quod qui ad vero dolor ab corporis saepe fugiat, dolores odit recusandae aspernatur non aperiam eligendi illum.
                    </h5><br>
                </div>
                </div>{{-- Third Row --}}
        </div>{{-- Container --}}
    </div>{{-- First Jumbotron  --}}

    <div class="jumbotron" style="background-color:#060708; ">{{-- Portfolio --}}{{-- Use for resonsive images.. class="d-block w-100" --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color:white;">Portfolio</h2>
                    <div class="text-center">
                        <span style="color: rgba(0, 0, 0, 0); border-bottom: 2px solid #097d54">This is it for </span>
                    </div>

                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Able Home Tutors</h3>
                </div>
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Herbal Wellness</h3>
                </div>
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Motik Dev</h3>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Private</h3>
                </div>
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Private</h3>
                </div>
                <div class="col-md-4" onmouseover="this.style.filter='grayscale(1) opacity(0.3)'" onmouseout="this.style.filter='grayscale(0.2) opacity(1)'">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                    </div>
                    <h3 class="text-center">Private</h3>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <span style="border-bottom:2px solid #03fca5; font-size:1.5em" onmouseover="this.style.borderBottom='1px solid transparent';this.style.backgroundColor='#03fca5';this.style.color='white'" onmouseout="this.style.borderBottom='2px solid #03fca5';this.style.backgroundColor='transparent';this.style.color='gray'">View More</span>
                </div>
            </div>
        </div>
    </div>{{-- Portfolio --}}

    <div class="jumbotron" style="background-color:#0b0e0f; margin-top:-30px; margin-bottom:-30px"> {{-- Articles Jumbotron --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 style="color:white">Articles</h2>
                </div>
                <div class="text-center">
                    <span style="color: rgba(0, 0, 0, 0); border-bottom: 2px solid #097d54">This is it for </span>
                </div><br><br>
            </div>{{-- Row 1 --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" alt="" width="100%" height="300px">
                    </div>

                    <h4 style="font-weight:bolder; color:white">
                        Title 1
                    </h4>
                    <h5 style="color:">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe culpa magnam placeat aliquid a provident qui numquam labore, excepturi eius quo accusamus minus! Rem est exercitationem vitae accusantium odit magni!
                    </h5>
                    <button style="border-radius:100px; background-color:#03fca5; border:0px solid black; #03fca5; color:white; padding:5px; font-weight:bolder" onmouseover="this.style.color='#03fca5';this.style.backgroundColor='white';this.style.fontWeight='bold'" onmouseout="this.style.color='white';this.style.backgroundColor='#03fca5'">Read More</button>
                    <br><br><br>
                </div>
                <div class="col-md-6">
                        <div class="text-center">
                            <img src="{{ asset('img/rsz_adorable-animal-cat-730896.jpg') }}" alt="" width="100%" height="300px">
                        </div>
                    <h4 style="font-weight:bolder; color:white">
                        Title 2
                    </h4>
                    <h5 style="color:">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe culpa magnam placeat aliquid a provident qui numquam labore, excepturi eius quo accusamus minus! Rem est exercitationem vitae accusantium odit magni!
                    </h5>
                    <button style="border-radius:100px; background-color:#03fca5; border:0px solid black; #03fca5; color:white; padding:5px; font-weight:bolder" onmouseover="this.style.color='#03fca5';this.style.backgroundColor='white';this.style.fontWeight='bold'" onmouseout="this.style.color='white';this.style.backgroundColor='#03fca5'">Read More</button>
                </div>
            </div>{{-- Row 2 --}}
            <br>
            <div class="row">
                <div class="col-md-12 text-center">
                    <span style="border-bottom:2px solid #03fca5; font-size:1.5em" onmouseover="this.style.borderBottom='1px solid transparent';this.style.backgroundColor='#03fca5';this.style.color='white'" onmouseout="this.style.borderBottom='2px solid #03fca5';this.style.backgroundColor='transparent';this.style.color='gray'">View More</span>
                </div>
            </div>{{-- Row 3 --}}
        </div><br><br>
    </div> {{-- Articles Jumbotron --}}

    <div class="jumbotron" style="background-color:#060708; margin-bottom:0px">{{-- Testimonial Jumbotron --}}
        <div class="container">
{{-- First Row --}}
            <div class="row">
                <div class="col-md-5" id="testimonialPictures">
                    <div class="row">
                        <col-md-12>
                            <div class="text-center wow zoomIn infinite slower" data-wow-delay="1s" data-wow-speed="0.1s" style="animation-duration:9s">
                                {{-- First image to appear in the middle --}}
                                <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" style="border-radius:100px; height:100px; width:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>
                            <div class="wow zoomIn infinite slower" data-wow-delay="2s" style="animation-duration:9s">
                                {{-- Second image to appear on the left --}}
                                <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" style="border-radius:100px; height:100px; width:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>

                        </col-md-12>
                    </div>
                    <div class="row">
                        <div class="col-md-12 wow zoomIn infinite slower" style="text-align:right; animation-duration:9s" data-wow-delay="3s">
                            {{-- Third image to appear on the right --}}
                            <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" style="border-radius:100px; height:100px; width:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                        </div>
                    </div>
                    <div class="row">
                        <col-md-12>
                            <div class="wow zoomIn infinite slower" data-wow-delay="4s" style="animation-duration:9s">
                                {{-- Fourth image to appear on the left --}}
                                <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" style="border-radius:100px; height:100px; width:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>
                            <div class="text-center wow zoomIn infinite slower" data-wow-delay="5s" style="animation-duration:9s">
                                {{-- Fifth image to appear in the middle --}}
                                <img src="{{ asset('img/rsz_bricks-brickwall-brickwork-276514.jpg') }}" style="border-radius:100px; height:100px; width:100px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            </div>
                        </col-md-12>
                    </div>
                </div>{{-- Col md 5 --}}

                <div class="col-md-1"></div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 style="color:white">Testimonials</h2>
                        </div>
                        <div class="text-center">
                            <span style="color: rgba(0, 0, 0, 0); border-bottom: 2px solid #097d54">This is it for </span>
                        </div>
                        <br><br>
                        <div>
                            <i class="far fa-quote-left fa-5x" style="background-color:#16171a; color:#097d54; padding:15px;"></i>
                        </div><br><br>
                    </div>
                    <div class="carousel slide" id="recSlider">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 style="color:">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus quo nihil sint natus voluptates, ea deleniti quis atque aut dolorem harum veritatis facere adipisci earum. Nemo cumque dolorum possimus fuga.
                                        </h4>
                                        <div class="media">
                                            <a class="pull-left " href="#">
                                                <img class="media-object" src="{{ asset('img/IMG_0472.jpg') }}" style="border-radius:100px; height:100px; width:100px">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-head" style="color:white; font-weight:bold">Onwe Onyekachi Daniel</h4>
                                                <h4 class="text-muted" >Student</h4>
                                            </div>         
                                        </div>            
                                    </div>
                                </div>
                                <div class="row"></div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus quo nihil sint natus voluptates, ea deleniti quis atque aut dolorem harum veritatis facere adipisci earum. Nemo cumque dolorum possimus fuga.
                                        </h4>
                                        <div class="media">
                                            <a class="pull-left " href="#">
                                                <img class="media-object" src="{{ asset('img/IMG_0472.jpg') }}" style="border-radius:100px; height:100px; width:100px">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-head" style="color:white; font-weight:bold">Onwe Onyekachi Daniel</h4>
                                                <h4 class="text-muted" >Student</h4>
                                            </div>         
                                        </div>            
                                    </div>
                                </div>
                                <div class="row"></div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 >
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus quo nihil sint natus voluptates, ea deleniti quis atque aut dolorem harum veritatis facere adipisci earum. Nemo cumque dolorum possimus fuga.
                                        </h4>
                                        <div class="media">
                                            <a class="pull-left " href="#">
                                                <img class="media-object" src="{{ asset('img/IMG_0472.jpg') }}" style="border-radius:100px; height:100px; width:100px">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="media-head" style="color:white; font-weight:bold">Onwe Onyekachi Daniel</h4>
                                                <h4 class="text-muted" >Student</h4>
                                            </div>         
                                        </div>            
                                    </div>
                                </div>
                                <div class="row"></div>
                            </div>
                        </div>{{-- -Carousel-inner end --}}
                    </div>
                            
                    <div class="carousel slide">  
                        
                        <a href="#recSlider" class="left carousel-control" role="button" data-slide="prev">
                            <i class="far fa-arrow-left" style="background-color:#060708; color:#097d54; "></i>
                        </a>
                        <a href="#recSlider" class="right carousel-control" role="button" data-slide="next">
                            <i class="far fa-arrow-right" style="background-color:#060708; color:#097d54; "></i>                            
                        </a>
                    </div> {{-- Carousel Slider --}}
                </div>{{-- Col md 7 --}}
            </div> {{-- Second Row --}}
        </div>
    </div>{{-- Testimonial Jumbotron --}}
@endsection