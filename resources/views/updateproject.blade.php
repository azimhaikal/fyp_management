<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>FYP Management System</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/font-awesome.css;')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{URL::asset('assets/css/lightbox.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="{{URL::asset('assets/images/klassy-logo.png')}}" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="/" class="active">Home</a></li>

                            <li>
                                @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                            <li class=""><a href="/redirect">View Project</a></li>
                            <li><a href="/create"><button >Create Project</button></a></li>
                            <li>
                                <x-app-layout>  
                                </x-app-layout>
                            </li>
                            
                            @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                            @endif
                            @endauth
                            </div>
                            @endif
                        </li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Reservation Us Area Starts ***** -->
    <section class="section" id="reservation">
        <div class="container">
            <div class="row">

                <!--TABLE RESERVATION /////////////////////////////////////////////////////////////////////-->

                <div class="col-lg-6">
                    <div class="contact-form">
                    <form id="contact" action="/add" method="POST">
                            @csrf
                          <div class="row">
                            <div class="col-lg-12">
                                <h4>Update Project</h4>
                            </div>
                            <div class="col-lg-12">
                                <h4 align=center>{{$www['projectname']}}</h4>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <div><label for="student">Student:</label></div>
                                <input type=text name="student" value="{{$www['student']}}" id="student">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <fieldset>
                                <div><label for="sv">Supervisor:</label></div>
                                <select name="supervisor" id="sv" required>
                                    <option value="Azlan Yusof" @if($www['supervisor'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                                    <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['supervisor'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                                    <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['supervisor'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                                    <option value="Raja Feninferina Raja Azman" @if($www['supervisor'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                                    <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['supervisor'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['supervisor'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                                    <option value="Lim Kok Cheng, Ts." @if($www['supervisor'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                                    <option value="Moamin A Mahmoud, Dr." @if($www['supervisor'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                                    <option value="Naziffa Raha Binti Md Nasir" @if($www['supervisor'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                                    <option value="Ramona Binti Ramli, Ts." @if($www['supervisor'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                                    <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['supervisor'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                                    <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['supervisor'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                                    <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['supervisor'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Zailani Bte. Ibrahim, Ts." @if($www['supervisor'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                                    <option value="Azhana Ahmad, Ts. Dr." @if($www['supervisor'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <div><label for="exam1">Examiner 1:</label></div>
                                <select name="examiner1" id="exam1" required>
                                    <option value="Azlan Yusof" @if($www['examiner1'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                                    <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['examiner1'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                                    <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['examiner1'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                                    <option value="Raja Feninferina Raja Azman" @if($www['examiner1'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                                    <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['examiner1'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['examiner1'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                                    <option value="Lim Kok Cheng, Ts." @if($www['examiner1'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                                    <option value="Moamin A Mahmoud, Dr." @if($www['examiner1'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                                    <option value="Naziffa Raha Binti Md Nasir" @if($www['examiner1'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                                    <option value="Ramona Binti Ramli, Ts." @if($www['examiner1'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                                    <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['examiner1'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                                    <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['examiner1'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                                    <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['examiner1'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Zailani Bte. Ibrahim, Ts." @if($www['examiner1'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                                    <option value="Azhana Ahmad, Ts. Dr." @if($www['examiner1'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <div><label for="exam2">Examiner 2:</label></div>
                                <select name="examiner2" id="exam2" required>
                                    <option value="Azlan Yusof" @if($www['examiner2'] == "Azlan Yusof") selected @endif>Azlan Yusof</option>
                                    <option value="Badariah Bte. Solemon, Assoc. Prof. Dr." @if($www['examiner2'] == "Badariah Bte. Solemon, Assoc. Prof. Dr.") selected @endif>Badariah Bte. Solemon, Assoc. Prof. Dr.</option>
                                    <option value="Faridah Hani Bte Mohamed Salleh, Ts. Dr." @if($www['examiner2'] == "Faridah Hani Bte Mohamed Salleh, Ts. Dr.") selected @endif>Faridah Hani Bte Mohamed Salleh, Ts. Dr.</option>
                                    <option value="Raja Feninferina Raja Azman" @if($www['examiner2'] == "Raja Feninferina Raja Azman") selected @endif>Raja Feninferina Raja Azman</option>
                                    <option value="Hazleen Bte Aris, Assoc. Prof. Ts. Dr." @if($www['examiner2'] == "Hazleen Bte Aris, Assoc. Prof. Ts. Dr.") selected @endif>Hazleen Bte Aris, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Mohd Hazli Bin Mohamed Zabil, Ts. Dr." @if($www['examiner2'] == "Mohd Hazli Bin Mohamed Zabil, Ts. Dr.") selected @endif>Mohd Hazli Bin Mohamed Zabil, Ts. Dr.</option>
                                    <option value="Lim Kok Cheng, Ts." @if($www['examiner2'] == "Lim Kok Cheng, Ts.") selected @endif>Lim Kok Cheng, Ts.</option>
                                    <option value="Moamin A Mahmoud, Dr." @if($www['examiner2'] == "Moamin A Mahmoud, Dr.") selected @endif>Moamin A Mahmoud, Dr.</option>
                                    <option value="Naziffa Raha Binti Md Nasir" @if($www['examiner2'] == "Naziffa Raha Binti Md Nasir") selected @endif>Naziffa Raha Binti Md Nasir</option>
                                    <option value="Ramona Binti Ramli, Ts." @if($www['examiner2'] == "Ramona Binti Ramli, Ts.") selected @endif>Ramona Binti Ramli, Ts.</option>
                                    <option value="Muhammad Sufyian Bin Mohd Azmi, Ts." @if($www['examiner2'] == "Muhammad Sufyian Bin Mohd Azmi, Ts.") selected @endif>Muhammad Sufyian Bin Mohd Azmi, Ts.</option>
                                    <option value="Suhaimi Bin Ab. Rahman, Ts. Dr." @if($www['examiner2'] == "Suhaimi Bin Ab. Rahman, Ts. Dr.") selected @endif>Suhaimi Bin Ab. Rahman, Ts. Dr.</option>
                                    <option value="Yunus Bin Yusoff, Assoc. Prof. Ts. Dr." @if($www['examiner2'] == "Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.") selected @endif>Yunus Bin Yusoff, Assoc. Prof. Ts. Dr.</option>
                                    <option value="Zailani Bte. Ibrahim, Ts." @if($www['examiner2'] == "Zailani Bte. Ibrahim, Ts.") selected @endif>Zailani Bte. Ibrahim, Ts.</option>
                                    <option value="Azhana Ahmad, Ts. Dr." @if($www['examiner2'] == "Azhana Ahmad, Ts. Dr.") selected @endif>Azhana Ahmad, Ts. Dr.</option>
                                </select>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input type=hidden name="projectname" value="{{$www['projectname']}}">  
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button-icon">Create</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!-- ***** Reservation Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100009209651242"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/soseji01"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/azim-haikal-748bb9168/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/azimhaikal01/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="/"><img src="{{URL::asset('assets/images/Universiti_Tenaga_Nasional_Logo.png')}}" width="150" height="100" alt="Uniten"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>Azim Haikal Bin Ibrahim
                        
                        <br>SW0107276</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{URL::asset('assets/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{URL::asset('assets/js/popper.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{URL::asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{URL::asset('assets/js/accordions.js')}}"></script>
    <script src="{{URL::asset('assets/js/datepicker.js')}}"></script>
    <script src="{{URL::asset('assets/js/scrollreveal.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/imgfix.min.js')}}"></script> 
    <script src="{{URL::asset('assets/js/slick.js')}}"></script> 
    <script src="{{URL::asset('assets/js/lightbox.js')}}"></script> 
    <script src="{{URL::asset('assets/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{URL::asset('assets/js/custom.js')}}"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>