

<?php get_header();?>
   
   <?php get_template_part('includes/section','content');?>
 
<?php $tecala = get_field('tecala');?>

     <!-- ======= Hero Section ======= -->
     <section id="hero" class="d-flex align-items-start" >
     <div class="container">
           <div class="container">
           <div class="section-title">
         
           <div class="row box-one"  data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200">
               <div class="col-lg-7 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
                 <h1><?php echo $tecala['main_title'];?><strong>Cloud Services.</strong></h1>
                <p><?php echo $tecala['sub_title'];?><p>
              </div>
              <div class="col-lg-5 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
              </div>
         </div>

</div>
</div>
       </div>
   
     </section><!-- End Hero -->


     <?php $exp = get_field('exp');?>

       <!-- ======= Expertise ======= -->
<section id="expertise" class="d-flex align-items-start">
    <div class="container">
        <div class="section-page">
           
           <div class="section-left">
           <div class="row">
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200" >
                  <h6>AREAS OF EXPERTISE</h6>  
                  </div>
                </div> 

                <div class="row">
                
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200" >
                  <h2><?php echo $exp['main_title'];?></h2>
                  <h3><?php echo $exp['sub_title'];?></h3>
                  <p><?php echo $exp['parag'];?></p>
                  </div>
                      
                </div>  
                
                <div class="row">
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
                  <p><?php echo $exp['parag2'];?></p>  
                  </div>
                </div> 
            
          </div>
            
          <div classs="section-center">
              <div class="row">
                
                <div class="col-lg-3 box-one" data-aos="flip-left" data-aos-duration="3000" data-aos-delay="200" >
                <img src="<?php bloginfo('template_directory');?>/assets/img/exp1.png" alt="" class="img-fluid"></a>
                <h4><?php echo $exp['texp1'];?></h4>
                </div>

                <div class="col-lg-3 box-one" data-aos="flip-left" data-aos-duration="3000" data-aos-delay="200" >
                <img src="<?php bloginfo('template_directory');?>/assets/img/exp2.png" alt="" class="img-fluid"></a>
                <h4><?php echo $exp['texp2'];?></h4>  
                </div>

                <div class="col-lg-3" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/exp3.png" alt="" class="img-fluid"></a>
                <h4><?php echo $exp['texp3'];?></h4>  
                </div>

                <div class="col-lg-3" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/exp4.png" alt="" class="img-fluid"></a>
                <h4><?php echo $exp['texp4'];?></h4>   
                </div>

              </div>
          </div>
          
      </div>
  </div>   
</section

><!-- End Expertise -->


<?php $why = get_field('whytecala');?>

<!-- Why Tecala Section -->

<section id="whytecala" class="d-flex align-items-start"  >
    <div class="container">
        <div class="section-page">
           
           <div class="section-left">

           <div class="row">
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200" >
                  <h6>WHY TECALA</h6>  
                  </div>
                </div> 
                    <div class="row">
                  
                    <div class="col-lg-8 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-down" data-aos-duration="3000" data-aos-delay="200" >
                    <h2><?php echo $why['main_title'];?></h2>
                    <h3><?php echo $why['sub_title'];?></h3>
                    <p><?php echo $why['parag'];?></p>
                    </div>
                    <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
                    
                    </div>
                        
                    </div>  
          </div>

        <div class="section-left">
         
         <div class="row">
         
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200" >
           <h5><?php echo $why['one'];?></h5>
           <h4><?php echo $why['onemain'];?></h4>
           <p><?php echo $why['onesub'];?></p>
           </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1">
           </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
           </div>
           
               
         </div>  
         <div class="row">
         
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
            </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200" >
           <h5><?php echo $why['two'];?></h5>
           <h4><?php echo $why['twomain'];?></h4>
           <p><?php echo $why['twosub'];?></p>
           </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
           </div>
           
               
         </div>  
         <div class="row">
         
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200" >
           <h5><?php echo $why['three'];?></h5>
           <h4><?php echo $why['threemain'];?></h4>
           <p><?php echo $why['threesub'];?></p>   
          </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
           </div>
           <div class="col-lg-4 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" >
           
          </div>
           
               
         </div>  
         
        

           </div>
          
                 
      </div>
  </div>   
</section><!-- End Why Tecala -->
   
<?php $bout = get_field('boutcomes');?>

       <!-- ======= Business Outcomes ======= -->
       <section id="boutcomes" class="d-flex align-items-start">
    <div class="container">
        <div class="section-page">
           
           <div class="section-left">
           <div class="row">
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="flip-right" data-aos-duration="3000" data-aos-delay="200" >
                  <h6>BUSINESS OUTCOMES</h6>  
                  </div>
                </div> 
                <div class="row">
                
                  <div class="col-lg-12 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200">
                  <h2><?php echo $bout['main_title'];?></h2>
                  </div>
                      
                </div>  
                
                   
          </div>
            
          <div classs="section-center">
              <div class="row">
                
                <div class="col-lg-3" data-aos="flip-up" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/bout1.png" alt="" class="img-fluid"></a>
                <h4><?php echo $bout['mout1'];?></h4>
                <p><?php echo $bout['sout1'];?></p>
                </div>

                <div class="col-lg-3" data-aos="flip-up" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/bout2.png" alt="" class="img-fluid"></a>
                <h4><?php echo $bout['mout2'];?></h4>  
                <p><?php echo $bout['sout2'];?></p>
                </div>

                <div class="col-lg-3" data-aos="flip-up" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/bout3.png" alt="" class="img-fluid"></a>
                <h4><?php echo $bout['mout3'];?></h4> 
                <p><?php echo $bout['sout3'];?></p> 
                </div>

                <div class="col-lg-3" data-aos="flip-up" data-aos-duration="3000" data-aos-delay="200">
                <img src="<?php bloginfo('template_directory');?>/assets/img/bout4.png" alt="" class="img-fluid"></a>
                <h4><?php echo $bout['mout4'];?></h4> 
                <p><?php echo $bout['sout4'];?></p>  
                </div>

              </div>
          </div>
          
      </div>
  </div>   
</section

><!-- End Business Outcomes -->


<?php $contact = get_field('contact');?>

 <!-- ======= Contact Us ======= -->
 <footer id="contactus">
<div class="container" >
    <div class="section-footer">
      

                  <div class="section-center">
                          <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000" data-aos-delay="200">
                            <div class="col-lg-12">
                              <h2><?php echo $contact['main_title'];?></h2>
                              <h5><?php echo $contact['sub_title'];?></h5>
                            </div>
                          </div>
                          
                  </div>

            <div class="section-center">
              <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-2">
                </div>
                <div class="col-lg-3 col-md-4" data-aos="fade-left" data-aos-duration="3000" data-aos-delay="200">
                <a class="footer-started" href="tel:1300"><?php echo $contact['button1'];?>Call 1300 TECALA</a>
                </div>
                <div class="col-lg-3 col-md-4" data-aos="fade-right" data-aos-duration="3000" data-aos-delay="200">
                <a class="footer-contact" href="#hero"><?php echo $contact['button2'];?>Let's begin</a>
                </div>
                <div class="col-lg-3 col-md-2">
                </div>
              </div>
          </div>
</div>
        </div>

          


  </div>
</div>

</footer><!-- End Footer -->
  
   
     <?php get_footer();?>