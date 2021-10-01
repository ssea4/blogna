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
        <img src="images/Oilandgas.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Oil and gas</h1>
        <hr>
        <p class="wow bounce">We as South Sudan Environmental Advocates (SSEA) love Mother Nature and
          environmental protection just like the way we value human life. We’re like the other
          great and golden organizations such as UNEP and CLENA SUSTAINABLE FUTURE which
          are some of the greatest environmental organizations on the mother earth who are
          doing fantastic work to safeguard nature. We as (SSEA) want to control oil &amp; gas
          pollutions in the motherland and as you know oil &amp; gas production are among the main
          culprits of air pollution and one of the globe’s huge killers according to the United
          Nations. When fossils fuels are burned by power plants, automobiles and industrial
          facilities, they generate toxic gases both to the atmosphere, water bodies and mainland.
          The environmental impacts of the oil industry are correspondingly extensive and
          expansive. Moreover, there are massive quantities of toxic and non-toxic wastes that
          are generated during the extraction, refinement and transportation stages of oil &amp; gas.
          Some of the industry by-products such as volatile organic compounds, nitrogen &amp; sulfur
          compounds and spilled oil can pollute air, water and soil at levels that are harmful to life
          if improperly managed. Climate warming, ocean acidification and sea level rise are worldwide changes that resulted from oil industry’s emissions of greenhouse gases like
          methane and micro-particulate aerosols like black carbon. So we are working tirelessly
          to create public awareness and provide best solutions to control oil &amp; gas pollutions in
          South Sudan. Our country is an oil producing nation and oil need to properly manage to
          avoid health and environmental catastrophes both now and in the future. We are
          working closely with the government, oil companies and environmental organizations
          like CLENA SUSTAINABLE FUTURE to addressed challenges facing Mother Nature in
          South Sudan.</p>
  
        
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
            <img src="/static/images/manufacturing.jpg" alt="">
            <h4 class="related__h4">Manufacturing Industry</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love and desire the earth where
              manufacturing industries are not in conflict with Mother Nature...
            </p>
            <a href="{% url 'manufacturingindustry' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
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
        </div>
      </div>
      </div>
      
  </div>
  @endsection