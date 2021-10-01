@extends('layouts.app')
    @section('content')

   <br>
   <br>
   <br>
   <br>
   <br>
  <main id="main">

    <!-- ======= Why Us Section ======= -->
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-success" style="margin-left:500px">About us</h4>
          <hr>
          <p>
            We are dedicated to environmental protection that foster a sustainable future and lead to social and
            economic improvement in South Sudan. We are one of the leading environmental organizations in the
            world newest country. We advocate for environmental protection and solid waste management.
            South Sudan environmental Advocates (SSEA) is a community based organization in the republic of
            South Sudan that advocate for environmental issues, social, health and safety of mother-nature by
            addressing all kind of environmental conservation and challenges. South Sudan Environmental
            Advocates (SSEA) is headquartered in Juba city in the republic of South Sudan.
            SSEA provides environmental advocacy, awareness and social governance services to the communities
            of South Sudan, governments, institutions, hospitals and Energy sectors, Oil and Gas, mining,
            infrastructure, agriculture and manufacturing industry. SSEA has been advocating for environmental
            issues and providing technical support in environmental protection and social performance within South
            Sudan and beyond.
          </p>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-success" style="margin-left:500px">Our History</h4>
          <hr>
        </div>
      </div>
    
      <div class="row">
        <div class="col">
          <p>
            South Sudan Environmental Advocates is community based organization in South Sudan that
            advocate and is committed to improving and empowering the lives of people particularly they
            youth, women and the general public in the social, economic, cultural and environmental
            sustainability settings by creating an enabling environment for the community participation in
            developmental initiatives.
          </p>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-success" style="margin-left:500px">What we do</h4>
          <hr>
        </div>
      </div>
    
      <div class="row">
        <div class="col">
          <ul>
            <li>
              To practically strength, environmental capacity building and advocacy in the society
            </li>
            <li>
              Environment, clean water and sanitation management (environment sustainable goals)
            </li>
            <li>
              To advocate &amp; train the community on environmental sustainability
            </li>
            <li>
              To strengthen partnership in developmental initiatives with other like-minded
              organizations I.e. NGOS, UN agencies, government, learning institutions and religious
              organizations
            </li>
            <li>
              Locally networked environmental entrepreneurship skills through community based
              organizations
            </li>
            <li>
              Clean energy development such as sun power
            </li>
            <li>
              Protection of water bodies from pollution across the country
            </li>
            <li>
              Protection of environment from oil disasters and pollution in South Sudan
            </li>
          </ul>
        </div>
      </div>
    
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-success" style="margin-left:500px">Meet the team</h4>
          <hr>
        </div>
      </div>
    
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
          <div class="card" style="width: 13rem" ;>
            <img src="images/dot1.jpg" class="card-img-top" alt="...">
          </div>
          <div class="text-overlay">
            <h5>Phillip Dot</h5>
            <small>
              Philip Ayuen Dot is a South Sudanese environmental <br> scientist and Founder of South Sudan
              Environmental Advocates<br>
              <a href="{% url 'biography' %}" class="btn btn-success biography__btn">Read more</a>
            </small>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2">
          <div class="card" style="width: 13rem" ;>
            <img src="images/DAVID2.jpg" class="card-img-top" alt="..." >
          </div>
          <div class="text-overlay">
            <h5>Beek Mabior</h5>
            <p>
              <small>
                Beek Mabior is the National Project Coordinator of South Sudan Environmental Advocates (SSEA)
              </small>
            </p>
            <a href="{% url 'biography2' %}" class="btn btn-success biography__btn">Read more</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="text-success" style="margin-left:500px">Our partners</h4>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <img src="images/clena.png" alt="" style="width: 100px; height:100px; object-fit: contain; float: right; margin-right: 150px;">
        </div>
    
        <div class="col">
          <p>CLENA hugs nature, takes man in hand together to create a sustainable future today and tomorrow</p>
          <a href="http://csfuture.se/" class="btn btn-success">Visit site</a>
        </div>
      </div>
    </div>
    </section><!-- End Why Us Section -->
    @endsection

    