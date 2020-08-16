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
          <div class="col-md-4 mobile-aside">
              <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
              <!-- <a href="/enroll/course" class="glow-on-hover" type="button">ENROLL NOW</a> -->

              <a href="/enroll/course" class="glow-on-hover" type="button">
                                <div class="btn-enroll">
                                  ENROLL NOW
                                  <div class="btn2"></div>
                                </div> 
                                </a> 

          </div> 
          <div class="col-md-8 mobile-right">
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



    <div class="container card-container">
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="content-box">
              <h2>About Us</h2>
              <a href="#" @click="aboutModal = true">Know More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card2">
            <div class="content-box">
              <h2>Our Mission</h2>
              <a href="#" @click="missionModal = true">Know More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- -------------------- POP UP -->
      <div class="about-modal" v-if="aboutModal">
        <p class="p-content" v-html="abouts.desc"></p>
        <div class="text-center">
          <a href="#" class="go-back" @click="aboutModal = false">Go back</a>
        </div>
      </div>
      <div class="about-modal" v-if="missionModal">
        <p class="p-content" v-html="missions.desc"></p>
        <div class="text-center">
          <a href="#" class="go-back" @click="missionModal = false">Go back</a>
        </div>
        
      </div>
      <!-- -------------------- POP UP:END -->
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
            loading: false,
            aboutModal: false,
            missionModal: false,
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

.text-center{
  text-align: center;
}

/** Enroll */
.btn-enroll,
.btn2 {
    width: 40%;
    height: 50px;
    font-size: 17px;
    text-align: center;
    line-height: 50px;
    color: rgba(255, 255, 255, 0.9);
    border-radius: 50px;
    background: linear-gradient(-45deg, #341f97, #32ff7e, #2C3A47, #338aff, #3cf0c5);
    background-size: 600%;
    -webkit-animation: anime 16s linear infinite;
    animation: anime 16s linear infinite;
    margin: 0 auto;
    top: 70%;
    left: 30%;
    position: absolute;
}

.btn2 {
    margin-top: -70px;
    z-index: -1;
    -webkit-filter: blur(30px);
    filter: blur(30px);
    opacity: 0.8;
    
}

@-webkit-keyframes anime {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}

@keyframes anime {
    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }
}
/* ------------ */

.about-img{
  height: 99vh;
}

/**.about-modal */
.about-modal{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 89vh;
  z-index: 10;
  border-radius: 2%;
  background: #fff;
}
/**.about-modal:END */
.container {
  position: relative;
}

.card-container{
  top: 11%;
}

.container .card {
  position: relative;
  width: 100%;
  height: 88vh;
  background: #192a56;
  border-radius: 20px;
  overflow: hidden;
}


/* circle style */
.container .card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #3498db;
  clip-path: circle(150px at 80% 20%);
  transition: .5s ease-in-out;
}
.container .card:hover::before {
  clip-path: circle(300px at 80% -20%);
}


/* watermark */
.container .card::after {
    content: 'About Us';
    position: absolute;
    top: 43%;
    left: -2%;
    font-size: 8em;
    font-weight: 800;
    font-style: italic;
    color: rgba(255, 255, 255, 0.05);
    line-height: 127px;
}


/* style product */
.container .card .image-box {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}
.container .card:hover .image-box {
  top: 0;
  transform: translateY(0);
}
.container .card .image-box img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-25deg);
  width: 270px;
}


/* style product info */
.container .card .content-box {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}
.container .card:hover .content-box {
  height: 210px;
}
.container .card .content-box h2 {
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
}
.container .card .content-box .size, 
.container .card .content-box .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;
  opacity: 0;
  visibility: hidden;
}
.container .card:hover .content-box .size {
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}
.container .card:hover .content-box .color {
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}
.container .card .content-box .size h3,
.container .card .content-box .color h3 {
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}
.container .card .content-box .size span {
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: .5s;
  cursor: pointer;
}
.container .card .content-box .size span:hover {
  background: #9bdc28;
}
.container .card .content-box .color span {
  width: 20px;
  height: 20px;
  background: #ff0;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}
.container .card .content-box .color span:nth-child(2) {
  background: #9bdc28;
}
.container .card .content-box .color span:nth-child(3) {
  background: #03a9f4;
}
.container .card .content-box .color span:nth-child(4) {
  background: #e91e63;
}
.container .card .content-box a {
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
}
.container .card:hover .content-box a {
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;
}

.container .card2 {
  position: relative;
  width: 100%;
  height: 88vh;
  background: #3498db;
  border-radius: 20px;
  overflow: hidden;
}


/* circle style */
.container .card2::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #192a56;
  clip-path: circle(150px at 80% 20%);
  transition: .5s ease-in-out;
}
.container .card2:hover::before {
  clip-path: circle(300px at 80% -20%);
}


