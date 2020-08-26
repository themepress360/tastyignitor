
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?>">
    <header id="main-header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a class="" href="<?= page_url('home'); ?>"><?= $this->page->title ?></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="page-wrapper" class="content-area">
        <?= page(); ?>
    </div>

    <footer id="page-footer">
        <?= partial('footer'); ?>
    </footer>
    <script type="text/javascript" src="<?= asset('app/admin/assets/js/admin.js'); ?>" id="app-js"></script>
    <?= get_script_tags(['ui', 'widget', 'component', 'custom', 'theme']); ?></body>
</html><?php /**PATH /var/www/tastyignitor2/storage/system/templates/ac7/139/ac71391fca71c42ce90b42187b28b6c0.php ENDPATH**/ ?>