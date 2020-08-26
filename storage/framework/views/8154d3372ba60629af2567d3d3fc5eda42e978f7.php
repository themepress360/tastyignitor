<div class="<?= (!$pageIsCart) ? 'affix-cart d-none d-sm-block' : ''; ?>">
    <div class="panel panel-cart">
        <div class="panel-body">
            <div id="local-control">
                <?= partial('localBox::control'); ?>
            </div>

            <?= partial('cartBox::default'); ?>
        </div>
    </div>
</div>
<?= partial('cartBox::mobile'); ?><?php /**PATH /var/www/tastyignitor2/storage/system/templates/e03/580/e03580c90b1e6f9309b07afc109053ba.php ENDPATH**/ ?>