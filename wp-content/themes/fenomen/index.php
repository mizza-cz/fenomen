<?php get_header(); ?>
   <!-- ROZHOVORY (2020) -->
   <section class="blog" id="rozhovory">
      <div class="container">
         <div class="blog__inner blog__inner--black">
            <h2 class="title title--white">
            <?php the_field('blog-title__video') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__video') ?>
            </p>
            <div class="blog-videos">


               <?php
            $video_1 = get_field('video_1');
            if( $video_1 ): ?>   
               <div class="video__item">
                  <div class="video__link">
                     <a class="video__link-video" href="#videostory-1" id="videolink">
                        <img class="video__bg" src="<?php echo $video_1['video__bg']; ?>" alt="">
                     </a>
                     <div id="videostory-1" class="mfp-hide" style="max-width: 960px; margin: 0 auto;">
                        <iframe src="<?php echo $video_1['video__link']; ?>" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                        </iframe>
                        <div class="videostory__content--open">
                           <h4 class="video__name">
                           <?php echo $video_1['video__name']; ?>
                              <div class="video__person">
                              <?php echo $video_1['video__person']; ?>
                              </div>
                           </h4>
                           <p class="video__text--open">
                           <?php echo $video_1['video__text']; ?>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="video__info">
                     <h4 class="video__name">
                     <?php echo $video_1['video__name']; ?>
                        <div class="video__person">
                        <?php echo $video_1['video__person']; ?>
                        </div>
                     </h4>

                     <p class="video__text">
                     <?php echo $video_1['video__text']; ?>
                     </p>
                  </div>
               </div>
            <?php endif; ?>

            <?php
            $video_2 = get_field('video_2');
            if( $video_2 ): ?>   
               <div class="video__item">
                  <div class="video__link">
                     <a class="video__link-video" href="#videostory-2" id="videolink">
                        <img class="video__bg" src="<?php echo $video_2['video__bg']; ?>" alt="">
                     </a>
                     <div id="videostory-2" class="mfp-hide" style="max-width: 960px; margin: 0 auto;">
                        <iframe src="<?php echo $video_2['video__link']; ?>" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                        </iframe>
                        <div class="videostory__content--open">
                           <h4 class="video__name">
                           <?php echo $video_2['video__name']; ?>
                              <div class="video__person">
                              <?php echo $video_2['video__person']; ?>
                              </div>
                           </h4>
                           <p class="video__text--open">
                           <?php echo $video_2['video__text']; ?>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="video__info">
                     <h4 class="video__name">
                     <?php echo $video_2['video__name']; ?>
                        <div class="video__person">
                        <?php echo $video_2['video__person']; ?>
                        </div>
                     </h4>

                     <p class="video__text">
                     <?php echo $video_2['video__text']; ?>
                     </p>
                  </div>
               </div>
            <?php endif; ?>

            <?php
            $video_3 = get_field('video_3');
            if( $video_3 ): ?>   
               <div class="video__item">
                  <div class="video__link">
                     <a class="video__link-video" href="#videostory-3" id="videolink">
                        <img class="video__bg" src="<?php echo $video_3['video__bg']; ?>" alt="">
                     </a>
                     <div id="videostory-3" class="mfp-hide" style="max-width: 960px; margin: 0 auto;">
                        <iframe src="<?php echo $video_3['video__link']; ?>" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                        </iframe>
                        <div class="videostory__content--open">
                           <h4 class="video__name">
                           <?php echo $video_3['video__name']; ?>
                              <div class="video__person">
                              <?php echo $video_3['video__person']; ?>
                              </div>
                           </h4>
                           <p class="video__text--open">
                           <?php echo $video_3['video__text']; ?>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="video__info">
                     <h4 class="video__name">
                     <?php echo $video_3['video__name']; ?>
                        <div class="video__person">
                        <?php echo $video_3['video__person']; ?>
                        </div>
                     </h4>

                     <p class="video__text">
                     <?php echo $video_3['video__text']; ?>
                     </p>
                  </div>
               </div>
            <?php endif; ?>

            <?php
            $video_4 = get_field('video_4');
            if( $video_4 ): ?>   
               <div class="video__item">
                  <div class="video__link">
                     <a class="video__link-video" href="#videostory-4" id="videolink">
                        <img class="video__bg" src="<?php echo $video_4['video__bg']; ?>" alt="">
                     </a>
                     <div id="videostory-4" class="mfp-hide" style="max-width: 960px; margin: 0 auto;">
                        <iframe src="<?php echo $video_4['video__link']; ?>" frameborder="0"
                           allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                           allowfullscreen>
                        </iframe>
                        <div class="videostory__content--open">
                           <h4 class="video__name">
                           <?php echo $video_4['video__name']; ?>
                              <div class="video__person">
                              <?php echo $video_4['video__person']; ?>
                              </div>
                           </h4>
                           <p class="video__text--open">
                           <?php echo $video_4['video__text']; ?>
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="video__info">
                     <h4 class="video__name">
                     <?php echo $video_4['video__name']; ?>
                        <div class="video__person">
                        <?php echo $video_4['video__person']; ?>
                        </div>
                     </h4>

                     <p class="video__text">
                     <?php echo $video_4['video__text']; ?>
                     </p>
                  </div>
               </div>
            <?php endif; ?>

            </div>
         </div>
   </section>
   <!-- KRONIKA (2019) -->
   <section class="blog blog--black" id="kronika">
      <div class="container">
         <div class="blog__inner blog__inner--white">
            <h2 class="title title--black">
            <?php the_field('blog-title__kronika') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__kronika') ?>
            </p>
            <?php 
            $link = get_field('btn__shop-1');
            if( $link ): ?>
            <a class="btn" href="<?php echo esc_url( $link ); ?>">KOUPIT</a>
            <?php endif; ?>
            <div id="gallery">
            <?php the_field('gallery_kronika') ?>
            </div>
         </div>
      </div>
   </section>
   <!-- KARTIČKY (2019) -->
   <section class="blog" id="karticky">
      <div class="container">
         <div class="blog__inner blog__inner--black">
            <h2 class="title title--white">
            <?php the_field('blog-title__karticky') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__karticky') ?>
            </p>
            <?php 
            $link = get_field('btn__shop-2');
            if( $link ): ?>
            <a class="btn btn--black" href="<?php echo esc_url( $link ); ?>">KOUPIT</a>
            <?php endif; ?>
            <div id="gallery">
            <?php the_field('gallery_karticky') ?>
            </div>
         </div>
      </div>
   </section>
   <!-- MY SE VRÁTÍME (2017) -->
   <section class="blog blog--black" id="mysevratime">
      <div class="container">
         <div class="blog__inner blog__inner--white">
            <h2 class="title title--black">
            <?php the_field('blog-title__mysevratime') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__mysevratime') ?>
            </p>
            <?php 
            $link = get_field('btn__shop-3');
            if( $link ): ?>
            <a class="btn" href="<?php echo esc_url( $link ); ?>">KOUPIT</a>
            <?php endif; ?>
            <div id="gallery">
            <?php the_field('gallery_mysevratime') ?>
            </div>
         </div>
      </div>
   </section>
   <!-- FENOMÉN VSETÍN PLUS (2014) -->
   <section class="blog" id="plus">
      <div class="container">
         <div class="blog__inner blog__inner--black">
            <h2 class="title title--white">
            <?php the_field('blog-title__vsetinplus') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__vsetinplus1') ?>
            </p>
            <p class="blog__text">
            <?php the_field('blog-text__vsetinplus2') ?>
            </p>
            <div class="movies">


            <?php
            $movie_1 = get_field('movie_1');
            if( $movie_1 ): ?>   
            <div class="movie">
               <div class="movie__number">
               <?php echo $movie_1['movie__number']; ?>
               </div>
               <div class="movie__name">
               <?php echo $movie_1['movie__name-1']; ?>
               <span>
               <?php echo $movie_1['movie__game-1']; ?>
               </span>
               </div>
               <div class="movie__name">
               <?php echo $movie_1['movie__name-2']; ?>
               <span>
               <?php echo $movie_1['movie__game-2']; ?>
               </span>
               </div>
            </div>
            <?php endif; ?>


            <?php
            $movie_2 = get_field('movie_2');
            if( $movie_2 ): ?>   
            <div class="movie">
               <div class="movie__number">
               <?php echo $movie_2['movie__number']; ?>
               </div>
               <div class="movie__name">
               <?php echo $movie_2['movie__name-1']; ?>
               <span>
               <?php echo $movie_2['movie__game-1']; ?>
               </span>
               </div>
               <div class="movie__name">
               <?php echo $movie_2['movie__name-2']; ?>
               <span>
               <?php echo $movie_2['movie__game-2']; ?>
               </span>
               </div>
            </div>
            <?php endif; ?>


            <?php
            $movie_3 = get_field('movie_3');
            if( $movie_3 ): ?>   
            <div class="movie">
               <div class="movie__number">
               <?php echo $movie_3['movie__number']; ?>
               </div>
               <div class="movie__name">
               <?php echo $movie_3['movie__name-1']; ?>
               <span>
               <?php echo $movie_3['movie__game-1']; ?>
               </span>
               </div>
               <div class="movie__name">
               <?php echo $movie_3['movie__name-2']; ?>
               <span>
               <?php echo $movie_3['movie__game-2']; ?>
               </span>
               </div>
            </div>
            <?php endif; ?>


            <?php
            $movie_4 = get_field('movie_4');
            if( $movie_4 ): ?>   
            <div class="movie">
               <div class="movie__number">
               <?php echo $movie_4['movie__number']; ?>
               </div>
               <div class="movie__name">
               <?php echo $movie_4['movie__name-1']; ?>
               <span>
               <?php echo $movie_4['movie__game-1']; ?>
               </span>
               </div>
               <div class="movie__name">
               <?php echo $movie_4['movie__name-2']; ?>
               <span>
               <?php echo $movie_4['movie__game-2']; ?>
               </span>
               </div>
            </div>
            <?php endif; ?>


            <?php
            $movie_5 = get_field('movie_5');
            if( $movie_5 ): ?>   
            <div class="movie">
               <div class="movie__number">
               <?php echo $movie_5['movie__number']; ?>
               </div>
               <div class="movie__name">
               <?php echo $movie_5['movie__name-1']; ?>
               <span>
               <?php echo $movie_5['movie__game-1']; ?>
               </span>
               </div>
               <div class="movie__name">
               <?php echo $movie_5['movie__name-2']; ?>
               <span>
               <?php echo $movie_5['movie__game-2']; ?>
               </span>
               </div>
            </div>
            <?php endif; ?>
         </div>
            <?php 
            $link = get_field('btn__shop-5');
            if( $link ): ?>
            <a class="available" href="<?php echo esc_url( $link ); ?>">Kniha je vyprodaná</a>
            <?php endif; ?>
            <div id="gallery">
            <?php the_field('gallery_vsetinplus') ?>
            </div>
         </div>
      </div>
   </section>
   <!-- FENOMÉN VSETÍN (2011) -->
   <section class="blog blog--black" id="kniha">
      <div class="container">
         <div class="blog__inner blog__inner--white">
            <h2 class="title title--black">
            <?php the_field('blog-title__fenomenvsetin') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__fenomenvsetin') ?>
            </p>
            <ul class="blog__years">
            


            <?php
            $historie_1 = get_field('historie_1');
            if( $historie_1 ): ?>   
               <li class="blog__years-list">
                  <span>
                  <?php echo $historie_1['historie__datum']; ?>
                  </span>
                  <?php echo $historie_1['historie__popis']; ?>
               </li>
            <?php endif; ?>

            <?php
            $historie_2 = get_field('historie_2');
            if( $historie_2 ): ?>   
               <li class="blog__years-list">
                  <span>
                  <?php echo $historie_2['historie__datum']; ?>
                  </span>
                  <?php echo $historie_2['historie__popis']; ?>
               </li>
            <?php endif; ?>

            <?php
            $historie_3 = get_field('historie_3');
            if( $historie_3 ): ?>   
               <li class="blog__years-list">
                  <span>
                  <?php echo $historie_3['historie__datum']; ?>
                  </span>
                  <?php echo $historie_3['historie__popis']; ?>
               </li>
            <?php endif; ?>

            <?php
            $historie_4 = get_field('historie_4');
            if( $historie_4 ): ?>   
               <li class="blog__years-list">
                  <span>
                  <?php echo $historie_4['historie__datum']; ?>
                  </span>
                  <?php echo $historie_4['historie__popis']; ?>
               </li>
            <?php endif; ?>

            </ul>
            <?php 
            $link = get_field('btn__shop-4');
            if( $link ): ?>
            <a class="btn" href="<?php echo esc_url( $link ); ?>">KOUPIT</a>
            <?php endif; ?>
            <div id="gallery">
            <?php the_field('gallery_fenomenvsetin') ?>
            </div>
         </div>
      </div>
   </section>
   <section class="blog" id="about">
      <div class="container">
         <div class="blog__inner blog__inner--black">
            <h2 class="title title--white">
            <?php the_field('blog-title__about') ?>
            </h2>
            <p class="blog__text">
            <?php the_field('blog-text__about1') ?>
            </p>
            <h3 class="about__subtitle">
            <?php the_field('blog-subtitle__about') ?>
            </h3>
            <p class="blog__text">
            <?php the_field('blog-text__about2') ?>
            </p>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>