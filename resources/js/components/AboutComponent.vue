<template>
  <div>


  <!-- Page Heading -->

        <!-- Steps -->
        <!-- <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">
                  <div class="item-content">
                    <p class="desc" v-html="abouts.desc"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Steps -->
        <!-- <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">
                    <h3 class="center">Our Mission</h3>
                  <div class="item-content">
                    <p class="desc" v-html="missions.desc">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- -------------------------------------- -->
        <div class="container-fluid about-us-cont">

        <div class="row">
          <div class="col-md-4">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1595766017/heist.png" class="img-fluid rounded about-img" alt="">
          </div>
          <div class="col-md-8">
            <!-- tabs -->
            <div class="tabs">
              <div class="tab-2">
                <label for="tab2-1">About Us</label>
                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                <div>
                  <div v-if="loading">
                    <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
                  </div>
                  <p  v-html="abouts.desc"></p>
                </div>
              </div>
              <div class="tab-2">
                      <label for="tab2-2">Our Mission</label>
                <input id="tab2-2" name="tabs-two" type="radio">
                <div class="item-content">
                  <p v-html="missions.desc"></p>
                </div>
              </div>
            </div>
            <!-- tabs::ENd -->
          </div>
        </div>
        </div>
        <!-- -------------------------------------- -->
      </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
          return{
            abouts:[],
            missions:[],
            loading: false
          }
        },
        methods:{
          getAbout(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/about') //base_url
            axios.get('https://app.hasanikenglish.com/api/about') //base_url
            .then(response => this.abouts = response.data)
            .finally(() => (this.loading = false));
          },
          getMission(){
            // axios.get('http://localhost/hasanik/public/api/mission') //base_url
            axios.get('https://app.hasanikenglish.com/api/mission') //base_url
            .then(response => this.missions = response.data);
          }
        },
        created(){
          this.getAbout();
          this.getMission();
        }
        // END
    }
</script>


<style scoped>
.rounded{
  border-radius: 10px;
}
</style>