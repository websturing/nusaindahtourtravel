<template>
<div>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container">
        <el-row :gutter="5">
            <el-col :md="10" :offset="7">
                 <el-card class="box-card" style="margin-bottom:10px">
                     <center><h4>login With Your Account</h4></center>
                     <br/>
                        <el-button type="primary" class="width100">Login with Facebook</el-button>
                        <el-button type="default" class="width100">Login with google</el-button>
                     <el-divider>Or With</el-divider>
                     <el-input
                        placeholder="Username"
                        v-model="input"
                        class="width100"
                        clearable>
                     </el-input>
                     <el-input
                        placeholder="Password"
                        class="width100"
                        v-model="input"
                        clearable>
                    </el-input>
                    <el-button type="warning" class="width100">login</el-button>


                 </el-card>
            </el-col>

        </el-row>
    </div>
</div>
	<!-- /page content -->
</template>

<script>
import urlBase from '@/js/url'
export default {
    
    data(){
        return{
            url:{
               assets : urlBase.urlWeb+'/public',
            },
            isLoading : false,
            login:{
                username : null,
                password : null
            }
            
        }
    },
    mounted() {
        window.history.forward(1)
        console.log('login mounted.')
        this.$parent.$data.activeShow = false;
    },
    methods:{
        notif(s,m,type){
            this.$notify({
                title: s,
                message: m,
                type: type
            });
        },
        redirect(){
            // this.$parent.$data.activeShow = true;
            window.location.href = urlBase.urlWeb+'/dashboard';
            
        },
        Submit(){
             this.$refs['login'].validate((valid) => {
                if (valid) {
                   this.isLoading = true
                   axios
                    .post(urlBase.urlWeb+'/login/submitform',{
                        login : this.login,
                    })
                    .then(r => {
                        console.log(r.data),
                        this.isLoading = false,
                        r.data.code === '500' ? this.notif(r.data.title, r.data.message, r.data.type) : this.redirect()
                    });
                } 
                else {
                    console.log('error submit!!');
                    return false;
                }
            });
        }
    },
}
</script>
<style scoped>
.width100{
    width: 100%;
    margin-bottom: 10px;
}
</style>