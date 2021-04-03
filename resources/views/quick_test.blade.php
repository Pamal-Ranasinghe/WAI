<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>    
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
        <link rel = "stylesheet" href="css/app.css"/>
        <link rel = "stylesheet" href="css/form.css"/>
    </head>
    <body style="background-color: #fdf4da">
    <!-- <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div> 
    @endif -->


    <div class="content">
        <!-- Nav bar -->
        <nav class="navbar navbar-light bg-light">
          <a class="navbar-brand" href="#">
           <h2 class="nav-header">Quick Personal Test</h2> 
          </a>
        </nav>
        <!--//Nav bar -->
        <!-- body content -->
        <div oncontextmenu='return false' class='snippet-body'>
          <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-11 col-sm-12 col-md-7 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                        <h2 id="heading">Please choose one option</h2>
                        <p>Fill all form field to go to next step</p>
                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active" id="account"><strong>E & I</strong></li>
                                <li id="personal"><strong>T & F</strong></li>
                                <li id="payment"><strong>S & I</strong></li>
                                <li id="confirm"><strong>J & P</strong></li>
                            </ul>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                            </div> <br> <!-- fieldsets -->
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Extroverts and Introverts:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 1 - 4</h2>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                      <div class="col-6">
                                        <label class="fieldlabels">Question One: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question two: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  

                                      </div>
                                      <div class="col-6">

                                        <label class="fieldlabels">Question three: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question four: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                      </div>
                                    </div>
                                </div>

                                <input type="button" name="next" class="next action-button" value="Next" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Thinkers and Feelers:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 2 - 4</h2>
                                        </div>
                                    </div> 
                                    
                                    <div class="row">
                                      <div class="col-6">

                                        <label class="fieldlabels">Question five: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question six: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  

                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Question seven: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  

                                        <label class="fieldlabels">Question eight: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>

                                      </div>
                                    </div>                                   
                                </div>                               
                                
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Sensors and Intuitives:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 3 - 4</h2>
                                        </div>
                                    </div> 
                                    <div class="row">
                                      <div class="col-6">
                                        <label class="fieldlabels">Question nine: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question ten: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  

                                      </div>
                                      <div class="col-6">

                                        <label class="fieldlabels">Question eleven: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question twelve: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  

                                      </div>
                                    </div>  
                                </div> 
                                
                                <input type="button" name="next" class="next action-button" value="Next" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />

                            </fieldset>
                            <fieldset>
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-7">
                                            <h2 class="fs-title">Judgers and Percivers:</h2>
                                        </div>
                                        <div class="col-5">
                                            <h2 class="steps">Step 4 - 4</h2>
                                        </div>
                                    </div> 
                                    <div class="row">
                                      <div class="col-6">

                                        <label class="fieldlabels">Question thirteen: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question fourteen: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select> 

                                      </div>
                                      <div class="col-6">
                                        <label class="fieldlabels">Question fifteen: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select>  
                                        
                                        <label class="fieldlabels">Question sixteen: *</label> 
                                        <select id=" " name=" " id=" " class="drop-boxes" onkeyup="" required>
                                          <option value="cod">Answer One</option>
                                          <option value="van">Answer Two</option>
                                        </select> 

                                      </div>
                                    </div>  
                                </div>

                                <input type="button" name="next" class="action-button" value="View Results" data-toggle="modal" data-target="#exampleModal" />

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>

       <div class="row">
         <div class="col-md-2">

         </div>
         <div class="col-md-8">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed desc-headers" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    MYERS-BRIGGS Explanation
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">                
                 <p style="color:black">The original ideas of the Myers-Briggs Type Indicator (MBTI) were created by Carl Gustav Jung in 1921.
                  The actual test was officially published in 1962. The test was created to help determine which careers would be best for women as they entered the workforce for the first time during WWII.
                  It is a psychological analysis examination that determines a person’s psychological makeup and how they perceive and make decisions.
                  The test is made of four different dichotomies or personality descriptions. One can either be:</p> 
                  <ul style="margin-left:20px">
                    <li>Sensing or Intuitive</li>
                    <li>Introverted or Extroverted</li>
                    <li>Thinking or Feeling</li>
                    <li>Judging or Perceptive</li>
                  </ul> 
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed desc-headers" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Description
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                  Practical, realistic, matter-of-fact. Decisive, quickly move to implement decisions. Organize projects and people to get things done, focus on getting results in the most efficient way possible. Take care of routine details. Have a clear set of logical standards, systematically follow them and want others to also. Forceful in implementing their plans.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed desc-headers" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    References
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  <ul style="margin-left:20px">
                    <li>Personality Test Careers</li>
                    <li>Personality Test Information</li>
                    <li>Personality Tests Explanation</li>
                    <li>Meyers Briggs Test</li>
                  </ul> 
                </div>
              </div>
            </div>
          </div>
         </div>
         <div class="col-md-2">

         </div>
       </div>
      <!-- Display results model -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Results</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Results will appear here
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- // body content -->

      <!--footer-->
      <footer class="site-footer" style="margin-top:50px">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative  to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="#">C</a></li>
                <li><a href="#">UI Design</a></li>
                <li><a href="#">PHP</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">Android</a></li>
                <li><a href="#">Templates</a></li>
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Contribute</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
           <a href="#">Scanfcode</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
  </footer>
      <!--footer -->
    <script src="js/form.js"></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
