<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<style>.u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 98px;
}
.u-header .u-image-1 {
  width: 227px;
  height: 64px;
  margin: 24px auto 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -50px 38px 24px auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
  letter-spacing: 0px;
}
.u-header .u-nav-2 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
.u-header .u-nav-3 {
  font-size: 1.25rem;
}
.u-header .u-nav-4 {
  box-shadow: 2px 2px 8px 0 rgba(128,128,128,1);
}
@media (max-width: 1199px) {
  .u-header .u-menu-1 {
    margin-right: 38px;
  }
}</style>
