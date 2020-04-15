<template>
    <div>
      <section class="headlineProduk">
          <div class="container">

           <div class="form">
            <h5 class="no-margin no-padding">Finding Route Ferry</h5>
            <h6 class="no-margin no-padding">Domestik & Internasional</h6>

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Depart Trip / Return Trip</label>
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
              <div class="marged col-md-2">
                <div class="form-group">
                  <label>Adult</label>
                  <div class="row col-md-12">
                  <el-select v-model="form.adult" placeholder="people">
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
              <div class="marged col-md-2">
                <div class="form-group">
                  <label>Child</label>
                  <div class="row col-md-12">
                  <el-select v-model="form.child" placeholder="people">
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
              <div class="col-md-2">
                <div class="searchproduk">
                  <el-button type="warning" icon="el-icon-search" @click="ferryshow()">Search</el-button>
                </div>
              </div>
            </div>
          </div> 
          </div>
      </section>
      

      <section class="">
          <div class="container">
            <br/><br/>
              <div class='row' v-loading="isLoading" v-if="show"><h5 class="no-margin">Result</h5>
              <div class="col-md-12" >
                <el-row :gutter="5">
                    <el-col :md="18">
                      <el-card class="box-card" v-for="(h,hIndex) in ferry" :key="hIndex" style="margin-bottom:10px">
                        <el-row :gutter="5">
                          <el-col :md="6">
                            <img :src="url.ferry+'/majestic-fast-ferry.jpg'" class="img-fluid">
                          </el-col>
                          <el-col :md="12">
                              <div style="padding:7px 2px 0px 10px">
                                <h5 class="no-margin">{{h.ship}}</h5>
                                <p class="no-margin font-weight-bold text-primary">{{h.name}}</p>
                                <p class="no-margin"><i class="icon-compass4">&nbsp;</i> {{h.route}} / <span>{{h.time}}</span> &nbsp; 
                                    <el-tag type="warning" effect="dark">{{h.el}} Time</el-tag></p>
                              </div>
                          </el-col>
                        </el-row>
                      </el-card>
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
     isLoading : false,
     show : false,
     url : {
       promo : urlBase.urlWeb+'/public/img/promo',
       produk : urlBase.urlWeb+'/public/img/produk',
       background : urlBase.urlWeb+'/public/img/ranoh/header.jpg',
       ferry : urlBase.urlWeb+'/public/img',
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

  },
  methods:{
    ferryshow(){
       this.isLoading = true
       this.show = true
      setTimeout(()=>{
        this.isLoading = false
      },1000);
    }
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