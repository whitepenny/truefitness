<?php
$main_title = get_bloginfo( 'name' );

$about_title = get_field( 'about_title', 'option' );
$about_content = get_field( 'about_content', 'option' );
$address = get_field( 'address', 'option' );
$tel = get_field( 'telephone', 'option' );
$email = get_field( 'email', 'option' );
$social_links = get_field( 'social_links', 'option' );

?>
        </main>
      </div>

      <footer class="footer">
        <div class="fs-row">
          <div class="fs-cell fs-md-4 fs-lg-3 footer_about_cell">
            <h3 class="footer_about_title"><?php echo $about_title; ?></h3>
            <p class="footer_about_content"><?php echo $about_content; ?></p>
          </div>
          <div class="fs-cell fs-sm-first fs-md-first fs-lg-6 footer_logo_cell">
            <a href="<?php echo get_home_url(); ?>" class="footer_logo">
              <span class="icon logo"></span>
              <span class="screenreader"><?php echo $main_title; ?></span>
            </a>
            <div class="footer_social">
              <?php foreach( $social_links as $sl ) : ?>
                <a class="footer_social_link" href="<?php echo $sl['link']['url'] ?>">
                  <span class="icon <?php echo $sl['service']; ?>"></span>
                  <span class="screenreader"><?php echo $sl['link']['title']; ?></span>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="fs-cell fs-md-2 fs-lg-3 footer_address_cell">
            <h3 class="footer_address_title">Location</h3>
            <p class="footer_address_content">
              <?php echo $address; ?> <br>
              <?php echo $tel; ?>
              <a class="footer_email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
            </p>
          </div>
        </div>
        <div class="fs-row">
          <div class="fs-cell">
            <p class="footer_copyright">&copy; <?php echo date( 'Y' ); ?> All Rights Reserved.</p>
          </div>
        </div>
      </footer>


    </div>

    <?php wp_footer(); ?>

  </body>
</html>
