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
        <img src="/static/images/Env.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Environmental Management </h1>
        <hr>
        <p class="wow bounce"><strong>Environmental Impact Assessment </strong><br>
          There is need for environmental impact assessment in the country, audits, monitoring and
          evaluation to mitigate adverse impacts and enhance environmental benefits. So far a lot of the
          development activities taking place in South Sudan do not adhere to environmental regulations
          accepted worldwide and leave the environment polluted, degraded and risk the lives of the
          communities living nearby.
          SSEA thus seeks to offer consultancy on the adherence of international and local environmental
          regulations. This will ensure that development does not lead to environmental degradation and
          avoid companies being liable in future for damage done in the course of their activities.<br>
          <strong>Environmental Audit </strong><br>
          This is a compliance audit done as the specific laws dictate to ensure compliance to the
          environmental impact assessment report given. its an assessment of the extent to which an
          organization is observing practices which harm the environment.
          SSEA will help organizations identify environmental compliance and management system
          implementation gaps, along with related corrective actions.<br>
          <strong> Corporate Social Responsibility</strong><br>
          SSEA is in a position to carry out corporate’s social responsibility in environmentally related
          fields. Be it water providence, waste management, clean energy and solar connection,
          environmental awareness campaigns, afforestation and reforestation of certain areas,
          community mobilization for environmental projects, creating environmental awareness and
          environmental protection.<br>
          <strong>Environmental Compliance </strong><br>
          
          SSEA offers environmental compliance consultancy to organizations and corporates. This
          include international treaties that South Sudan is part of and the local compliance requirements
          by the various states in South Sudan.</p>
          
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
            <img src="images/fores.jpg" alt="">
            <h4 class="related__h4">Forest conservation</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love Mother Nature and
          environmental protection just like the way we...
            </p>
            <a href="{% url 'forestryconservation' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
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
        </div>
      </div>
      </div>
  </div>
  @endsection