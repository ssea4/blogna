@extends('layouts.app')

@section('content')
<br>
<!-- header -->
<div class="container-fluid header">
  <div class="row">
    <div class="col-xl-12 col-sm-6 col-md-8">

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>Solar Energy has become a major turnover in the lives of many ...</h2>
                <a href="solar" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/estuary.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>life full of adventure mitigating close environmental substance</h2>
                <a href="waterbodyprotection" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/wildbeest.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>If we can teach people about wildlife, they will be touched. Share my wildlife with me. Because
                  humans want to save things that they love</h2>
                <a href="wildlife" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/Industry.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>Continuous improvement is better than delayed perfection.</h2>
                <a href="manufacturingindustry" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/forest.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>The forest is not a resource for us, it is life itself. It is the only place for us to live.</h2>
                <a href="forestryconservation" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/mining.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>The mining industry might make wealth and power for a few men and women, but the many would always be
                  smashed and battered beneath its giant treads.</h2>
                <a href="mining" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>


          <div class="carousel-item">
            <img src="images/w-body.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>This “water quotes” collection will inspire you to keep moving towards your goals and dreams no
                  matter what obstacles stand in your path.</h2>
                <a href="waterbodyprotection" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/wildbeest.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>Over the past few years, more and more celebrities have thrown their backing behind environmental
                  issues.</h2>
                <a href="climatechangemitigation" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/cooperate.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>Let's always take care of our environment.</h2>
                <a href="cosumap" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/Env.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>There is need for environmental impact assessment in the country, audits, monitoring and
                  evaluation to mitigate adverse impacts and enhance environmental benefits.</h2>
                <a href="enviprosi" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/Solid Waste.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>It is good to realize that if love and peace can prevail on earth, and if we can teach our children
                  to honor nature’s gifts
                  , the joys and beauties of the outdoors will be here forever. </h2>
                <a href="solidwastemanagement" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="images/manufacturing.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>Manufactured Products is an art that is designed...</h2>
                <a href="manufacturingindustry" class="btn btn-success">Read More..</a>
              </div>
            </div>
          </div>



          <div class="carousel-item">
            <img src="images/infrastructures.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="overlay">
                <h2>The distinction between the world of commerce and that of "culture" quickly became the
                  distinction between
                  infrastructure and superstructure, with the former clearly determining the latter.</h2>
                <a href="infrastructure" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>



        </div>
        <a class="carousel-control-prev" style="z-index: 1000;" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" style="z-index: 1000;" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- end of header -->
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" >

      <div class="row no-gutters">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" style="margin-bottom: 30px; margin-top: 50px"></div>
        <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center">
            <h3 style="color: green">South Sudan Environmental Advocates</h3>
           
         <p>  We are dedicated to environmental protection that foster a sustainable future and lead to social and economic improvement in South Sudan. We are one of the leading environmental organizations in the world newest country. We advocate for environmental protection and solid waste management. South Sudan environmental Advocates (SSEA) is a community based organization in the republic of South Sudan that advocate for environmental issues, social, health and safety of mother-nature by addressing all kind of environmental conservation and challenges. South Sudan Environmental Advocates (SSEA) is headquartered in Juba city in the republic of South Sudan. SSEA provides environmental advocacy, awareness and social governance services to the communities of South Sudan, governments, institutions, hospitals and Energy sectors, Oil and Gas, mining, infrastructure, agriculture and manufacturing industry. SSEA has been advocating for environmental issues and providing technical support in environmental protection and social performance within South Sudan and beyond.
         </p>
         <div class="">
          <a href="#" class="btn-learn-more">Read More</a>
      </div>

          </div><!-- End .content-->
        </div>
      </div>
     

    </div>
  </section><!-- End About Section -->



<!-- vision -->
<section id="vision" class="vision" style="margin-top: -110px; margin-bottom: -50px">
<div class="container">
<br>
<br>
<div class="row">
<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title" style="color: green">Our Vision</h1>
      <p class="card-text">A clean, healthy and well protected environment supporting a sustainable society and economy.</p>
      <br>
    </div>
  </div>
</div>

<div class="col-sm-6">
  <div class="card">
    <div class="card-body">
      <h1 class="card-title" style="color: green; ">Our Mission</h1>
      <p class="card-text" style="margin-bottom: 17px">Prevent, restore and protect environment by reducing degradation and building green, healthy
      and sustainable ecosystem in the communities by empowering the society.</p>
      
    </div>
  </div>
</div>
</div>
<br>
<br>

</div>
</section>
<!-- end of vision -->



  <div class="container" style="margin-bottom: 150px">
      <h2 style=" color: green" >OUR FOUNDERS</h2>
      <hr style="color: green; border: 2px solid">
      <div class="row">
          <div class="col-md-3 col-sm-6">
              <div class="our-founders">
                  <div class="pic">
                      <img src="images/ricardo (1).jpg">
                  </div>
               <h3 class="title">Rickard Sandberg </h3>
               <h6><b>CEO & Leading Expert</b></h6>
                  <span class="post">Rickard Sandberg is a co-founder of South Sudan Environmental Advocates, Rickard was born in 1963 and has a Master Of  Civil Engineering. He has an unique knowledge and more than 34 years experience as a lead environmental manager, including sustainable development, lead manager in development urban planning,  and infrastructure projects.</span>
                  <div class="">
                      <a href="/biography2" class="btn btn-success">Read More</a>
                  </div>
              </div>
          </div>
   
          <div class="col-md-3 col-sm-6">
              <div class="our-founders">
                  <div class="pic">
                      <img src="images/dot1.jpg">
                  </div>
                  <h3 class="title">Philip Dot</h3>
                  <h6><b>Vice CEO & Country Director</b></h6>
                  <span class="post">Philip Ayuen Dot is a co-founder of South Sudan Environmental Advocates, he is a South Sudanese Environmental Specialist with nearly 7 years of experience of monitoring & Evaluation environmental sustainability,sustainable energy development,accident prevention policy procedures and maintaining safe working methods. Excellent technical and project management</span>
                  <div class="">
                    <a href="/biography" class="btn btn-success">Read More</a>
                </div>
              </div>
          </div>
  
          <div class="col-md-3 col-sm-6" >
              <div class="our-founders">
                  <div class="pic">
                      <img src="images/mercy (4).jpg">
                  </div>
                  <h3 class="title">Mercy Mwende</h3>
                  <h6><b>Director of Programs & Projects</b></h6>
                  <span class="post">Mercy Mwende Kyalo is a co-founder of South Sudan Environmental Advocates, she is a passionate environmentalist, writer and social activist. Mwende has a
Bachelor’s Degree in Environmental Science from Kenyatta University and is currently pursuing
a Masters of Arts in Environmental Law from the University of Nairobi, Kenya.


</span>
<br>
<div class="">
    <a href="/biography3" class="btn btn-success">Read More</a>
</div>
              </div>
          </div>
          <div class="col-md-3 col-sm-6">
              <div class="our-founders">
                  <div class="pic">
                      <img src="images/DAVID2.jpg">
                  </div>
                  <h3 class="title">David Beek</h3>
                  <h6><b>Communication and Marketing Director</b></h6>
                  <span class="post">
                    David Beek is a co-founder of South Sudan Environmental Advocates, he is the director of communication & marketing of South Sudan Environmental Advocates. He is a researcher and environmental advocate. Moreover, He is an independent opinion writer on social, political, environmental and economic topics in South Sudan </span>
                  <br>
                    <div class="">
                    <a href="/biography1" class="btn btn-success">Read More</a>
                </div>
              </div>
          </div>
  
      </div>
  </div>

 
@endsection

   