<footer class="footer">
      <div class="container">
         <div class="footer__inner">
            <h3 class="footer__title">
            <?php the_field('footer__title')?>
            </h3>
            <ul class="footer__social">


            <?php
            $social_1 = get_field('social_1');
            if( $social_1 ): ?>   
               <li class="footer__list">
                  <a class="footer__link" href="<?php echo $social_1['footer__link']; ?>">
                     <img src="<?php echo $social_1['social__icon']; ?>" alt="Facebook">
                     <div class="footer__list-info">
                     <?php echo $social_1['social__nazev']; ?>
                        <span>
                        <?php echo $social_1['social__adresa']; ?>
                        </span>
                     </div>
                  </a>
               </li>
            <?php endif; ?>


            <?php
            $social_2 = get_field('social_2');
            if( $social_2 ): ?>   
               <li class="footer__list">
                  <a class="footer__link" href="mailto:<?php echo $social_2['footer__link']; ?>">
                     <img src="<?php echo $social_2['social__icon']; ?>" alt="mail">
                     <div class="footer__list-info">
                     <?php echo $social_2['social__nazev']; ?>
                        <span>
                        <?php echo $social_2['social__adresa']; ?>
                        </span>
                     </div>
                  </a>
               </li>
            <?php endif; ?>


            <?php
            $social_3 = get_field('social_3');
            if( $social_3 ): ?>   
               <li class="footer__list">
                  <a class="footer__link" href="<?php echo $social_3['footer__link']; ?>">
                     <img src="<?php echo $social_3['social__icon']; ?>" alt="instagram">
                     <div class="footer__list-info">
                     <?php echo $social_3['social__nazev']; ?>
                        <span>
                        <?php echo $social_3['social__adresa']; ?>
                        </span>
                     </div>
                  </a>
               </li>
            <?php endif; ?>


            <?php
            $social_4 = get_field('social_4');
            if( $social_4 ): ?>   
               <li class="footer__list">
                  <a class="footer__link" href="<?php echo $social_4['footer__link']; ?>">
                     <img src="<?php echo $social_4['social__icon']; ?>" alt="LinkedIn">
                     <div class="footer__list-info">
                     <?php echo $social_4['social__nazev']; ?>
                        <span>
                        <?php echo $social_4['social__adresa']; ?>
                        </span>
                     </div>
                  </a>
               </li>
            <?php endif; ?>

            </ul>
            <div class="footer__descr">
            <?php the_field('footer__descr')?>
            </div>
         </div>
      </div>
   </footer>
   <?php wp_footer(); ?>


</body>

</html>