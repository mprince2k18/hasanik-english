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
              <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
          </div>
          <div class="col-md-8">
            <!-- tabs -->
            <!-- <div class="tabs">
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
            </div> -->


<div class="row card-row">
  
                  
<div class="card">
  <div class="card__top">
    <div class="circle"></div>
    <img class="card__top-img" src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597333758/ZnI9hGUwY3Fc5o16Q9yyeTiebBrVtrHL3CL30qRo_1.png" alt="Nika Gold and Black Shoe">
  </div>
  <h1 class="card__title">ABOUT US</h1>
  <div class="card__bottom product-info">
    <div class="product-info__top">
      <div class="product-info__product">
        <div v-if="loading">
                    <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
                  </div>
        <span class="product-info__product-text truncate" v-html="abouts.desc"></span>
      </div>
    </div>
  </div>
</div>
<div class="card card2">
  <div class="card__top">
    <div class="circle"></div>
    <img class="card__top-img" src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597333758/ZnI9hGUwY3Fc5o16Q9yyeTiebBrVtrHL3CL30qRo_1.png" alt="Nika Gold and Black Shoe">
  </div>
  <h1 class="card__title">OUR MISSION</h1>
  <div class="card__bottom product-info">
    <div class="product-info__top">
      <div class="product-info__product">
        <div v-if="loading">
                    <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
                  </div>
        <span class="product-info__product-text truncate" v-html="missions.desc"></span>
      </div>
    </div>
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
        },
        // END
    }
</script>


<style scoped>
.rounded{
  border-radius: 10px;
}

.about-img{
  height: 99vh;
}

.truncate {
  width: 500px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.card {
display: flex;
    position: relative;
    flex-direction: column;
    height: 585px;
    width: 452px;
    margin: 0 auto;
    border-radius: 2%;
    overflow: hidden;
    font-family: "Roboto Condensed", sans-serif;
    text-transform: uppercase;
    background: #fff;
    color: #000;
    cursor: pointer;
    top: 10%;
    
}

.card:after {
content: "";
  opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: 1;
  background-image: url(https://clickandpress.com/wp-content/uploads/2019/05/m-h-slider-img-2.jpg);
    background-repeat: no-repeat;
}

.card2:after {
content: "";
  opacity: 0.1;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  position: absolute;
  z-index: 1;
  background-image: url(https://productled.com/wp-content/uploads/2019/09/Illustration_Think_Different.png);
    background-repeat: no-repeat;
}
.card:hover .circle {
  clip-path: circle(220px at 90% 130px);
}
.card:hover .card__title {
  transform: translateY(200px);
  transition-delay: 0.1s;
}
.card:hover .product-info__top {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 0.35s;
}
.card:hover .product-info__bottom {
  transform: translateY(0);
  opacity: 1;
  transition-delay: 0.5s;
}

.card__top {
  height: 50%;
  position: relative;
  overflow: hidden;
}

.circle {
  position: absolute;
  height: 100%;
  width: 100%;
  border-top-right-radius: 10%;
  background: #ffbf01;
  clip-path: circle(0px at 90% 130px);
  transition: all 0.5s ease-in-out;
}

.card__top-img {
    position: absolute;
    width: 75%;
    height: auto;
    z-index: 2;
    transform: rotate(-19deg) scaleX(1);
}

.card__title {
  position: absolute;
  left: 30%;
  z-index: 1;
  color: #000;
  font-size: 36px;
  transform: translateY(500px);
  transition: transform 0.5s ease-in-out;
  transition-delay: 0.5s;
}

.product-info {
  display: flex;
  flex-direction: column;
  flex: 1;
  padding: 30px;
}

.product-info__top {
  display: flex;
  flex-direction: column;
  flex: 1;
  opacity: 0;
  transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
  transition-delay: 0.35s;
  transform: translateY(50%);
}

.product-info__brand {
  font-size: 16px;
  text-transform: uppercase;
}

.product-info__product {
  display: flex;
  justify-content: space-between;
  padding: 10px 0;
}

.product-info__product-text {
  font-size: 24px;
}

.product-info__product-price {
  font-size: 24px;
}

.product-info__sizes-text {
  font-size: 16px;
}

.product-info__sizes-inner {
  display: flex;
  padding: 10px 0;
}

.product-info__sizes-size {
  padding: 10px 15px;
  margin-right: 15px;
  border-radius: 10%;
  background: white;
  color: #1d1f21;
  font-weight: bold;
  transition: background 0.3s ease-in-out;
}
.product-info__sizes-size:hover {
  background: #ffbf01;
}

.product-info__bottom {
  display: flex;
  justify-content: space-between;
  opacity: 0;
  transition: transform 0.5s ease-in-out, opacity 0.5s ease-in-out;
  transition-delay: 0.1s;
  transform: translateY(50%);
}

.product-info__colors {
  display: flex;
  justify-content: space-between;
  flex-basis: 20%;
}

.product-info__colors-color {
  position: relative;
}

.product-info__colors-label {
  position: absolute;
  left: 0;
  top: 0;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background-color: white;
  border: 2px solid white;
  cursor: pointer;
}

.product-info__colors-color input[type="checkbox"] {
  visibility: hidden;
}

.colors-yellow input[type="checkbox"]:checked + .product-info__colors-label {
  background-color: #ffbf01;
}

.product-info__colors-color input[type="checkbox"]:checked + .product-info__colors-label:after {
  opacity: 1;
}

.product-info__buy-button {
  padding: 18px 25px;
  border-radius: 20%;
  background: #ffbf01;
  color: #1d1f21;
  font-size: 20px;
  border: 1px solid transparent;
  text-transform: uppercase;
  font-weight: bold;
  transition: background 0.3s ease-in-out, color 0.3s ease-in-out;
  cursor: pointer;
}
.product-info__buy-button:hover {
  background: #1d1f21;
  color: white;
  border: 1px solid #ffbf01;
}

.card-row{
  padding-top: 8%;
}
</style>