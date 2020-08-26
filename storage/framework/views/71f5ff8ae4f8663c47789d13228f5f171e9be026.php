<?= get_metas(); ?>
<meta name="csrf-token" content="<?= csrf_token() ?>">
<?php if (trim($favicon = $this->theme->favicon, '/')) { ?>
    <link href="<?= uploads_url($favicon); ?>" rel="shortcut icon" type="image/ico">
<?php }
else { ?>
    <?= get_favicon(); ?>
<?php } ?>
<title><?= sprintf(lang('main::lang.site_title'), lang(get_title()), setting('site_name')); ?></title>
<?= get_style_tags(); ?>
<?php if (!empty($this->theme->custom_css)) { ?>
    <style type="text/css" id="custom-css"><?= $this->theme->custom_css; ?></style>
<?php } ?><?php /**PATH /var/www/tastyignitor2/storage/system/templates/f8b/edd/f8bedd8cd539a0c8d7603d29e64cf3b5.php ENDPATH**/ ?>