<nav class="navbar navbar-light navbar-top navbar-expand-md fixed-top">
    <div class="container">
        <?= partial('nav/logo'); ?>
        <button
            class="navbar-toggler border-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarMainHeader"
            aria-controls="navbarMainHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
        ><span class="navbar-toggler-icon"></span></button>

        <div class="justify-content-end collapse navbar-collapse" id="navbarMainHeader">
            <?= partial('nav/main_menu', ['items' => $mainMenu->menuItems()]); ?>
        </div>
    </div>
</nav><?php /**PATH /var/www/tastyignitor2/storage/system/templates/196/e9d/196e9d1419607b9c07528c6422fb9175.php ENDPATH**/ ?>