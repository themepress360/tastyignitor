<ul class="social-icons list-inline">
    <?php $socialIcons = $this->theme->social ?? []; ?>

    <?php foreach ($socialIcons as $icon) { ?>
        <li>
            <a
                class="p-2 <?= array_get($icon, 'class') ?>"
                target="_blank"
                title="<?= array_get($icon, 'title') ?>"
                href="<?= array_get($icon, 'url') ?>">
            </a>
        </li>
    <?php } ?>
</ul>
<?php /**PATH /var/www/tastyignitor2/storage/system/templates/00a/34d/00a34da09734d585fe52c45d12748495.php ENDPATH**/ ?>