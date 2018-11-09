<div class="row align-items-center menu-section anim-300 justify-content-between">
    <div class="col-xl-3 col-lg-3 col-3 anim-300 container-logo-menu pl-15">
       <!-- logo -->
          <div class="logo anim-300">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="logo" class="anim-300 logo-img">
            </a>
          </div>
        <!-- /logo -->
    </div>
    <div class="col-xl-9 col-lg-9 col-9 anim-300 large-menu pr-15 text-right">
        <!-- nav -->
        <nav class="d-flex">
           <?php  nicoleGouaud_nav(); ?>
           <div id="menu-btn">
             <button>
                <span></span>
                <span></span>
                <span></span>
             </button>
             <!-- <span class="text-darkgrey ml-10">MENU</span> -->
          </div>
        </nav>
        <!-- /nav -->
    </div>
</div>
