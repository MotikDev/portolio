<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Motik Dev</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    {{-- -FONT AWESOME FROM TORRENT --}}
    <link href="{{ asset('img/Font Awesome Pro 5.8.2/css/all.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('img/Font Awesome Pro 5.8.2/js/all.js') }}"></script>


    {{-- -ANIMATE.CSS --}}
    <link rel="stylesheet" href="{{ asset('img/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('img/wow/css/libs/animate.css') }}">


    <script src="{{ asset('img/wow/dist/wow.min.js') }}">
    </script>
    <script>
        new WOW().init();
    </script>



    <link rel="icon" href="{{ asset('img/rsz_logo.jpg') }}" type="image/gif" sizes="19x19">

    <script type="text/javascript">

        $(window).scroll(function(){
            sticky = $("nav");
            if ($(window).scrollTop() >= 200){
                sticky.removeClass("navbar-default");
                sticky.addClass("navbar-inverse");
            } else {
                sticky.removeClass("navbar-inverse");
                sticky.addClass("navbar-default");
            }
        });



    </script>
    <style>
        #particles-js {
            width: auto;
            height: auto;
            position: fixed;
            z-index: 10;
            top: 0;
            left: 0
        }

        @media(max-width: 765px) {
            .navbar-collapse{
                background-color:#232927;
                height: 100vh;
            }

            .services-icon, .services-heading{
                text-align: center;
            }
        }
    </style>

    @yield('style')
</head>
<body style="background:black">
    {{--  --}}{{--  --}}{{--  --}}





    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container" style="height:10%; margin-top:1%; margin-bottom:1%">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img src="{{ asset('img/rsz_logo.jpg') }}" alt="Motik Dev Logo" width="100%" height="218%" style="margin-top:-5%"> </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" style="">
                <ul class="nav navbar-nav navbar-right" style="margin-left:6%; font-weight:bold; color:white; ">
                    <li class="active"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">HOME</a> </li>
                    <li href="#"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">PORTFOLIO</a> </li>
                    <li href="#"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">TEAM</a> </li>
                    <li href="#"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">BLOG</a> </li>
                    <li href="#"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">ABOUT US</a> </li>
                    <li href="#"> <a href="#" style="color:white" onMouseOver="this.style.color='#79e0b3'" onMouseOut="this.style.color='#fff'">CONTACT US</a> </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>{{-- .navbar-header --}}
    </nav>
    
    {{-- -Use jumbotron for the next part --}}
    <div class="jumbotron" style="background-image:linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url({{ asset('img/rsz_art-artist-calligraphy-576901.jpg') }}); background-size:cover; background-repeat: no-repeat; filter:grayscale(0.6) opacity(0.9); background-attachment:fixed; height:100vh">
        <div class="container">
            <div class="row" style="vertical-align:middle;">
                <div class="col-md-12">

                    <div class="hidden-lg hidden-md">
                        <br><br>
                    </div>

                    <br><br><br><br>

                    <h1 style="color:white; font-weight:; font-style:italic">Hello</h1>
                    
                    <h1 style="color:white; font-weight:bolder; font-size:7.5vw">We're
                        <span class="txt-type" data-wait="2000" data-words='["Motik Dev.", "Web Designers", "Web Developers", "Online Marketers", "SEO Experts", "Trainers"]'></span>
                    </h1>
                    <div id="particles-js" style="position:fixed; height:100%; width:100%"></div>
                    <h3 style="color:white">Building fast websites and generating online sales for businesses.</h3>

                    <br><br><br><br><br><br>

                    <div class="text-center wow fadeOutDown infinite slower" style="color:#03fca5; vertical-align:middle">
                        <i class="fal fa-angle-double-down fa-4x"></i> 
                    </div>
                        
                        {{-- <i class="fas fa-arrow-down fa-3x"></i> --}}


                </div>        
            </div>
        </div>
    </div>
    







    @yield('content')













    {{-- -Footer --}}

    
    <div class="jumbotron" style="background-color:#0b0e0f; margin-bottom:0px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                
                <div class="col-md-6 text-center" style="color:white; font-weight:bold">
                    <h2 style="font-size:; font-weight:bolder">
                        Let's discuss business <span style="color:#03fca5">!</span>
                    </h2>
                    <h4 style="font-size:; font-weight:bold">
                        info@motik.com.ng
                        <br>
                        +2348118197751
                        <br>
                        +2348124455811
                    </h4>
                </div>

                <div class="col-md-3">
                </div>
            </div>{{-- first row --}}

            <br><br><br>

            <div class="row text-center" style="background-color:#0b0e0f">
                <div class="col-md-3" style="color:white">
                    <h6>
                        Facebook &emsp; Twitter &emsp; Instagram &emsp; LinkedIn                        
                    </h6>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <div style="color:white">
                        <h6>
                            &copy; {{ date('Y') }} Motik Dev., All Rights Reserved.
                        </h6>                        
                    </div>
                </div>
            </div>{{-- Second Row --}}
        </div>{{-- container --}}
    </div>{{-- jumbotron --}}

</body>

<script type="text/javascript" src="{{ asset('img/library/particles.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('img/library/app.js') }}"></script>


    
    <script type="text/javascript">
        const TypeWriter = function(txtElement, words, wait = 2000)
        {
            this.txtElement = txtElement;
            this.words = words;
            this.txt = '';
            this.wordIndex = 0;
            this.wait = parseInt(wait, 10);
            this.type();
            this.isDeleting = false;
        }

        //Type Method
        TypeWriter.prototype.type = function()
        {
            //Current index of word
            const current = this.wordIndex % this.words.length;
            //Get full text of current word
            const fullTxt = this.words[current];
            //Check if deleting
            if(this.isDeleting)
            {
                //Remove char
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                //Add char
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            //Insert txt into element
            this.txtElement.innerHTML = `<span class="txt" style="border-right:0.2em solid #03fca5; color:#03fca5">${this.txt}</span>`;

            //Initial type speed
            let typeSpeed = 20;

            if (this.isDeleting)
            {
                typeSpeed /= 2;
            }

            //If word is complete
            if (!this.isDeleting && this.txt === fullTxt)
            {
                //Pause at the end of each element of the array
                typeSpeed = this.wait;
                //Set delete to true
                this.isDeleting = true;
            }
            else if (this.isDeleting && this.txt === '')
            {
                this.isDeleting = false;
                //Move to the next word
                this.wordIndex++;
                //Pause before start typing
                typeSpeed = 500;
            }
            setTimeout(() => this.type(), typeSpeed);
        }

        //Init on DOM load
        document.addEventListener('DOMContentLoaded', init);

        //Init App
        function init()
        {
            const txtElement = document.querySelector('.txt-type');
            const words = JSON.parse(txtElement.getAttribute('data-words'));
            const wait = txtElement.getAttribute('data-wait');

            //Init TypeWriter
            new TypeWriter(txtElement, words, wait);
        }
        
    </script>
</html>