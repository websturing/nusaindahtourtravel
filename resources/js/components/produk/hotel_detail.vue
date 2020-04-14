<template>
    <div>
      <br/><br/><br/><br/>
        <div class="container">
          <div class="row"> 
            <div class="col-md-4">
              <div class="sidebarData">
                <div class="form">
                  <h5 class="no-margin no-padding">Finding Hotel</h5>
                  <h6 class="no-margin no-padding">Domestik & Internasional</h6>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Hotel</label>
                        <div class="row col-md-12">
                        <el-autocomplete
                          class="width100"
                          v-model="state1"
                          :fetch-suggestions="querySearch"
                          placeholder="Type Name hotel"
                        ></el-autocomplete>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Check-in / Checkout</label>
                        <div class="row col-md-12">
                          <el-date-picker
                            v-model="form.checkin"
                            type="daterange"
                            class="width100"
                            range-separator="/"
                            start-placeholder="Start date"
                            end-placeholder="End date">
                          </el-date-picker>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Person</label>
                        <div class="row col-md-12">
                        <el-select v-model="form.people" placeholder="people">
                          <el-option
                            v-for="item in options"
                            :key="item.value"
                            :label="item.label"
                            :value="item.value">
                          </el-option>
                        </el-select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="">
                        <el-button type="warning" icon="el-icon-search">Search</el-button>
                      </div>
                    </div>
                    <br/>
                </div> 
              </div>
            </div>
            <div class="col-md-8">
              <h4>Hotel in Singapore</h4>
              <p><i class="icon-calendar"></i>&nbsp;&nbsp;&nbsp; 30 Apr - 1 Mei &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="icon-users2"></i>&nbsp;&nbsp;&nbsp; 1 Person</p>
              <div class="card">
                <div class="card-body">
                  Result : 10 Hotel
                  <div>
                    <span><i class="icon-star-full2">&nbsp;</i>Recomended</span>
                    <el-divider direction="vertical"></el-divider>
                    <span><i class="icon-sort-amount-asc">&nbsp;</i> Lowest</span>
                    <el-divider direction="vertical"></el-divider>
                    <span><i class="icon-sort-amount-desc">&nbsp;</i>Highest</span>
                  </div>
                </div>
              </div>
              <br/>
              <div class="card hotelCard" v-for="(h,hIndex) in data.hotel" :key="hIndex">
                <el-row :gutter="5">
                  <el-col :md="6">
                    <img :src="url.hotel+'/'+( hIndex+1 )+'.jpg'" class="img-fluid">
                  </el-col>
                  <el-col :md="12">
                      <div class="card-body">
                        <h5>{{h.name}}</h5>
                        <el-rate v-model="h.rating"></el-rate>
                        <p><i class="icon-map4">&nbsp;</i> Singapore - singapore</p>
                      </div>
                  </el-col>
                  <el-col :md="6">
                      <div class="card-body">
                        <h5>{{h.cost}}</h5>
                        <el-button type="primary" icon="icon-bookmarks">Detail</el-button>
                      </div>
                  </el-col>
                </el-row>
              </div>
            </div>
          </div>
      </div>


      <section class="">
          <div class="container">
            <br/><br/>
              <div class='row'><h5>Promo Terbaru</h5></div>
              <section class="">
              <div class="container">
              <div class="row">
                <Carousel :perPage="3">
                  <Slide>
                    <div class="SlidePromo">
                      <img :src="url.promo+'/sea.png'">
                    </div>
                  </Slide>
                  <Slide>
                    <div class="SlidePromo">
                      <img :src="url.promo+'/dolphin.jpg'">
                    </div>
                  </Slide>
                  <Slide>
                    <div class="SlidePromo">
                      <img :src="url.promo+'/adw.png'">
                    </div>
                  </Slide>
                  <Slide>
                    <div class="SlidePromo">
                      <img :src="url.promo+'/universal.png'">
                    </div>
                  </Slide>
                </Carousel>
              </div>
              </div>
            </section>
          </div>
          <br/><br/>
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
       background : urlBase.urlWeb+'/public/img/ranoh/header.jpg',
       hotel : urlBase.urlWeb+'/public/img/hotel',
     },
     state1: '',
     links :[],
     options: [{
          value: '1',
          label: '1'
        }, {
          value: '2',
          label: '2'
        }, {
          value: '3',
          label: '3'
        }, {
          value: '4',
          label: '4'
        }, {
          value: '5',
          label: '5'
        }],
     form :{
       checkin : null,
       people  : null
     },
     data :{
       hotel :[
         { name : "Beach Villas", rating : 4, cost : "1.90900" },
         { name : "Crockfords Hotel", rating : 5, cost : "2.50900" },
         { name : "Equarius Hotel", rating : 3, cost : "1.03900" },
         { name : "ESPA", rating : 4, cost : "2.00900" },
         { name : "Festive Hotel", rating : 4, cost : "1.60900" },
         { name : "Genting Hotel Jurong", rating : 3, cost : "1.00900" },
         { name : "Hard Rock Hotel", rating : 5, cost : "1.50900" },
         { name : "Hotel Michael", rating : 4, cost : "1.70900" },
         { name : "Ocean Suites", rating : 3, cost : "1.09900" },
         { name : "TreeTop Lofts", rating : 5, cost : "1.30900" },
       ]
     }
   }
  },
  methods: {
      querySearch(queryString, cb) {
        var links = this.links;
        var results = queryString ? links.filter(this.createFilter(queryString)) : links;
        // call callback function to return suggestions
        cb(results);
      },
      createFilter(queryString) {
        return (link) => {
          return (link.value.toLowerCase().indexOf(queryString.toLowerCase()) === 0);
        };
      },
      loadAll() {
        return [
          { "value": "vue", "link": "https://github.com/vuejs/vue" },
          { "value": "element", "link": "https://github.com/ElemeFE/element" },
          { "value": "cooking", "link": "https://github.com/ElemeFE/cooking" },
          { "value": "mint-ui", "link": "https://github.com/ElemeFE/mint-ui" },
          { "value": "vuex", "link": "https://github.com/vuejs/vuex" },
          { "value": "vue-router", "link": "https://github.com/vuejs/vue-router" },
          { "value": "babel", "link": "https://github.com/babel/babel" }
         ];
      }
  },
  mounted() {
    this.links = this.loadAll();
  },
  components: {
    Carousel,
    Slide
  }
}
</script>
<style>
.width100{
  width: 100%;
}
</style>