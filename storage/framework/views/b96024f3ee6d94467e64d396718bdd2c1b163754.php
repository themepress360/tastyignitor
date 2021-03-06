
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?>">

    <header class="header">
        <?= partial('header'); ?>
    </header>

    <main role="main">
        <div id="page-wrapper">
            <div class="container">
                <div class="row py-4">
                    <div class="col-sm-2 d-none d-sm-inline-block">
                        <div class="categories affix-categories">
                            <?= component('categories'); ?>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="content">
                            <?= component('localBox'); ?>

                            <?= page(); ?>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <?= partial('cartBox/container'); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="pt-5">
        <?= partial('footer'); ?>
    </footer>
    <div id="notification">
        <?= partial('flash'); ?>
    </div>
    <?= partial('eucookiebanner'); ?>
    <?= partial('scripts'); ?>
</body>
</html><?php /**PATH /var/www/tastyignitor2/storage/system/templates/cac/56c/cac56cb61b57af096c3166b5352b0ee1.php ENDPATH**/ ?>