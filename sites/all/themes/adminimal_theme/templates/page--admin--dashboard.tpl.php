<?php global $base_url; ?>
<div id="branding" class="clearfix">
    <?php print $breadcrumb; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
        <h1 class="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
</div>
<div id="navigation">
    <?php if ($primary_local_tasks): ?>
        <?php print render($primary_local_tasks); ?>
    <?php endif; ?>
    <?php if ($secondary_local_tasks): ?>
        <div class="tabs-secondary clearfix"><ul class="tabs secondary"><?php print render($secondary_local_tasks); ?></ul></div>
    <?php endif; ?>
</div>
<div id="page">
    <div id="content" class="clearfix">
        <div class="element-invisible"><a id="main-content"></a></div>
        <?php if ($messages): ?>
            <div id="console" class="clearfix"><?php print $messages; ?></div>
        <?php endif; ?>
        <?php if ($page['help']): ?>
            <div id="help">
                <?php print render($page['help']); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="item col-md-1 ">
                <a href="<?php echo $base_url . '/admin/custom/custom-settings'; ?>">
                    <div class="icon">
                        <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic1.png">
                    </div>
                    <h3><?php echo t('Settings'); ?></h3>
                </a>
            </div>
            <?php /*
              <div class="item col-md-1 ">
              <a href="<?php echo $base_url . '/admin/custom/content/section'; ?>">
              <div class="icon">
              <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic4.png">
              </div>
              <h3><?php echo t('Sections'); ?></h3>
              </a>
              </div>
              <div class="item col-md-1 ">
              <a href="<?php echo $base_url . '/admin/custom/content/product'; ?>">
              <div class="icon">
              <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic5.png">
              </div>
              <h3><?php echo t('Products'); ?></h3>
              </a>
              </div>
              <div class="item col-md-1 ">
              <a href="<?php echo $base_url . '/admin/custom/content/slider'; ?>">
              <div class="icon">
              <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic3.png">
              </div>
              <h3><?php echo t('Sliders'); ?></h3>
              </a>
              </div>
              <div class="item col-md-1 ">
              <a href="<?php echo $base_url . '/admin/custom/content/testimonial'; ?>">
              <div class="icon">
              <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/certificates.png">
              </div>
              <h3><?php echo t('Testimonials'); ?></h3>
              </a>
              </div>
              <div class="item col-md-1 ">
              <a href="<?php echo $base_url . '/admin/custom/content/widget'; ?>">
              <div class="icon">
              <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic2.png">
              </div>
              <h3><?php echo t('Widgets'); ?></h3>
              </a>
              </div> */ ?>
            <div class="item col-md-1 ">
                <a href="<?php echo $base_url . '/admin/custom/content/mailserver'; ?>">
                    <div class="icon">
                        <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic5.png">
                    </div>
                    <h3><?php echo t('Mailserver'); ?></h3>
                </a>
            </div>
            <div class="item col-md-1 ">
                <a href="<?php echo $base_url . '/admin/people'; ?>">
                    <div class="icon">
                        <img src="<?php echo $base_url . '/' . elsayed_get_admin_theme_path(); ?>/images/pic6.png">
                    </div>
                    <h3><?php echo t('Users'); ?></h3>
                </a>
            </div>
        </div>
        <?php if (isset($page['content_before'])): ?>
            <div id="content-before">
                <?php print render($page['content_before']); ?>
            </div>
        <?php endif; ?>
        <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
        <div id="content-wrapper">
            <?php if (isset($page['sidebar_left'])): ?>
                <div id="sidebar-left">
                    <?php print render($page['sidebar_left']); ?>
                </div>
            <?php endif; ?>
            <?php /* <div id="main-content">
              <?php print render($page['content']); ?>
              </div> */ ?>
            <?php if (isset($page['sidebar_right'])): ?>
                <div id="sidebar-right">
                    <?php print render($page['sidebar_right']); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php if (isset($page['content_after'])): ?>
            <div id="content-after">
                <?php print render($page['content_after']); ?>
            </div>
        <?php endif; ?>
    </div>
    <div id="footer">
        <?php print $feed_icons; ?>
    </div>
</div>
<style type="text/css">
    h3{
        font-weight: bold;
        text-align: center;
    }
    .icon img{
        max-width: 100%;
        max-height: 85px;
    }
</style>