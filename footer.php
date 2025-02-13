</article>
    </main>

    <!-- FOOTER
    =================================================== -->
    <article>
      <div class="wrapper footer__banner--gotIt">
        <!-- <img src="img/banner__we-ve_got_it.svg" alt="We've Got It" width="700" height="73"> -->
        <img class="" src="<?php echo get_theme_file_uri(); ?>/img/banner__we-ve_got_it.svg" alt="We've Got It" width="915" height="96">
      </div>
    </article>

    <article class="footer__bar">
      <section class="wrapper footer__barContent">
        <h2>Be on the watch for Savings with our Savings Programs</h2>
        <a href="<?php echo esc_url(site_url( '/savings-programs' ) ); ?>"><div class="btn btn__tertiary">
          Visit Price Drop
        </div></a>
      </section>
    </article>

    <footer id="footer" class="footer" role="contentinfo">

      <h2 class="visually-hidden">Footer</h2>

      <article>
        <section class="wrapper footer__menu">
          <div class="wrapper__footerNavigation">
            <nav class="footer__nav">
              <nav class="footer__nav--about">
                <h2>About</h2>
                <?php
                  wp_nav_menu(array(
                    'theme_location' =>  'footerAboutLocation',
                  ))
                ?>
              </nav>
              <nav class="footer__nav--services">
                <h2>Services</h2>
                <?php
                  wp_nav_menu(array(
                    'theme_location' =>  'footerServicesLocation',
                  ))
                ?>
              </nav>
              <nav class="footer__nav--hhf">
                <h2>Healthy Horizons</h2>
                <?php
                  wp_nav_menu(array(
                    'theme_location' =>  'footerHealthyHorizonsLocation',
                  ))
                ?>
                <!-- <ul>
                  <li><a href="aboutHHF.html">About Healthy Horizons</a></li>
                  <li><a href="#">Success Stories</a></li>
                  <li><a href="#">Apply for Funding</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Contact Healthy Horizons</a></li>
                </ul> -->
              </nav>
              <nav class="footer__nav--community">
                <h2>Community</h2>
                <?php
                  wp_nav_menu(array(
                    'theme_location' =>  'footerCommunityLocation',
                  ))
                ?>
              </nav>

            </nav>
            <nav class="footer__siteNav">
            <?php
                  wp_nav_menu(array(
                    'theme_location' =>  'footerSiteNavigation',
                  ))
                ?>
              <!-- <ul>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Legal & Privacy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Media</a></li>
                <li><a href="#">Accessibility Statement</a></li>
                <li><a href="#">Talk to us</a></li>
              </ul> -->
            </nav>
          </div>
          <div class="footer__social wrapper__social">
            <nav class="footer__socialNav">
              <h2>
                Follow us
              </h2>
              <ul>
                <li><a href="https://www.facebook.com/NorthernStores" target="_blank">
                  <svg class="socialIcon" id="iconFacebook" xmlns="http://www.w3.org/2000/svg" width="28" height="28.056" viewBox="0 0 28 28.056" role="img" >
                    <path class="socialIcon" id="Path_6" data-name="Path 6" d="M31.338,4.956H6.462A1.559,1.559,0,0,0,4.9,6.518V31.394a1.559,1.559,0,0,0,1.562,1.562H19.848V22.135H16.223V17.9h3.625V14.773c0-3.625,2.231-5.578,5.41-5.578s2.845.112,3.235.167v3.793H26.263c-1.729,0-2.064.837-2.064,2.064V17.9h4.183l-.558,4.239H24.2V32.956h7.139A1.559,1.559,0,0,0,32.9,31.394V6.462A1.559,1.559,0,0,0,31.338,4.9" transform="translate(-4.9 -4.9)" fill="#F8F7F4"/>
                  </svg>
                </a></li>
                <li><a href="https://www.youtube.com/@TheNorthWestCompany" target="_blank">
                  <svg class="socialIcon" id="iconYouTube" xmlns="http://www.w3.org/2000/svg" width="28" height="19.19" viewBox="0 0 28 19.19" role="img">
                    <path class="socialIcon" id="Path_5" data-name="Path 5" d="M33.1,28.106a4,4,0,0,1-3.984,3.984H9.084A4,4,0,0,1,5.1,28.106V16.884A4,4,0,0,1,9.084,12.9H29.06a4,4,0,0,1,3.984,3.984V28.106ZM16.154,25.918l7.575-3.928-7.575-3.928Z" transform="translate(-5.1 -12.9)" fill="#F8F7F4"/>
                </svg>
                </a></li>
                <li><a href="https://www.instagram.com/northern_northmart/" target="_blank">  
                  <svg class="socialIcon" id="iconInstagram" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" role="img">
                  <path class="socialIcon" id="Path_7" data-name="Path 7" d="M29.652,16.816H27.244a8.863,8.863,0,0,1,.28,2.128,8.624,8.624,0,0,1-17.248,0c0-4.76.112-1.456.28-2.128H8.148V28.632A1.063,1.063,0,0,0,9.212,29.7h19.32A1.063,1.063,0,0,0,29.6,28.632V16.816Zm0-7.5a1.063,1.063,0,0,0-1.064-1.064H25.34a1.063,1.063,0,0,0-1.064,1.064V12.56a1.063,1.063,0,0,0,1.064,1.064h3.248a1.063,1.063,0,0,0,1.064-1.064ZM18.9,13.624A5.376,5.376,0,1,0,24.276,19,5.377,5.377,0,0,0,18.9,13.624m10.752,19.32H8.148A3.25,3.25,0,0,1,4.9,29.7V8.248A3.25,3.25,0,0,1,8.148,5h21.5A3.25,3.25,0,0,1,32.9,8.248v21.5A3.25,3.25,0,0,1,29.652,33" transform="translate(-4.9 -5)" fill="#F8F7F4" fill-rule="evenodd"/>
                </svg></a></li>
                <li><a href="https://www.linkedin.com/company/northern-northmart/" target="_blank">
                  <svg class="socialIcon" id="iconLinkedin" xmlns="http://www.w3.org/2000/svg" width="27.995" height="28.107" viewBox="0 0 27.995 28.107" role="img">
                  <g id="Group_7" data-name="Group 7">
                      <path class="socialIcon" id="Path_8" data-name="Path 8" d="M5.449,14.413h5.835V33.151H5.449ZM8.366,5.1A3.366,3.366,0,1,1,5,8.466,3.376,3.376,0,0,1,8.366,5.1" transform="translate(-5 -5.1)" fill="#F8F7F4"/>
                      <path class="socialIcon" id="Path_9" data-name="Path 9" d="M22.612,21.349h5.554V23.93h.056a6.173,6.173,0,0,1,5.5-3.03c5.891,0,6.957,3.871,6.957,8.92V40.087H34.843V31c0-2.188,0-4.937-3.03-4.937s-3.478,2.356-3.478,4.825v9.257H22.5V21.349Z" transform="translate(-12.682 -12.036)" fill="#F8F7F4"/>
                  </g>
                </svg>
                </a></li>
                <li><a href="https://x.com/North_West_Co" target="_blank">
                  <svg class="socialIcon" id="iconXTwitter" xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" role="img">
                  <g id="Group_8" data-name="Group 8">
                    <path class="socialIcon" id="Path_10" data-name="Path 10" d="M18.6,17.6l12.914,18H34.5l-12.984-18Z" transform="translate(-12.528 -12.56)" fill="#F8F7F4"/>
                    <path class="socialIcon" id="Path_11" data-name="Path 11" d="M19,5A14,14,0,1,0,33,19,14.005,14.005,0,0,0,19,5Zm3.472,22.176-4.76-6.384-5.88,6.384H10.32l6.72-7.28-6.72-8.96h5.152l4.368,5.88,5.432-5.88h1.512l-6.272,6.776,7.056,9.464H22.416Z" transform="translate(-5 -5)" fill="#F8F7F4"/>
                  </g>
                </svg></a></li>
              </ul>
            </nav>
          </div>
          <div class="footer__info">
            <div class="footer__info--branding">
              <a href="index.html"><img src="<?php echo get_theme_file_uri(); ?>/img/footer_branding.svg" alt="Northern/NorthMart homepage"></a>
            </div>
            <div class="footer__info--copyright">
              <p>Copyright &copy; <?php echo date( 'Y' ); ?> The North West Company - Northern NorthMart</p>
              <!-- <p>Copyright @ 2024 The North West Company - Northern NorthMart</p> -->
            </div>
          </div>
        </section>
      </article>
    </footer>
    <!-- ============================================== -->
  </div>

  <?php wp_footer(); ?>
</body>
</html>