<template>
    <div>     
      <br/><br/><br/><br/>
      <div class="container">
       <el-row :gutter="15">
          <el-col :md="14">
            <div class="card">
              <div class="card-body formData">
                <div class="form-group">
                  <label>Name</label>
                  <el-input placeholder="Name" v-model="input"></el-input>
                </div>
                <div class="form-group">
                  <label>No. HP</label>
                  <el-input placeholder="No. Hp" v-model="input"></el-input>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <el-input placeholder="Email" v-model="input"></el-input>
                </div>
                <div class="form-group">
                  <label>Guest Name</label>
                  <el-input placeholder="Guest Name" v-model="input"></el-input>
                </div>
              </div>
            </div>
          </el-col>
          <el-col :md="10">
              <div class="card">
                <el-row :gutter="5">
                  <el-col :md="8">
                    <img :src="url.hotel+'/1.jpg'" class="img-fluid">
                  </el-col>
                  <el-col :md="16">
                        <h5 class="no-margin">{{hotel.name}}</h5>
                        <el-rate v-model="hotel.rating"></el-rate>
                        <p><i class="icon-map4">&nbsp;</i> Singapore - singapore</p>
                  </el-col>
                  <el-col :md="24">
                    <br/>
                    <h6>Run Of House</h6>
                    <p>&nbsp;&nbsp; 30 Apr - 1 Mei &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Max. 1 Person</p>
                    <el-divider></el-divider>
                    <div style="padding:10px">
                      <el-row :gutter="5">
                        <el-col :md="18">
                          <h6 class="no-margin">Room Price</h6>
                        </el-col>
                        <el-col :md="6">
                          <h6 class="no-margin">{{hotel.cost}}</h6>
                        </el-col>
                      </el-row>
                      <el-row :gutter="5">
                        <el-col :md="18">
                          <h6 class="no-margin">1 room X 1 night</h6>
                        </el-col>
                        <el-col :md="6">
                          <h6 class="no-margin">{{hotel.cost}}</h6>
                        </el-col>
                      </el-row>
                      <el-row :gutter="5">
                        <el-col :md="18">
                          <h5 class="no-margin">Total</h5>
                        </el-col>
                        <el-col :md="6">
                          <h6 class="no-margin">{{hotel.cost}}</h6>
                        </el-col>
                      </el-row>
                      <el-row :gutter="5">
                        <el-col :md="24">
                          <br/>
                          <el-button type="primary">Payment</el-button>
                          <br/>
                          Dengan melajutkan pemesanan Anda telah dianggap telah menyetujui Syarat & Ketentuan dan Kebijakan Privasi nusaindahtourtravel.com
                        </el-col>
                      </el-row>
                    </div>
                  </el-col>
                </el-row>
            </div>
          </el-col>
        </el-row>
      </div>
      <br/><br/>
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
       adult  : null,
       child  : null,
     },
      hotel :
         { name : "Beach Villas", rating : 4, cost : "1.90900" },
       
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