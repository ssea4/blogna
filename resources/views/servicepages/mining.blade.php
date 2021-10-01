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
        <img src="images/mining.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Mining</h1>
        <hr>
        <p class="wow bounce">As you are all aware, South Sudan is one of the richest country in natural resources in
          the Sub-Sahara Africa and the entire Africa as whole. It is also one of the leading nation
          in the community of nations worldwide with the massive richness and blessing in
          biodiversity such as Sudd swamp which is the biggest wetlands in Africa and Boma
          National park which host the world second largest animals’ migration. South Sudan is
          endowed with huge minerals and many various industries are cropping up on monthly
          and yearly basis to invest in the natural resources’ sector and there are already many
          that are doing mining activities across the country and that has already engineered an
          impact on the Mother Nature. Mining has many environmental impacts both at the
          national and international levels through direct and indirect mining practices. Mining
          effects can result in soil erosion, loss of biodiversity, pollution of soil, groundwater and
          surface water as a result of many chemicals released from mining processes. And all
          those pollutions can lead to serious health issues if not properly monitored.
          Furthermore, in some nations, mining companies are required to follow strict
          environmental and rehabilitation regulations to ensure that biodiversity is protected
          and the mined areas returns to their previous state. So we as South Sudan
          Environmental Advocates (SSEA) desire to protect South Sudan’s environment from
          dangers of mining activities and we are working in collaboration with government,
          companies, industries and humanitarian organizations to achieve this result for the
          benefit of the current and future generations of our beautiful South Sudan..</p>
  
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
      </div>
    </div>
  
    <div class="row">
      <div class="col">
        <h3 class="text-success related__h3">Related Posts</h3>
        <hr>
        <div class="related">
          <div class="related__posts">
            <img src="images/manufacturing.jpg" alt="">
            <h4 class="related__h4">Manufacturing Industry</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love and desire the earth where
              manufacturing industries are not in conflict with Mother Nature...
            </p>
            <a href="{% url 'manufacturingindustry' %}" class="related__btn btn btn-success">Read More</a>
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