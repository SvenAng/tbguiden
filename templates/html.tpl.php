<?php

/**
 * @file
 * Default theme implementation to display the basic html structure of a single
 * Drupal page.
 *
 * Variables:
 * - $css: An array of CSS files for the current page.
 * - $language: (object) The language the site is being displayed in.
 *   $language->language contains its textual representation.
 *   $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
 * - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
 * - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
 * - $head_title: A modified version of the page title, for use in the TITLE
 *   tag.
 * - $head_title_array: (array) An associative array containing the string parts
 *   that were used to generate the $head_title variable, already prepared to be
 *   output as TITLE tag. The key/value pairs may contain one or more of the
 *   following, depending on conditions:
 *   - title: The title of the current page, if any.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site, if any, and if there is no title.
 * - $head: Markup for the HEAD section (including meta tags, keyword tags, and
 *   so on).
 * - $styles: Style tags necessary to import all CSS files for the page.
 * - $scripts: Script tags necessary to load the JavaScript files and settings
 *   for the page.
 * - $page_top: Initial markup from any modules that have altered the
 *   page. This variable should always be output first, before all other dynamic
 *   content.
 * - $page: The rendered page content.
 * - $page_bottom: Final closing markup from any modules that have altered the
 *   page. This variable should always be output last, after all other dynamic
 *   content.
 * - $classes String of classes that can be used to style contextually through
 *   CSS.
 *
 * @see template_preprocess()
 * @see template_preprocess_html()
 * @see template_process()
 */
?>
<!DOCTYPE html>
<!-- Sorry no IE7 support! -->
<!-- @see http://foundation.zurb.com/docs/index.html#basicHTMLMarkup -->

<!--[if IE 8]><html class="no-js lt-ie9" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>"> <!--<![endif]-->

<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

<style>
* {
  margin: 0;
  padding: 0; 
}

/* Icon 1 */

a.menu-icon {
  width: 60px;
  height: 45px; 
  position: relative;
  display: block;
  /*margin: 50px auto; */  
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
}

a.menu-icon span{
  position: absolute;
  height: 9px;
  width: 100%;
  background: red;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}

/* Icon 3 */

a.menu-icon span:nth-child(1) {
  top: 0px;
}

a.menu-icon span:nth-child(2),a.menu-icon span:nth-child(3) {
  top: 18px;
}

a.menu-icon span:nth-child(4) {
  top: 36px;
}

a.menu-icon.open span:nth-child(1) {
  top: 18px;
  width: 0%;
  left: 55%;
}

a.menu-icon.open span:nth-child(2) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

a.menu-icon.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

a.menu-icon.open span:nth-child(4) {
  top: 18px;
  width: 0%;
  left: 55%;
}
  </style>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

  <div class="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  
      <div class="page-wrapper">
        <?php print $page_top; ?>

        <?php print $page; ?>
      </div>
    
    <?php print $page_bottom; ?>
    <?php print _zurb_foundation_add_reveals(); ?>
  
  <script>
    (function ($, Drupal, window, document, undefined) {
      $(document).foundation();
    })(jQuery, Drupal, this, this.document);
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="http://tb-guiden.monoclick-dev.se/BuildTbGuiden_en/js/iframeResizer.min.js"></script>
    <script type="text/javascript">
    iFrameResize({
        log                     : true,                  // Enable console logging
        inPageLinks             : true,
        resizedCallback         : function(messageData){ // Callback fn when resize is received
          $('p#callback').html(
            '<b>Frame ID:</b> '    + messageData.iframe.id +
            ' <b>Height:</b> '     + messageData.height +
            ' <b>Width:</b> '      + messageData.width +
            ' <b>Event type:</b> ' + messageData.type
          );
        },
        messageCallback         : function(messageData){ // Callback fn when message is received
          $('p#callback').html(
            '<b>Frame ID:</b> '    + messageData.iframe.id +
            ' <b>Message:</b> '    + messageData.message
          );
          alert(messageData.message);
          document.getElementsByTagName('iframe')[0].iFrameResizer.sendMessage('Hello back from parent page');
        },
        closedCallback         : function(id){ // Callback fn when iFrame is closed
          $('p#callback').html(
            '<b>IFrame (</b>'    + id +
            '<b>) removed from page.</b>'
          );
        }
      });

    </script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
  $(document).ready(function(){
  $('.menu-icon').click(function(){
    $(this).toggleClass('open');
  });
  $('.exit-off-canvas').click(function(){
    $('.menu-icon').removeClass('open');
  });
});

</script>
  </div>
  </div>
</body>
</html>
