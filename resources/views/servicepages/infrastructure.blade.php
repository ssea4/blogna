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
        <img src="/static/images/infrastructure.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>INFRASTRUCTURE (ENVIRONMENT, HEALTH, SAFETY, DEVELOPMENT OF
          ENVIRONMENTAL AND SOCIAL MANAGEMENT SYSTEM AND COMPLIANCE
          MONITORING)</h1>
        <hr>
        <p>As South Sudan Environmental Advocates (SSEA). We appreciate and know that the
          environmental benefits of infrastructure are manifold and sustainable infrastructure
          assets can help to address climate and natural disasters, reduce greenhouse gas
          emissions, contamination, manage natural capital and enhance resource efficiency.
          Furthermore, the infrastructure plays a significant role in the development and
          protection of energy sector and biodiversity respectively. Moreover, the national economy need reliable infrastructure to connect supply chains and efficiently move
          goods and services across borders. Infrastructure link households across the urban and
          rural settings which help in the creation of employment opportunities, mobility,
          healthcare and education. Clean energy and public transit can assist in reducing
          greenhouse gases. Finally, we as South Sudan Environmental Advocates (SSEA) are
          involved in the planting of trees across the country including alongside the
          infrastructure like highways, airports and etc. We have a goal to plant three Million
          trees in the period of ten years across South Sudan and to help in the fight against
          desertification, soil erosion, deforestation and beautification of roads and airports by
          planting trees along all the highways and airports in South Sudan. So we are working in
          collaboration with Ministry of environment and other Mother Nature organizations like
          CLENA SUSTAINABLE FUTURE and United Nations’ agencies.</p>
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
  
    <h3 class="text-success related__h3">Related Posts</h3>
        <hr>
        <div class="related">
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
          <div class="related__posts">
            <img src="images/fores.jpg" alt="">
            <h4 class="related__h4">Forest conservation</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love Mother Nature and
          environmental protection just like the way we...
            </p>
            <a href="{% url 'forestryconservation' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
  
        </div>
  
  </div>
  @endsection