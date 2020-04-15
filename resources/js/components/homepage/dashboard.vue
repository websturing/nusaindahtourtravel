<template>
    <div>
      <section class="headlinePromo">
          <div class="container">
            
          </div>
      </section>
      <section class="courselPromo">
        <div class="container">
          <Carousel :perPage="3">
            <Slide>
              <div class="Slideitems">
                <img :src="url.promo+'/sea.png'">
              </div>
            </Slide>
            <Slide>
              <div class="Slideitems">
                <img :src="url.promo+'/dolphin.jpg'">
              </div>
            </Slide>
            <Slide>
              <div class="Slideitems">
                <img :src="url.promo+'/adw.png'">
              </div>
            </Slide>
            <Slide>
              <div class="Slideitems">
                <img :src="url.promo+'/universal.png'">
              </div>
            </Slide>
          </Carousel>
        </div>
      </section>
      <!--event info end -->


      <!--about the event -->
      <section class="">
          <div class="container">
              <div class='row'><h5>Kategori</h5></div>
              <div class="row">
                  <div class="produk-item col-md-1">
                     <a href="ferry">
                    <img :src="url.produk+'/ship.png'" class="img-fluid">
                      <p class="produk-tittle">Ferry</p></a>
                  </div>
                  <div class="produk-item col-md-1">
                    <a href="ranoh">
                    <img :src="url.produk+'/island.png'" class="img-fluid">
                      <p class="produk-tittle">Ranoh</p></a></a>
                  </div>
                  <div class="produk-item col-md-1">
                    <a href="rental">
                     <img :src="url.produk+'/car.png'" class="img-fluid">
                      <p class="produk-tittle">Rental</p></a>
                  </div>
                  <div class="produk-item col-md-1">
                    <a href="cruise">
                    <img :src="url.produk+'/cruise.png'" class="img-fluid">
                       <p class="produk-tittle">Dream Cruise</p></a>
                  </div>
                  <div class="produk-item col-md-1">
                    <a href="hotel">
                    <img :src="url.produk+'/rws.png'" class="img-fluid">
                       <p class="produk-tittle">RWS Sentosa</p></a>
                  </div>
              </div>
          </div>
          <br/><br/>
      </section>
      <!--about the event end -->
      <section class="bg-img pt100 pb100" :style="{ 'background-image': 'url(' + url.background + ')' }">
          <div class="container">
              <div class="section_title mb30">
                  <h3 class="title color-light">
                      Purchase / Voucher Code
                  </h3>
              </div>
              <div class="row justify-content-center align-items-center">
                  <div class="col-md-9 text-md-left text-center color-light">
                    <input type="text" class="form-control" placeholder="Type Your Code">
                  </div>
                  <div class="col-md-3 text-md-right text-center">
                    
                  </div>
              </div>
          </div>
      </section>

  

    </div>
</template>

<script>

import urlBase from '@/js/url';
import moment from 'moment';
import { Carousel, Slide } from 'vue-carousel';

export default {
  data () {
   return {
     url : {
       promo : urlBase.urlWeb+'/public/img/promo',
       produk : urlBase.urlWeb+'/public/img/produk',
       background : urlBase.urlWeb+'/public/img/promo/ticket.png',
     }
   }
  },
  components: {
    Carousel,
    Slide
  }
}
</script>
