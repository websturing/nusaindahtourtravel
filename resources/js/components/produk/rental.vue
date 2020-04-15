<template>
    <div>
      <section class="headlineKosong">
          <div class="container">

          </div>
      </section>
      

      <section class="">
          <div class="container">
            <br/><br/>
              <div class='row'>
              <div class="col-md-12">
                <el-row :gutter="5">
                    <el-col :md="8">
                      <el-card class="box-card" style="margin-bottom:10px">
                         <el-input
                            placeholder="Search location"
                            prefix-icon="el-icon-search"
                            v-model="input2">
                          </el-input>
                          <br/>
                          <br/>
                         <el-checkbox label="Indonesia" name="type"></el-checkbox> <br/>
                         <el-checkbox label="Singapore" name="type"></el-checkbox>

                         <el-divider></el-divider>
                         <h6 class="no-margin">Brand</h6>
                         <el-checkbox label="Toyota (20)" name="type"></el-checkbox> <br/>
                         <el-checkbox label="Ford (10)" name="type"></el-checkbox><br/>
                         <el-checkbox label="Mistsubshi (12)" name="type"></el-checkbox><br/>
                         <el-checkbox label="Daihatsu (8)" name="type"></el-checkbox><br/>
                         <el-checkbox label="KIA (4)" name="type"></el-checkbox><br/>
                         <el-checkbox label="BMW (2)" name="type"></el-checkbox><br/>

                         <el-divider></el-divider>
                         <h6 class="no-margin">Delivery</h6>
                         <el-checkbox label="instant" name="type"></el-checkbox> <br/>
                         <el-checkbox label="Grab" name="type"></el-checkbox><br/>
                         <el-checkbox label="SameDay" name="type"></el-checkbox><br/>
                      </el-card>
                    </el-col>
                    <el-col :md="16">
                       <el-card class="box-card" style="margin-bottom:10px">
                         <el-row :gutter="5">
                             <el-col :md="10">
                               <h4 class="no-margin">Rental</h4>
                             </el-col>
                             <el-col :md="12">
                               Result : 10 Hotel
                                <div>
                                  <span><i class="icon-star-full2">&nbsp;</i>Recomended</span>
                                  <el-divider direction="vertical"></el-divider>
                                  <span><i class="icon-sort-amount-asc">&nbsp;</i> Lowest</span>
                                  <el-divider direction="vertical"></el-divider>
                                  <span><i class="icon-sort-amount-desc">&nbsp;</i>Highest</span>
                                </div>
                             </el-col>
                          
                        </el-row>
                      </el-card>
                      <el-col :md="8" v-for="n in 9" :key="n">
                        <el-card class="box-card" style="margin-bottom:10px">
                          <img :src="url.car+'/1.png'" class="img-fluid">
                           <p>Rental Mobil Privat Low MPV + Driver</P>
                           <span><i class="icon-store2  text-danger"></i> Batam</span>
                        </el-card>
                      </el-col>
                    </el-col>
                </el-row>
              </div>
              </div>
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
       car : urlBase.urlWeb+'/public/img/ranoh',
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
       adult  : null,
       child  : null,
     },
     ferry :[
       { ship : "Majestic Dream", name : 'majestic fast ferry', route : 'Tanjungpinang - Tanah Merah', time : "10.30", el : "IDN"},
       { ship : "Majestic Liberty", name : 'majestic fast ferry', route : 'Batam Center - Tanah Merah', time : "11.30", el : "IDN"},
       { ship : "Majestic Wisdom", name : 'majestic fast ferry', route : 'Tanah Merah - Batam Center', time : "10.30", el : "SG"},
     ]
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