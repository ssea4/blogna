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
        <img src="/static/images/manufacturing.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Manufacturing Industry</h1>
        <hr>
        <p class="wow bounce">We as South Sudan Environmental Advocates (SSEA) love and desire the earth where
              manufacturing industries are not in conflict with Mother Nature and biodiversity in
              whatever way possible on this planet. We want both manufacturing industries and
              Mother Nature to be in amicable state where none of the two is an enemy for the
              extinction of the other. Furthermore, as you know, today we live in a culture that has
              been significantly shaped by the forces of industries. We live in a world that has come to
              place an extreme value on the consumption of material goods. However, the
              environmental cost of this kind of lifestyle is not always consider. To manufacture any
              single good, there are long chain of processes that should also be accounted for when
              considering the environmental cost of anything. Industries are a major contributing
              factors to water pollution across the world. The illegal dumping of contaminated water,
              gases, chemicals, heavy metals or radioactive materials into major water bodies are
              causing daily huge damage to marine life and the entire environment. For instance, the
              steel production, has a big impact on the environment, including air, emissions,
              wastewater contaminants, hazardous wastes and solid wastes. The massive
              environmental impacts from integrated steel mills are from coking and iron-making. So
              we as (SSEA) are working in collaboration with various industries, government
              institutions concerned and environmental organizations to address these challenges
              facing environment from activities of manufacturing industries in South Sudan</p>
              
        
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
            <img src="images/mining.jpg" alt="">
            <h4 class="related__h4">Mining</h4>
            <p class="related__p">
              As you are all aware, South Sudan is one of the richest country in natural resources in
          the Sub-Sahara Africa and the entire Africa as whole. It is also one...
            </p>
            <a href="{% url 'mining' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
          <div class="related__posts">
            <img src="images/Oilandgas.jpg" alt="">
            <h4 class="related__h4">Oil and Gas</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love Mother Nature and
          environmental protection just like the way we value human life. We’re like...
            </p> <br>
            <a href="oilandgas" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
      </div>
      </div>
      
  </div>
  @endsection