<?php get_header(); ?>
<main class="container">
            <section>
                <article>
                    <section class="section-background" style="background-image: url('<?php the_field("hero_image"); ?>');">
                        <div class="sqs-block-content">
                            <h1 class="online"> <?php the_field("hero_text"); ?></h1>
                        <div class="sqs-button-element">
                          <a class="first" href="<?php the_field("url_button"); ?>">
                            <?php the_field("hero_button"); ?>
                          </a>
                        </div>
                    </div>
                    </section>
                </article>
            </section>
            <div class="content">
              
                <!-- <div class="col col-span sqs-col-6 span-6"> -->
              
                </div>
                <div class="col sqs-col-6 span-6">
                <?php the_content(); ?>
                </div>
            </div>
            <div class="content-wrapper">
                <div class="content-wra">
                    <div class="sqs-block-image-block sqs-block-image">
                        <div class="image-block-first"> 
                          <img class="block-image" src="<?php the_field("image-overlay"); ?> " alt="mathme math tutors 1" />
                          <!-- <img class="block-image" src="./mathme+math+tutors+1.jpeg" alt="mathme math tutors 1.jpeg"> -->
                        </div>
                       
                        <div class="sqs-text-ready">
                          <h2 style="white-space:pre-wrap;"><?php the_field("sections_title_first"); ?></h2>
                          <p class="sqsrte-large"><?php the_field("sections_paragraf"); ?></p>
                      </div>  
                    </div>
                    </div>
                     <div class="content-wra">
                    <div class="sqs-block-image-block sqs-block-image">
                    <div class="sqs-text-ready"> 
                        <h2 style="white-space:pre-wrap;"><?php the_field("sections_title_second"); ?></h2>
                        <p class="sqsrte-large" style="white-space:pre-wrap;"><?php the_field("sections_paragraf_second"); ?></p>
                    </div>
                      <div class="image-block-first"> 
                        <img class="block-image" src="<?php the_field("image_overlay_second"); ?>" alt="mathme math tutors 1.jpeg">  
                      </div>  
                    </div>
                </div>
                <div class="content-wra-button">
                <div class="sqs-button-learn">
                    <a class="learn" href=<?php the_field("content_url_button"); ?>><?php the_field("content_button"); ?></a>
                </div>
                </div>
            </div>
            <div class="page-section">
                <div class="text-section-background">
                    <div class="text-content-wrapper">
                        <div class="row col sqs-col-12 span-12">
                            <div class="sqs-block html-block sqs-block-html">
                                <div class="block-content">
                                    <div class="white-space:pre-wrap"><h2><?php the_field("content_titel_wrapper"); ?></h2></div>
                                </div>
                            </div>
                        </div>
                        <div class="row sqs-row">
                            <div class="col sqs-col-6 span-6">
                                <div class="sqs-block html-block sqs-block-html">
                                    <div class="block-content">
                                        <p class="sqsrte-large"><?php the_field("content_title_paragraph_left"); ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col sqs-col-6 span-6">
                                <div class="sqs-block html-block sqs-block-html">
                                    <div class="block-content">
                                        <p class="sqsrte-large"><?php the_field("content_title_paragraph_right"); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-section">
                <div class="text-section-background" style="background-color: #002060;">
                    <div class="row sqs-row" style="color: white;">
                        <div class="col sqs-col-6 span-6">
                            <div class="white-space:pre-wrap"><h2>Want to know more?</h2></div>
                            <p class="sqsrte-large" style="white-space:pre-wrap;">Please contact us with any questions.</p>
                       
                        <div class="content-wra-button">
                            <div class="sqs-button">
                                <a class="button learn" href="#">Contact us</a>
                            </div>

                            </div>
                        </div class="col sqs-col-6 span-6">
                            <div class="sqs-block-content">
                            <p class="sqsrte-large" style="white-space:pre-wrap;"><strong>Email</strong><br>admin@mathme.com.au<br><br><strong>Phone</strong><br>0431 212 111</p>
                            <div class="header-actions">
                              <a href="https://www.facebook.com/mathme.com.au" target="_blank"><svg id="facebook-unauth-icon"  viewBox="0 0 64 64" width="110" height="110" style="width: 61px;" fill="white" ><path d="M34.1,47V33.3h4.6l0.7-5.3h-5.3v-3.4c0-1.5,0.4-2.6,2.6-2.6l2.8,0v-4.8c-0.5-0.1-2.2-0.2-4.1-0.2 c-4.1,0-6.9,2.5-6.9,7V28H24v5.3h4.6V47H34.1z"></path></svg></a>                   
                            </div>   
                        
                            

                    </div>

                </div>
            </div>
<?php get_footer(); ?>