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
        <img src="/static/images/plant.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Agriculture</h1>
        <hr>
        <p class="wow bounce">The importance of agriculture is something that we all know and appreciated as humankind. We
          know that agriculture is not just only a backbone of the economy but also a backbone of life
          worldwide. We as South Sudan Environmental Advocates (SSEA) are working to promote and
          raise awareness in the country. We are supporting agricultural activities across the nation.
          Environmental protection goes hand in hand with agricultural sustainability and growth in any
          country globally. We know that agriculture plays a critical role in the entire life of a given
          economy. Moreover, agriculture is the backbone of the economic system of any given nation.
          Additionally, agriculture help in food security and raw materials, agriculture also provides
          employment opportunities to huge percentage of the population in the country. We as South
          Sudan Environmental Advocates (SSEA) know that for very many years, agriculture has been
          associated with production of crucial food crops and sustaining of livelihoods across South
          Sudan. We as South Sudan Environmental Advocates (SSEA) are working in collaboration with
          other organizations such as CLENA SUSTAINABLE FUTURE, FAO and Ministry of Agriculture of the
          Republic of South Sudan to promote excellent modern agricultural techniques, knowledge and
          skills to the farmers and general public to ensure food security across the country. South Sudan
          is a country that is endowed with the best fertile soil and lovely weather for agriculture in Africa
          and we need her to takes advantage of her agricultural potential and fight food insecurity in the
          country and becomes a breadbasket in Africa.
        </p>
  
      </div>
  
      <div class="col-lg-3 col-md-4 col-sm-0 links__area">
        <h3 class="mt-3 text-success">Quick links</h3>
        <hr>
        <p><a
            href="https://ssnewsnow.com/opinion-industrialization-is-crucial-for-south-sudans-national-development/">industrialization-is-crucial-for-south-sudans-national-development</a>
        </p>
        <hr>
        <p>
          <a
            href="https://ssnewsnow.com/opinion-why-poverty-while-we-have-billions-worth-natural-resources/">why-poverty-while-we-have-billions-worth-natural-resources</a>
        </p>
        <hr>
        <p>
          <a
            href="https://paanluelwel.com/2020/08/12/agriculture-is-vital-for-south-sudans-national-development-and-food-security">agriculture-is-vital-for-south-sudans-national-development-and-food-security/</a>
        </p>
        <hr>
        <p>
          <a
            href="https://paanluelwel.com/2020/08/10/why-south-sudan-should-strive-to-protect-and-preserve-her-natural-biodiversity/">why-south-sudan-should-strive-to-protect-and-preserve-her-natural-biodiversity/</a>
        </p>
        <hr>
        <p>
          <a
            href="https://paanluelwel.com/2020/07/23/exploring-natural-resources-and-attached-conflicts-of-interests-across-south-sudan/">exploring-natural-resources-and-attached-conflicts-of-interests-across-south-sudan/</a>
        </p>
        <hr>
        <p>
          <a
            href="https://paanluelwel.com/2020/06/17/climate-change-is-exacerbating-environmental-challenges-and-weather-patterns-in-south-sudan/">climate-change-is-exacerbating-environmental-challenges-and-weather-patterns-in-south-sudan/</a>
        </p>
        <hr>
      </div>
    </div>
  
    <div class="row">
      <div class="col">
        <h3 class="text-success related__h3">Related Posts</h3>
        <hr>
        <div class="related">
          <div class="related__posts">
            <img src="/static/images/nature.jpg" alt="">
            <h4 class="related__h4">Climate change and mitigation</h4>
            <p class="related__p">
              Our aim is to work toward controlling the factors that affect the climate change in the
              world newest country, the Republic of South Sudan...
            </p>
            <a href="" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
          <div class="related__posts">
            <img src="/static/images/cooperate.jpg" alt="">
            <h4 class="related__h4">corporate sustainability management and planning</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) appreciate and fully understand
              corporate sustainability and it is part of our...
            </p> <br>
            <a href="" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection