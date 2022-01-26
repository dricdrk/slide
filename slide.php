<?php 
/*
Plugin Name: Slide
Plugin URI: 
Description: Plugin juste pour afficher un seul slide avec trois bouttons ou plus si vous voulez .
Author: Cédric HOUNNOU
Version: 1.1.1
Requires at least: 4.5
License: GPLv2 or later
*/
function makeSlide(){
 ?>
 <style type="text/css">
.content-area .btn.btn-outline{
    color: rgba(30, 58, 213, 0.97);
    border: 2px solid rgba(30, 58, 213, 0.97);
}
.content-area .btn.btn-outline:hover {
    color: rgba(30, 58, 213, 0.97);
    border: 2px solid rgb(39, 165, 41);
}
@media only screen and (max-device-width:700px){
.carousel-captione {
  margin-top: 5%;
  /*display: inline-block;*/
  width :60%;
  margin-left: 15%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: center;
  }
.mobileShow{
  height: 300px !important;
  width: 110%;
  }

.mobileShowBtn{
  margin-top: 10%;
  display: block;
  text-align: center;
  /*margin : auto;*/
  width: 90%;
  margin-left: 6%;
  margin-right:6%;
  }
}
@media only screen and (min-width: 700px) and (max-width: 1024px){
  .withSlide{
    margin-top: -1%;
    width: 75%;
    /*border: 1px solid red;*/
    margin-bottom: 4%;
  }
  .carousel-captione {
  position: absolute;
  top: 15%;
  right: 45.5%;
  bottom: 1.25rem;
  left: 5%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: left;
  /*border: 1px solid red;*/
}
.carousel-inner{
  margin-left: -3%;
}

.mobileShowBtn{
  font-size: 80%;
  /*margin-top: 10%;
  display: block;
  text-align: left;
  width: 90%;
  margin-left: 6%;
  margin-right:6%;*/
  }
}
@media all and (min-width:1024px){
  .carousel-captione {
  position: absolute;
  top: 30%;
  right: 53.5%;
  bottom: 1.25rem;
  left: 8%;
  padding-top: 1.25rem;
  padding-bottom: 1.25rem;
  color: #fff;
  text-align: left;
  /*border: 1px solid red;*/
}
}


.d-nonee {
  display: none !important;
}
.d-md-blocke {
    display: block !important;
  }
</style>
<div style="margin-left: -100px; margin-right: -107px; padding-left: 0px; padding-right: 0px; border-left: 0px none; border-right: 0px none;">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://ticaregroup.ticagrobusiness.com/wp-content/uploads/2021/01/WhatsApp-Image-2021-01-28-at-10.27.31-AM.jpeg" class="mobileShow" style="height: 500px;width: 100% !important" alt="...">
      <div class="carousel-captione d-nonee d-md-blocke">
        <div class="withSlide" >
        <h5 style="color: blue;font-size:2rem; ">Réimaginer la Santé en Afrique grâce au savoir faire africain et aux innovations technologiques</h5>
        <p style="color: black;">Tic@re group, une plateforme de spécialistes africains d’Afrique et de la diaspora engagés dans le mieux être en Afrique</p>
        </div>
        <div class="mobileShowBtn">
        <button type="button" class="btn btn-outline mobileShowBtn">Informer</button>
        <button type="button" class="btn btn-outline mobileShowBtn">Accompagner</button>
        <button type="button" class="btn btn-outline mobileShowBtn">Améliorer le mieux être</button>
        </div>
        
      </div>
    </div>   
  </div>    
</div>
</div>
<?php }
// [slide_ticare]
//code pour le shortcode
add_shortcode('slide_ticare', 'makeSlide');

 ?>
