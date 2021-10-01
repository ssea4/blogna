
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
        <img src="images/w-body.jpg" alt="" class="service__image">
      </div>
    </div>
  </div>
  
  <div class="container service__content">
    <div class="row">
      <div class="col-lg-9 col-md-8 col-sm-12">
        <h1>Water Body Protection</h1>
        <hr>
        <p class="wow bounce">Water bodies protection from both solid &amp; liquid wastes pollution is vital in South Sudan. water
          is life and all living creatures need it for survival and refreshment. Preservation &amp; protection of
          water bodies is significant in South Sudan and we as South Sudan Environmental Advocates
          (SSEA) are working tirelessly to ensure that freshwater ecosystems are safeguard and continue
          to deliver their essential services to the people in the Republic of South Sudan. We are working
          to protect the quality of water, biological diversity, encroachment of the lakes and other water
          bodies across South Sudan. We are working in collaboration with government’s institutions
          mandated to protect water resources across the country. We as South Sudan Environmental
          Advocates (SSEA) know that water contamination is a biggest threat to human health, marine
          life and wildlife. Most of the water borne diseases are as a result of the water resources’
          pollution. We’re working in collaboration with other international organizations such as CLENA
          SUSTAINABLE FUTURE to protect water bodies from all kind of pollutions across South Sudan.
          vulnerability of water resources to pollutions of all kind is one of the critical challenges facing
          South Sudan in Africa.</p>
  
          
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
            <img src="images/solar.jpg" alt="">
            <h4 class="related__h4">Solar</h4>
            <p class="related__p">
              Our aim as South Sudan Environmental Advocates (SSEA) will always and forever be what’ll
          benefit the South Sudan’s current...
            </p> <br>
            <a href="{% url 'solar' %}" class="related__btn btn btn-success">Read More</a>
            </p>
          </div>
        </div>
        
  </div>
  @endsection