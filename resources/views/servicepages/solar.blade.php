
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
        <img src="/static/images/solar.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Solar Energy</h1>
        <hr>
        <p class="wow bounce">Our aim as South Sudan Environmental Advocates (SSEA) will always and forever be what’ll
          benefit the South Sudan’s current and future generations without doubt and segregation on
          our side. South Sudan is a country that’s massively endowed in many ways by the creator of
          both earth and heaven. The world newest nation has a greatest solar energy potential in the
          Horn of Africa and earth as a whole. And we need the Republic of South Sudan to profit from
          this richness in solar energy which is one of the world’s cleanest energy ever in the history of
          humankind. Solar energy is a power from Sun and it is massive, inexhaustible and clean energy.
          Solar energy can be used directly for heating, lighting households, commercial centers,
          electricity, hot water heating, solar cooling and many more other commercial and industrial
          applications. So we as South Sudan Environmental Advocates (SSEA) are working tirelessly hard
          to championed the adaptation of this solar energy as the best alternative form of cleaner
          energy compare to that of fossil fuels and hydro-electricity in South Sudan. We want the
          current and future generations to adapt and embrace this excellent source of clean energy in
          South Sudan. Finally, we are working in collaboration with other energy and environmental
          organizations like CLENA SUSTAINABLE FUTURE, the ministry of energy, ministry of
          environment and UN agencies that support cleaner energy and environmental protection in
          order to achieve this solar energy’s dream in South Sudan. South Sudan Environmental
          Advocates (SSEA) want cleaner energy alongside environmental protection in South Sudan.</p>
  
          
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
            <img src="images/w-body.jpg" alt="">
            <h4 class="related__h4">Wildlife</h4>
            <p class="related__p">
              We as South Sudan Environmental Advocates (SSEA) love Mother Nature and
          environmental protection just like the way we value human life. We’re like the other
          great and golden organizations such as UNEP...
            </p>
            <a href="{% url 'wildlife' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
          <div class="related__posts">
            <img src="images/w-body.jpg" alt="">
            <h4 class="related__h4">Water Body Management</h4>
            <p class="related__p">
              Water bodies protection from both solid &amp; liquid wastes pollution is vital in South Sudan. water
          is life and all living creatures need it for...
            </p>
            <a href="{% url 'waterbodyprotection' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
      </div>
      </div>
      
  </div>
  @endsection