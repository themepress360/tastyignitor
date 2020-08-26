<div class="menu-items">
    <?php if (count($menuItems)) { ?>
        <?php foreach ($menuItems as $menuItem) { ?>
            <?= partial('@item', ['menuItem' => $menuItem]); ?>
        <?php } ?>
    <?php }
    else { ?>
        <p><?= lang('igniter.local::default.text_empty'); ?></p>
    <?php } ?>
</div>
<?php /**PATH /var/www/tastyignitor2/storage/system/templates/05d/75e/05d75e9e2c4d628e28bc5e221e766189.php ENDPATH**/ ?>