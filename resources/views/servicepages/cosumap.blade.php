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
        <img src="images/cooperate.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>CORPORATE SUSTANINABILITY MANAGEMENT AND PLANNING</h1>
        <hr>
        <p>We as South Sudan Environmental Advocates (SSEA) appreciate and fully understand
          corporate sustainability and it is part of our core values which South Sudan
          environmental advocates (SSEA) seriously consider and monitored with great sincerity,
          transparency and accountability on daily basis. It is also a guiding principle in our daily
          activities. We as South Sudan Environmental Advocates (SSEA) aimed to achieve
          corporate sustainability through three means such as transparency, stakeholder
          engagement and thinking ahead. We always value to have open communications with
          our stakeholders which is highly characterized by clarity, accuracy, and honesty and
          sharing of information. Moreover, we too all the times as an organization informed our employees, partners and outside stakeholders and move them to act on matters such as
          waste reduction or energy efficiency. Furthermore, we always envision the future in
          order to generate fresh ideas for practical implementation. This envisioning of the
          future always assists us to come up with new ways of doing things excellently for South
          Sudan Environmental Advocates (SSEA). Our organization endeavor and aim to protect
          the Mother Nature and to improve the quality of lives for South Sudan’s inhabitants and
          humankind as a whole.
        </p>
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
            <img src="images/plant.jpg" alt="">
            <h4 class="related__h4">Agriculture</h4>
            <p class="related__p">
              The importance of agriculture is something that we all know and appreciated as humankind. We
              know that agriculture is not just only a backbone of the economy...
            </p>
            <a href="" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
          <div class="related__posts">
            <img src="images/nature.jpg" alt="">
            <h4 class="related__h4">climate change and mitigation</h4>
            <p class="related__p">
              Our aim is to work toward controlling the factors that affect the climate change in the
              world newest country, the Republic of South Sudan...
            </p> <br>
            <a href="" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
      </div>
      </div>
  </div>
  @endsection