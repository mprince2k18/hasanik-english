<template>
  <div>


  <!-- Page Heading -->
        <div class="page-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <h1>About Us</h1>
                <span><a href="index.html">Home</a>About Us</span>
              </div>
            </div>
          </div>
        </div>


        <!-- Steps -->
        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">

                  <div class="item-content">
                    <p class="desc">
                      {{ abouts.desc }}
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Steps -->
        <section class="steps">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="step-item">
                    <h3 class="center">Our Mission</h3>
                  <div class="item-content">
                    <p class="desc">
                      {{ missions.desc }}
                    </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Our Skills -->
        <section class="our-skills">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Skills</h6>
                  <h2>Why Choose Us?</h2>
                </div>
              </div>
              <div class="col-lg-6 align-self-center">
                <div class="left-image">
                  <img src="https://buttoncreative.agency/html/oxana/images/skills-left-image.png" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row">
                  <div class="col-5">
                    <div class="skill-item">
                      <div class="skill-box">
                        <div class="skills-circle">
                          <ul>
                            <li data-percent="80"><span class="bar-circle-right"></span><span class="bar-circle-left"></span><span class="bar-circle-cover"></span><b></b></li>
                            <li data-percent="94"><span class="bar-circle-right"></span><span class="bar-circle-left"></span><span class="bar-circle-cover"></span><b></b></li>
                            <li data-percent="76"><span class="bar-circle-right"></span><span class="bar-circle-left"></span><span class="bar-circle-cover"></span><b></b></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-7">
                    <div class="skills-info">
                      <ul>
                        <li>
                          <h4>Drawing Scatch Ideas</h4>
                          <p>Shaman synth retro slow-carb vape  dermy twee, put a bird jean shorts franzen.</p>
                        </li>
                        <li>
                          <h4>Creating Actual View</h4>
                          <p>Shaman synth retro slow-carb vape  dermy twee, put a bird jean shorts franzen.</p>
                        </li>
                        <li>
                          <h4>Developing Functinal</h4>
                          <p>Shaman synth retro slow-carb vape  dermy twee, put a bird jean shorts franzen.</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

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
          }
        },
        methods:{
          getAbout(){
            // axios.get('http://localhost/hasanik/public/api/about') //base_url
            axios.get('https://app.hasanikenglish.com/api/about') //base_url
            .then(response => this.abouts = response.data);
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
