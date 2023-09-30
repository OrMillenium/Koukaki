<div class="swiper mySwiper">
                       <div class="swiper-wrapper">
                            <?php while ($characters_query->have_posts()) : $characters_query->the_post(); ?>
                              <div class="swiper-slide">
                                     <?php
                                         $image_url = get_post_meta(get_the_ID(), '_character_image_url', true);
                                        $character_name = get_the_title();
                                     ?>

                                         <img src="<?php echo $image_url; ?>" alt="<?php echo $character_name; ?>" />
                                         <p><?php echo $character_name; ?></p>

                                </div>
                                     <?php endwhile; ?>
                       </div>
                             <div class="swiper-pagination"></div>
                    </div>
                </div>
            </article>

         <?php wp_reset_postdata(); ?>
