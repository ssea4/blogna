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
  
  <div class="container service__header">
    <div class="row">
      <div class="col">
        <img src="/static/images/fores.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Forest conservation</h1>
        <hr>
        <p class="wow bounce">
          <h2>Environmental Awareness Campaigns(forestry conservation )</h2>
  
          South Sudan faces a myriad of environmental problems that require both the government and citizen’s active participation to sort them out. These include illegal logging, waste management, wildlife poaching and trafficking and climate change among others.
          
          SSEA is in a position to carry out environmental awareness campaigns both online and on the ground to agitate for better environmental management and sustainable environmental behaviour from citizens, companies and the government.
          
          <h2>Sanitation and hygiene</h2>
          
          Only 55% of people in South Sudan have access to clean water. And even for them the water is expensive and not consistently available. This situation has led to the outbreak of cholera every few months in various parts of the country. The delivery of clean water is a life and death situation.
          
          SSEA is in a position to provide sanitation solutions to communities in a bid to ensure that people have clean water that they can afford and consistently.
          
          <h2>Afforestation and reforestation</h2>
          
          South Sudan forests at risk from deforestation from illegal logging, charcoal burning and foreign firms without licenses cutting down the teak forests.
          
          It is thus imperative for communities to take care of their forest resources by planting more trees where they have been cut down and even where they were none. SSEA is able to carry out afforestation and reforestation projects.</p>
          
      </div>
  
      <div class="col-lg-3 col-md-4 col-sm-0 links__area">
        <h3 class="mt-3 text-success">Quick links</h3>
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
  
    <div class="row">
      <div class="col">
        <h3 class="text-success related__h3">Related Posts</h3>
        <hr>
        <div class="related">
          <div class="related__posts">
            <img src="images/infrastructure.jpg" alt="">
            <h4 class="related__h4">Infrastructure</h4>
            <p class="related__p">
              As South Sudan Environmental Advocates (SSEA). We appreciate and know that the
          environmental benefits of infrastructure...
            </p> <br>
            <a href="{% url 'infrastructure' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
          <div class="related__posts">
            <img src="images/Env.jpg" alt="">
            <h4 class="related__h4">Environment Impact Assessment</h4>
            <p class="related__p">
          There is need for environmental impact assessment in the country, audits, monitoring and
          evaluation to mitigate adverse impacts and enhance...
            </p> <br>
            <a href="{% url 'enviprosi' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
      </div>
      </div>
  </div>
  @endsection