@extends('frontend.layouts.main')
@section('main-container')
  <!--Hero section -->
  <div class="hero_section" id="hero_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col=ms-12 col-xs-12">
          <section class="home" id="home">
            <div class="max-width">
                <div class="home-content">
                    <div class="text-1">Hello, my name is</div>
                    <div class="text-2">Khushboo Shakya</div>
                    <div class="text-3">And I'm a <span class="typing"></span></div>
                    <a href="#portfolio_section">View My Work</a>
                </div>
            </div>
        </section>
        </div>
        <div class="col-lg-6 col-md-6 col=ms-12 col-xs-12">
          <center>
            <img src="{{url('frontend/Images/Khushboo.jpeg')}}"/>
          </center>
        </div>
      </div>
    </div>
  </div>

  <!--About Us-->
  <div class="about_section" id="about_section">
    <div class="container">
      <div class="row n-0">
        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12">
          <h2 class="heading">Any type of question<br>& Discussion</h2>
          <div>
            <h5 class="lets_talk">Let's Talk <span style="color:crimson">-------------------</span></h5>
          </div>
          <h4 id="info_gmail">khushishakya0410@gmail.com</h4>
          <div class="contact_info">
            <h5>Skype : Khushboo0410</h5>
            <h5>Contact Number : +91 6395263423</h5>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 about_me_right_section">
          <h2 id="heading">About Me</h2>
          <hr>
          <p id="txt">My name is Khushboo Shakya. I'm a Btech CSE student at Lovely Professional University .
            I am a full-stack web developer who is passionate about creating simple, responsive, and seamless online experiences.<p>
          <table class="table">
            <tr>
              <td>Name</td>
              <td>:</td>
              <td>Khushboo Shakya</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td>khushishakya0410@gmail.com</td>
            </tr>
            <!-- <tr>
              <td>Website</td>
              <td>:</td>
              <td>www.dummy.com</td>
            </tr> -->
          </table>
          <button class="btn btn-light btn-sm animate_animated">
            Download CV
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- My Skills -->
  <div class="skills_section" id="skills_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 skills_section_left_section">
          <div>
            <h1 class="text-white">My Skills <span style="color: crimson;">.</span></h1>
            <hr>
            <p>You can see my skills in which I have expertise<span style="color: crimson;">.</span></p>
            <div class="social_media_icons">
              <ul class="list_group">
                <li class="list-group-item">
                  <a>Problem Solving Skills</a>
                </li>
                <li class="list-group-item">
                  <a>Teamwork</a>
                </li>
                <li class="list-group-item">
                  <a>Adaptability</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-ms-12 col-xs-12 skills_section_right_section">
          <div>
            <div class="each_skills">
              <span>HTML</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 120px;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">25%</div>
              </div>
            </div>

            <div class="each_skills">
              <span>C++</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 200px;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">25%</div>
              </div>
            </div>

            <div class="each_skills">
              <span>CSS</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 120px;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">25%</div>
              </div>
            </div>

            <div class="each_skills">
              <span>JavaScript</span>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 120px;" aria-valuenow="25" aria-valuemin="0"
                  aria-valuemax="100">25%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- My Portfolio -->
  <div class="portfolio_section" id="portfolio_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 class="text-white text-center"> My Portfolio<span style="color: crimson;">.</span></h1>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <nav class="d-flex justify-content-center">
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active text-white" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                role="tab" aria-controls="nav-home" aria-selected="true">HTML & CSS</a>
              <a class="nav-item nav-link text-white" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                role="tab" aria-controls="nav-profile" aria-selected="false">WordPress</a>
            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="card-columns">
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/html/html1.png')}}" />
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/html/html2.png')}}" />
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/html/html3.png')}}" />
                </div>
                <div class="card border-0 padding-0">
                        <img class="card-img-top" src="{{url('frontend/Images/portfolio/html/html4.png')}}" />
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/html/html5.png')}}" />
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <div class="card-columns">
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/wordpress/WordPress1.png')}}" />
                </div>
                <div class="card border-0 padding-0">
                  <img class="card-img-top" src="{{url('frontend/Images/portfolio/wordpress/WordPress2.png')}}" />
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <!-- Blogs -->
  <div class="blogs_section" id="blogs_section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h1 id="heading" class="text-white text-center">Blogs<span style="color: crimson;">.</span></h1>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="card animate_animated border-0">
            <div class="card-header border-0 p-0">
              <img src="{{url('frontend/Images/blogs/1.jpg')}}" width="100%" />
            </div>
            <div class="card-body">
              <h3 class="title">Hosting Platforms</h3>
              <p class="date"> Post On <span>12.10.21 </span> by <span>Khushboo Shakya</span></p>
              <p class="txt">Top 10 free hosting platforms.</p>
              <a class="text-decoration-none read_more" href="https://medium.com/@khushbooshakya/top-10-free-hosting-platforms-aa7950dd54a3">Read More</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
          <div class="card animate_animated border-0">
            <div class="card-header border-0 p-0">
              <img src="{{url('frontend/Images/blogs/2.jpg')}}" width="100%" />
            </div>
            <div class="card-body">
              <h3 class="title">Web Designing</h3>
              <p class="date"> Post On <span>05.11.20 </span> by <span>Khushboo Shakya</span></p>
              <p class="txt">How to start web designing?
                </p>
              <a class="text-decoration-none read_more" href="#">Read More</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Content Section -->
  <div class="contact_section" id="contact_section">
    <div class="container">
      <div class="row m-0">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <h3 class="heading">Contact me<span style="color: crimson;">.</span></h3>
            <hr>
            <p class="txt">Feel free to contact with me.</p>
            <form>
              <div class="form-group">
                <input class="form-control" placeholder="Your Name" type="text" />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Your Email" type="email" />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Subject" type="text" />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Type Your Message" />
                </textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-light animate_animated" type="submit"> Submit</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div>
            <ul class="list-unstyled">
              <li>
                <i class="fa fa-envelope-o"> khushishakya0410@gmail.com</i>
              </li>
              <li>
                <i class="fa fa-phone"> +91 6395263423</i>
              </li>
            </ul>
          </div>
          <div class="map_wrapper">

            <div class="mapouter">
              <div class="gmap_canvas"><iframe width="525" height="327" id="gmap_canvas"
                  src="https://maps.google.com/maps?q=206243%20,Auraiya,India&t=&z=13&ie=UTF8&iwloc=&output=embed"
                  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                  href="https://yt2.org">yt2</a><br>
                <style>
                  .mapouter {
                    position: relative;
                    text-align: right;
                    height: 327px;
                    width: 525px;
                  }
                </style><a href="https://www.embedgooglemap.net">google maps web pages</a>
                <style>
                  .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 327px;
                    width: 525px;
                  }
                </style>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

 @endsection