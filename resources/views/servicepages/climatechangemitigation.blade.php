@extends('layouts.app')

@section('content')
<style>
    .container {
      background-color: white;
    }
  
    .service__image {
      height: 500px;
      width: 100%;
    }
  
    .links__area p a {
      text-decoration-style: none;
      font-size: 16px;
      color: green;
    }
  
    .links__area p a:hover {
      text-decoration-style: none;
    }
  </style>
  
  <div >
    
    <div class="row">
      <div class="col">
        <img class="card-img-top" src="images/nature.jpg" alt="" class="service__image" style="width: 100%; height:500px">
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1 style="color: green">CLIMATE CHANGE AND MITIGATION</h1>
        <hr>
        <p class="">Our aim is to work toward controlling the factors that affect the climate change in the
          world newest country, the Republic of South Sudan. We need to fight and control air, land and water pollutions
          across the whole nation. Moreover, we need to raise awareness and sensitization so that the citizenry and
          policymakers will be fully aware about the dangers and effects of climate change both in South Sudan and
          worldwide.</p>
        <p>We need to encourage the government of South Sudan and international development partners to develop
          policies to control greenhouse gas emissions and to follow less-emission development. We need to educate the
          general public on the implications of climate change and to come up with best mitigation solutions to tackle it
          in the country. Furthermore, we are working in collaboration with other governmental environmental institutions
          and other humanitarian organizations concern about the dangers of climate change across South Sudan and earth
          wide. Our target is to develop effective framework to protect the Mother Nature and rich biodiversity of South
          Sudan and the world.</p>
        <p>South Sudan is one of the top 5 countries globally at risk of climate change effects. It is highly vulnerable
          as
          the frequent floods are showing and most communities in the country are highly susceptible to the effects of
          climate change. This has rendered some to become climate change refugees, while millions are at constant risk of
          climate change disrupting their lives every few months.
          SSEA offers climate change adaptation and mitigation advice to organizations, institutions and communities.
          SSEA is also in a position to carry out climate change and adaptation Projects
        </p>
  
      </div>
  
      <div class="col-lg-3 col-md-4 col-sm-12 links__area">
        <h3  style="color: green">Quick links</h3>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/06/09/south-sudans-growing-problem-of-deforestation-and-environmental-degradation/">south-sudans-growing-problem-of-deforestation-and-environmental-degradation/</a>
        </p>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/05/30/what-is-the-best-solution-for-floods-crisis-in-south-sudan/">what-is-the-best-solution-for-floods-crisis-in-south-sudan
          </a>
        </p>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/05/20/environmental-crisis-the-hazard-of-water-pollution-in-south-sudan/">environmental-crisis-the-hazard-of-water-pollution-in-south-sudan/
          </a>
        </p>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/05/08/poor-management-of-waste-is-a-major-health-concern-in-south-sudan/">poor-management-of-waste-is-a-major-health-concern-in-south-sudan
          </a>
        </p>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/05/02/how-individual-citizens-can-protect-south-sudans-environment-from-mining-and-oil-disasters/">how-individual-citizens-can-protect-south-sudans-environment-from-mining-and-oil-disasters
          </a>
        </p>
        <hr>
        <p>
          <a href="https://paanluelwel.com/2020/06/26/why-south-sudan-should-embrace-sustainable-socioeconomic-development/">why-south-sudan-should-embrace-sustainable-socioeconomic-development</a>
        </p>
      </div>
    </div>
  <hr>
<br> <br>
  <div class="container">
    <h2 style="color: green; margin-right: 200px" >Related Posts</h2>
    <hr>
    <br>
    <br>
    
  <div class="row">
                
    <!-- Blog post-->
 
    <div class="col-lg-6">
            <div class="card mb-3">
                <a href="#!"><img style="width:100%" src="images/plant.jpg"></a>
                <div class="card-body">
            
                    <h2 class="card-title">Agriculture</h2>
                    <p class="card-text">The importance of agriculture is something that we all know and appreciated as humankind. We
                      know that agriculture is not just only a backbone of the economy</p>
                      <a href="/agri" class="related__btn btn btn-success">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="card mb-3">
              <a href="#!"><img style="width:100%; height:340px" src="images/cooperate.jpg"></a>
              <div class="card-body">
          
                  <h2 class="card-title">Corporate Sustainability Management and Planning</h2>
                  <p class="card-text">We as South Sudan Environmental Advocates (SSEA) appreciate and fully understand
                    corporate sustainability and it is part of our...</p>
                    <a href="/cosumap"class="related__btn btn btn-success">Read More</a>
              </div>
          </div>
      </div>
   

  </div>
</div>

  @endsection