/* watermark */
.container .card2::after {
  content: 'Our Mission';
    position: absolute;
    top: 33%;
    left: 0%;
    font-size: 6em;
    font-weight: 800;
    font-style: italic;
    color: rgba(0, 0, 0, 0.3);
    line-height: 95px;
}


/* style product */
.container .card2 .image-box {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  z-index: 10000;
  width: 100%;
  height: 220px;
  transition: 0.5s;
}
.container .card2:hover .image-box {
  top: 0;
  transform: translateY(0);
}
.container .card2 .image-box img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%) rotate(-25deg);
  width: 270px;
}


/* style product info */
.container .card2 .content-box {
  position: absolute;
  bottom: 0;
  width: 100%;
  height: 100px;
  text-align: center;
  transition: 1s;
  z-index: 10;
}
.container .card2:hover .content-box {
  height: 210px;
}
.container .card2 .content-box h2 {
  position: relative;
  font-weight: 600;
  letter-spacing: 1px;
  color: #fff;
}
.container .card2 .content-box .size, 
.container .card2 .content-box .color {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 8px 20px;
  transition: 0.5s;
  opacity: 0;
  visibility: hidden;
}
.container .card2:hover .content-box .size {
  opacity: 1;
  visibility: visible;
  transition-delay: 0.5s;
}
.container .card2:hover .content-box .color {
  opacity: 1;
  visibility: visible;
  transition-delay: 0.6s;
}
.container .card2 .content-box .size h3,
.container .card2 .content-box .color h3 {
  color: #fff;
  font-weight: 300;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-right: 10px;
}
.container .card2 .content-box .size span {
  width: 26px;
  height: 26px;
  text-align: center;
  line-height: 26px;
  font-size: 14px;
  display: inline-block;
  color: #111;
  background: #fff;
  margin: 0 5px;
  transition: .5s;
  cursor: pointer;
}
.container .card2 .content-box .size span:hover {
  background: #9bdc28;
}
.container .card2 .content-box .color span {
  width: 20px;
  height: 20px;
  background: #ff0;
  border-radius: 50%;
  margin: 0 5px;
  cursor: pointer;
}
.container .card2 .content-box .color span:nth-child(2) {
  background: #9bdc28;
}
.container .card2 .content-box .color span:nth-child(3) {
  background: #03a9f4;
}
.container .card2 .content-box .color span:nth-child(4) {
  background: #e91e63;
}
.container .card2 .content-box a {
  display: inline-block;
  padding: 10px 20px;
  background: #fff;
  border-radius: 4px;
  margin-top: 10px;
  text-decoration: none;
  font-weight: 600;
  color: #111;
  opacity: 0;
  transform: translateY(50px);
  transition: 0.5s;
}
.container .card2:hover .content-box a {
  opacity: 1;
  transform: translateY(0px);
  transition-delay: 0.75s;
}

/**
  GO BACK BUTTON
*/
.go-back {
  -webkit-appearance: none;
  background: -webkit-gradient(to right, #3498db 0%, #fceeb5 50%, #3498db 100%);
  background: linear-gradient(to right, #3498db 0%, #fceeb5 50%, #3498db 100%);
  background-size: 500%;
  border: none;
  border-radius: 5rem;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  color: #fff;
  cursor: pointer;
  font: 14px Raleway, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  height: 5rem;
  letter-spacing: 0.05em;
  outline: none;
  -webkit-tap-highlight-color: transparent;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  width: 20rem;
  padding: 7px;;
}

.go-back:hover {
  animation-name: gradient;
  -webkit-animation-name: gradient;
  animation-duration: 2s;
  -webkit-animation-duration: s;
  animation-iteration-count: 1;
  -webkit-animation-iteration-count: 1;
  animation-fill-mode: forwards;
  -webkit-animation-fill-mode: forwards;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100%;
  }
}

.p-content{
  padding: 8px;
}


/** RESPONSIVE */
/* 768px*/

@media only screen and (max-width: 768px) {
    .mobile-aside{
      display: none;
    }
    .col-md-8 {
    -webkit-box-flex: 0;
    flex: 0 0 100%;
    max-width: 100%;
}
}
/* 411px*/

@media only screen and (max-width: 411px) {
    .container .card2{
    margin-top: 10%;
}
}
</style>