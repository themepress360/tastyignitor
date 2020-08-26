<div class="menu-list">
    <?php if ($menuIsGrouped) { ?>
        <?= partial('@grouped', ['groupedMenuItems' => $menuList]); ?>
    <?php } else { ?>
        <?= partial('@items', ['menuItems' => $menuList]); ?>
    <?php } ?>

    <div class="pagination-bar text-right">
        <div class="links"><?= $menuList->links(); ?></div>
    </div>
</div>
<?php /**PATH /var/www/tastyignitor2/storage/system/templates/a05/c8b/a05c8bc8aabe696c62b4bffe53b9908c.php ENDPATH**/ ?>