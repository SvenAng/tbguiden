
<!-- Off Canvas Menu -->
<aside class="right-off-canvas-menu">
    <?php print render($page['offcanvas']); ?>
</aside>
<a class="exit-off-canvas"></a>

<!--.page -->
<div role="document" class="page">

    <!--.l-header -->
    <header role="banner" class="l-header">

        <?php if (!empty($page['header'])): ?>

        <!--.l-header-region -->
        <section class="l-header-region">
<!--            <div class="r">-->
                
                <div class="row logo-wrapper">

                    <div class="columns small-2 medium-2">
                        <div class="logo">
                            <?php if ($linked_logo): print $linked_logo; endif; ?>
                        </div>
                    </div>

                    <nav class="tab-bar small-10 medium-10 columns hide-for-large-up">
                        <a class="right-off-canvas-toggle menu-icon" href="#" >
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </nav>

                    <nav class="columns sticky medium-9 main-nav hide-for-medium-down">
                        <?php print render($page['header']); ?>
                    </nav>

                </div>

<!--            </div>-->
        </section>
        <!--/.l-header-region -->
        <?php endif; ?>

    </header>
    <!--/.l-header -->


    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--.l-messages -->
    <section class="l-messages row">
        <div class="columns">
            <?php if ($messages): print $messages; endif; ?>
        </div>
    </section>
    <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
    <!--.l-help -->
    <section class="l-help row">
        <div class="columns">
            <?php print render($page['help']); ?>
        </div>
    </section>
    <!--/.l-help -->
    <?php endif; ?>

    <?php $sokvag = url($_GET['q']);?>

    <!--.l-main -->

    <?php if ((url($_GET['q']) == "/sv/main") || (url($_GET['q']) == "/en/main")) : ?>
    <?php $main_grid_bredd = "row etta-padding medium-centered"; ?>  
    <?php else: ?>
    <?php $main_grid_bredd = "medium-12"; ?>  
    <?php endif; ?>

    <main role="main" class="l-main">
        <!-- .l-main region -->

        <?php if ($title): ?>
        <?php print render($title_prefix); ?>
        <h1 id="page-title" class="title columns small-12 <?php print $main_grid_bredd; ?>"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
        <?php endif; ?>

        <!-- <div class="main"> -->
        <?php if (!empty($page['highlighted'])): ?>
        <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
        </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
        <ul class="action-links">
            <?php print render($action_links); ?>
        </ul>
        <?php endif; ?>

        <?php if (url($_GET['q']) == "/en/node" || url($_GET['q']) == "/sv/node") : ?>
        <!-- vah -->
        <?php else: ?>
        <?php if (!empty($page['content'])): ?>
        <?php print render($page['content']); ?>
        <?php endif; ?>
        <?php endif; ?>
        <!-- </div> -->


        <!--/.l-main region -->


    </main>
    <!--/.l-main -->

    <?php if (!empty($page['level_2_navigation'])): ?>
    <?php if (url($_GET['q']) == "/sv/vibrationer" || url($_GET['q']) == "/en/search-vibration-levels" || url($_GET['q']) == "/en/calculator-air-cleaner") : ?>

    <?php else: ?>
    <!--.l-level_2_navigation -->
    <section class="level-2-navigation">
        <?php print render($page['level_2_navigation']); ?>
    </section>
    <!--/.l-level_2_navigation -->
    <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($page['content_navigation'])): ?>
    <!--.l-content_navigation -->
    <section class="content-navigation">
        <?php print render($page['content_navigation']); ?>
    </section>
    <!--/.l-content_navigation -->
    <?php endif; ?>




    <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>

    <!--.footer-columns -->
    <div class="footer-wrapper">

        <section class="l-footer-columns row">
            <?php if (!empty($page['footer_firstcolumn'])): ?>
            <div class="footer-first small-12 medium-6 columns">
                <?php print render($page['footer_firstcolumn']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn'])): ?>
            <div class="footer-second small-12 medium-6 columns">
                <?php print render($page['footer_secondcolumn']); ?>
            </div>
            <?php endif; ?>

        </section>

        <section class="l-footer-columns-bottom row">
            <?php if (!empty($page['footer_firstcolumn_bottom'])): ?>
            <div class="footer-first medium-6 columns">
                <?php print render($page['footer_firstcolumn_bottom']); ?>
            </div>
            <?php endif; ?>
            <?php if (!empty($page['footer_secondcolumn_bottom'])): ?>
            <div class="footer-second medium-6 columns">
                <?php print render($page['footer_secondcolumn_bottom']); ?>
            </div>
            <?php endif; ?>

        </section>

        <!--.l-footer -->
        <div class="footer-wrapper-bottom">
            <footer class="l-footer row" role="contentinfo">
                <?php if (!empty($page['footer'])): ?>
                <div class="footer columns">
                    <?php print render($page['footer']); ?>
                </div>
                <?php endif; ?>
            </footer>
        </div>
        <!--/.l-footer -->

    </div>
    <!--/.footer-columns-->
    <?php endif; ?>



    <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->

