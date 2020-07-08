@extends('layouts.app')

@section('content')
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a class="active" href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('/articles') }}">Posts</a></li>
                                    <li><a href="{{ url('/contacts') }}">Contacts</a></li>
                                    <li><a href="{{ url('/') }}">Login</a></li>
                                    <li><a href="{{ url('/') }}">Register</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
         </div>
    </div>
</header>
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Articles</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-md-8 bg-light text-white">
        <div class="article">
          <div class="art-image">
            <a href="#"><img src="img/1.jpg" style="width: 100%;padding-top: 46px;"></a>
          </div>
          <div class="wrap-text" style="padding-left:26px;padding-bottom: 32.5px;margin-top: 35px;">
            <h6 style="text-align: center;color: #4D4F5C;">Certainty listening no behaviour existence assurance situation
            </h6>
            <span style="display: block;text-align: center;color: #919192;font: Regular 14px/16px Roboto;"> admin <i
                class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                class='fas fa-eye'></i> 301 </span><br>
            <p style="text-align: center;font: Regular 18px/21px Roboto;
            color: #7C7C91;">We denounce with righteous indignation and dislike men who are so beguiled and
              demoralized by the charms of pleasure of the moment, so blinded by desire</p>
            <a href="#">
              <p style="text-align: right;
                font: Regular 18px Roboto;
                color: #FF4141;">READ MORE<i class="fas fa-chevron-right"></i></p>
            </a>
          </div>
        </div>
        <div class="article">
            <div class="art-image">
              <a href="#"><img src="img/1.jpg" style="width: 100%;padding-top: 46px;"></a>
            </div>
            <div class="wrap-text" style="padding-left:26px;padding-bottom: 32.5px;margin-top: 35px;">
              <h6 style="text-align: center;color: #4D4F5C;">Certainty listening no behaviour existence assurance situation
              </h6>
              <span style="display: block;text-align: center;color: #919192;font: Regular 14px/16px Roboto;"> admin <i
                  class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                  class='fas fa-eye'></i> 301 </span><br>
              <p style="text-align: center;font: Regular 18px/21px Roboto;
              color: #7C7C91;">We denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment, so blinded by desire</p>
              <a href="#">
                <p style="text-align: right;
                  font: Regular 18px Roboto;
                  color: #FF4141;">READ MORE<i class="fas fa-chevron-right"></i></p>
              </a>
            </div>
          </div>
          <div class="article">
            <div class="art-image">
              <a href="#"><img src="img/1.jpg" style="width: 100%;padding-top: 46px;"></a>
            </div>
            <div class="wrap-text" style="padding-left:26px;padding-bottom: 32.5px;margin-top: 35px;">
              <h6 style="text-align: center;color: #4D4F5C;">Certainty listening no behaviour existence assurance situation
              </h6>
              <span style="display: block;text-align: center;color: #919192;font: Regular 14px/16px Roboto;"> admin <i
                  class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                  class='fas fa-eye'></i> 301 </span><br>
              <p style="text-align: center;font: Regular 18px/21px Roboto;
              color: #7C7C91;">We denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment, so blinded by desire</p>
              <a href="#">
                <p style="text-align: right;
                  font: Regular 18px Roboto;
                  color: #FF4141;">READ MORE<i class="fas fa-chevron-right"></i></p>
              </a>
            </div>
          </div>
          <div class="article">
            <div class="art-image">
              <a href="#"><img src="img/1.jpg" style="width: 100%;padding-top: 46px;"></a>
            </div>
            <div class="wrap-text" style="padding-left:26px;padding-bottom: 32.5px;margin-top: 35px;">
              <h6 style="text-align: center;color: #4D4F5C;">Certainty listening no behaviour existence assurance situation
              </h6>
              <span style="display: block;text-align: center;color: #919192;font: Regular 14px/16px Roboto;"> admin <i
                  class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                  class='fas fa-eye'></i> 301 </span><br>
              <p style="text-align: center;font: Regular 18px/21px Roboto;
              color: #7C7C91;">We denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment, so blinded by desire</p>
              <a href="#">
                <p style="text-align: right;
                  font: Regular 18px Roboto;
                  color: #FF4141;">READ MORE<i class="fas fa-chevron-right"></i></p>
              </a>
            </div>
          </div>
          <div class="article">
            <div class="art-image">
              <a href="#"><img src="img/1.jpg" style="width: 100%;padding-top: 46px;"></a>
            </div>
            <div class="wrap-text" style="padding-left:26px;padding-bottom: 32.5px;margin-top: 35px;">
              <h6 style="text-align: center;color: #4D4F5C;">Certainty listening no behaviour existence assurance situation
              </h6>
              <span style="display: block;text-align: center;color: #919192;font: Regular 14px/16px Roboto;"> admin <i
                  class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                  class='fas fa-eye'></i> 301 </span><br>
              <p style="text-align: center;font: Regular 18px/21px Roboto;
              color: #7C7C91;">We denounce with righteous indignation and dislike men who are so beguiled and
                demoralized by the charms of pleasure of the moment, so blinded by desire</p>
              <a href="#">
                <p style="text-align: right;
                  font: Regular 18px Roboto;
                  color: #FF4141;">READ MORE<i class="fas fa-chevron-right"></i></p>
              </a>
            </div>
          </div>
      </div>
      <div class="col-md-4 bg-info bg-light text-white">
        <p style="width: 142px;
        height: 21px;
        text-align: center;
        font: Medium 18px/21px Roboto;
        letter-spacing: 0;
        color: #FF4141;margin-top: 46px;">Popular Articles</p>
        <hr>
        <div class="row" style="margin-bottom: 14.79px;">
          <div class="col-sm-4 bg-warning text-white" style="width: 141px;
          height: 90px;padding-left: 0;">
            <a href="#"><img src="img/1.jpg" style="width: 141px;
            height: 90px;"></a>
          </div>
          <div class="col-sm-8 bg-light text-white" style="
          height: 90px;
          width: 276px;
      ">
            <p style="width: 246px;
            height: 42px;
            font: Regular 18px Roboto;
            color: #4D4F5C;">Certainty listening no behavior existence assurance situation</p>
            <p style="display: block;text-align: left;
            font:  9px Roboto;
            padding-top: 0;
            padding-right: 38.48px;
            color: #919192;
   height: 11px;"> Author <i class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                class='fas fa-eye'></i> 301 </p><br>
          </div>
        </div>
        <div class="row" style="margin-bottom: 14.79px;">
          <div class="col-sm-4 bg-warning text-white" style="width: 141px;
          height: 90px;padding-left: 0;">
            <a href="#"><img src="img/2.jpg" style="width: 141px;
            height: 90px;"></a>
          </div>
          <div class="col-sm-8 bg-light text-white" style="
        height: 90px;
        width: 276px;
    ">
            <p style="width: 246px;
          height: 42px;
          font: Regular 18px Roboto;
          color: #4D4F5C;">Certainty listening no behavior existence assurance situation</p>
            <p style="display: block;text-align: left;
          font:  9px Roboto;
          padding-top: 0;
          padding-right: 38.48px;
          color: #919192;
   height: 11px;"> Author <i class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                class='fas fa-eye'></i> 301 </p><br>
          </div>
        </div>
        <div class="row" style="margin-bottom: 14.79px;">
          <div class="col-sm-4 bg-warning text-white" style="width: 141px;
          height: 90px;padding-left: 0;">
            <a href="#"><img src="img/3.jpg" style="width: 141px;
            height: 90px;"></a>
          </div>
          <div class="col-sm-8 bg-light text-white" style="
         height: 90px;
         width: 276px;">
            <p style="width: 246px;
           height: 42px;
           font: Regular 18px Roboto;
           color: #4D4F5C;">Certainty listening no behavior existence assurance situation</p>
            <p style="display: block;text-align: left;
           font:  9px Roboto;
           padding-top: 0;
           padding-right: 38.48px;
           color: #919192;
   height: 11px;"> Author <i class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                class='fas fa-eye'></i> 301 </p><br>
          </div>
        </div>
        <div class="row" style="margin-bottom: 14.79px;">
          <div class="col-sm-4 bg-warning text-white" style="width: 141px;
          height: 90px;padding-left: 0;">
            <a href="#"><img src="img/1.jpg" style="width: 141px;
            height: 90px;"></a></div>
          <div class="col-sm-8 bg-light text-white" style="
   height: 90px;
   width: 276px;
   ">
            <p style="width: 246px;
    height: 42px;
    font: Regular 18px Roboto;
    color: #4D4F5C;">Certainty listening no behavior existence assurance situation</p>
            <p style="display: block;text-align: left;
    font:  9px Roboto;
    padding-top: 0;
    padding-right: 38.48px;
    color: #919192;
   height: 11px;"> Author <i class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
                class='fas fa-eye'></i> 301 </p><br>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 bg-warning text-white" style="width: 141px;
          height: 90px;padding-left: 0;">
            <a href="#"><img src="img/2.jpg" style="width: 141px;
            height: 90px;"></a>
          </div>
          <div class="col-sm-8 bg-light text-white" style="
           height: 90px;
           width: 276px;">
            <p class="text-transparent" style="width: 246px;
           height: 42px;
           font: Regular 18px Roboto;
           color: #4D4F5C;">Certainty listening no behavior existence assurance situation</p>
            <p style="display: block;text-align: left;
           font:  9px Roboto;
           padding-top: 0;
           padding-right: 38.48px;
           color: #919192;
            height: 11px;"> Author <i class="fas fa-calendar-day"></i> jul / 15 /2018 <i class='fas fa-comments'></i> 01 <i
           class='fas fa-eye'></i> 301 </p><br>
          </div>
        </div>


  <!-- Post Content
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>

          <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>

          <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>

          <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>

          <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>

          <h2 class="section-heading">The Final Frontier</h2>

          <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

          <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>

          <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>

          <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>

          <h2 class="section-heading">Reaching for the Stars</h2>

          <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

          <a href="#">
            <img class="img-fluid" src="img/post-sample-image.jpg" alt="">
          </a>
          <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>

          <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>

          <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

          <p>Placeholder text by
            <a href="http://spaceipsum.com/">Space Ipsum</a>. Photographs by
            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>.</p>
        </div>
      </div>
    </div>
  </article>

  <hr> -->

@endsection

