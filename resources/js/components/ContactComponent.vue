<template>
  <div>
    <!-- Page Heading -->

         <!-- Contact Info -->
         <!-- <section class="contact-info">
           <div class="container">
             <div class="row">
               <div class="col-lg-4">
                 <div class="info-item">
                   <div class="icon">
                     <i class="fa fa-envelope"></i>
                   </div>
                   <h4>Email Address</h4>
                   <p><a href="#">contact@oxana.com</a><br><a href="#">info@oxana.com</a></p>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="info-item">
                   <div class="icon">
                     <i class="fa fa-phone"></i>
                   </div>
                   <h4>Phone Number</h4>
                   <p><a href="#">+1 547 6877 534</a><br><a href="#">001 547 6877 534</a></p>
                 </div>
               </div>
               <div class="col-lg-4">
                 <div class="info-item">
                   <div class="icon">
                     <i class="fa fa-map-marker"></i>
                   </div>
                   <h4>Street Address</h4>
                   <p><a href="#">342 Better Street<br>Peculiar, KS 64078</a></p>
                 </div>
               </div>
             </div>
           </div>
         </section> -->


         <!-- Contact Us -->
         <!-- <section class="contact-us">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <div class="inner-content">
                   <div class="block-heading">
                     <h4>Say Hello To Us!</h4>
                   </div>
                   <form id="message" action="#" method="post">
                     <div class="row">
                       <div class="col-lg-4 col-md-12 col-sm-12">
                         <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                       </div>
                       <div class="col-lg-4 col-md-12 col-sm-12">
                         <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                       </div>
                       <div class="col-lg-4 col-md-12 col-sm-12">
                         <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                       </div>
                       <div class="col-lg-12">
                         <textarea name="your-message" rows="6" class="form-control" id="your-message" placeholder="Your Message" required=""></textarea>
                       </div>
                       <div class="col-lg-12">
                         <button type="submit" id="form-submit" class="filled-button">Send Message Now</button>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div>
           </div>
         </section> -->


         <!-- Find Us On Map -->
         <!-- <section class="map">
           <div class="container">
             <div class="row">
               <div class="col-lg-12">
                 <div class="inner-content">
                   <div class="block-heading">
                     <h4>Find Us On Map</h4>
                   </div>
                   <div id="map">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29209.879270273177!2d90.4031033!3d23.77464789999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c766d9187295%3A0x1c499b6d790ad78d!2sNakhalpara%20Boro%20Jame%20Mosjid!5e0!3m2!1sen!2sbd!4v1595768259760!5m2!1sen!2sbd" style="border:0; width: 100%; height: 400px; border: none; border-radius: 10px;" allowfullscreen></iframe>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section> -->


         <!-- -------------------------------------- -->
        <div class="container-fluid about-us-cont">

        <div class="row">

          <!-- col-md-4 -->
          <div class="col-md-4 mobile-aside">
            <img src="https://res.cloudinary.com/dhe6napl7/image/upload/v1597257755/WuakuhbmvxWrGbO5smgosmNBZtDufDxSAv3WEHbp.gif" class="img-fluid rounded about-img" alt="">
            <a href="/enroll/course" class="glow-on-hover" type="button">
                                <div class="btn-enroll">
                                  ENROLL NOW
                                  <div class="btn2"></div>
                                </div> 
                                </a> 
          </div>
          <!-- col-md-4:END -->

          <!-- col-md-8 -->
          <div class="col-md-8 mobile-right">
            <!-- tabs -->
            <div class="tabs">

              

              <div class="tab-2">
                <label for="tab2-1">Contact Us</label>
                <input id="tab2-1" name="tabs-two" type="radio" checked="checked">
                <div>

                  <div v-if="loading">
                <img src="https://www.jqueryscript.net/images/collective/Placeholder%20loading.gif" alt="">
              </div>
              
                  <!-- content -->
                    <section class="contact-info">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="info-item">
                                <div class="icon">
                                  <i class="fa fa-envelope"></i>
                                </div>
                                <h4>Email Address</h4>
                                <p><a href="">{{ org[3].value }}</a></p>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="info-item">
                                <div class="icon">
                                  <i class="fa fa-phone"></i>
                                </div>
                                <h4>Phone Number</h4>
                                <p><a href="#">{{ org[7].value }}</a></p>
                              </div>
                            </div>
                            <div class="col-lg-4">
                              <div class="info-item">
                                <div class="icon">
                                  <i class="fa fa-map-marker"></i>
                                </div>
                                <h4>Street Address</h4>
                                <p><a href="#">{{ org[4].value }}</a></p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                  <!-- content:END -->
                </div>
              </div>
              <div class="tab-2">
                      <label for="tab2-2">Location</label>
                <input id="tab2-2" name="tabs-two" type="radio">
                <div class="item-content">
                  <section class="map">
                        <div class="container">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="inner-content">
                                <div id="map">
                                  <iframe :src="org[13].value" style="border:0; width: 100%; height: 350px; border: none; border-radius: 10px;" allowfullscreen></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </section>
                </div>
              </div>
            </div>
            <!-- tabs::ENd -->
          </div>
          <!-- col-md-8:END -->

        </div>
        </div>
        <!-- -------------------------------------- -->


       </div>
</template>

<script>
    export default {
        mounted() {
            console.log(getOrg());
        },
        data(){
          return{
            org:[],
            loading: false
          }
        },
        methods:{
          getOrg(){
            this.loading = true;
            // axios.get('http://localhost/hasanik/public/api/org') //base_url
            axios.get('https://app.hasanikenglish.com/api/org') //base_url
            .then(response => this.org = response.data)
            .finally(() => (this.loading = false));
          }
        },
        created(){
          this.getOrg();
        }
        // END
    }
</script>

<style scoped>
.contact-info{
  margin-top: 0 !important;
}

section.map{
  margin-top: 0 !important;
  padding-bottom: 0 !important;
}

.rounded{
  border-radius: 10px;
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
</style>
