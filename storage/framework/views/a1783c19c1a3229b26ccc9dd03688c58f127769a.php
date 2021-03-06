<?php foreach (Flash::all() as $message) { ?>
    <?php if ($message['overlay']) { ?>
        <div
            data-control="flash-overlay"
            data-title="<?= array_get($message, 'title') ?>"
            data-text="<?= array_get($message, 'message') ?>"
            data-icon="<?= $message['level']; ?>"
            data-close-on-click-outside="<?= $message['important'] ? 'false' : 'true'; ?>"
            data-close-on-esc="<?= $message['important'] ? 'false' : 'true'; ?>"
        ></div>
    <?php }
    else { ?>
        <div
            class="alert alert-<?= $message['level']; ?><?= $message['important'] ? ' alert-important' : ''; ?>"
            data-control="flash-message"
            data-allow-dismiss="<?= $message['important'] ? 'false' : 'true'; ?>"
            role="alert"
        ><?= $message['message']; ?></div>
    <?php } ?>
<?php } ?>
<?php /**PATH /var/www/tastyignitor2/storage/system/templates/6b7/ac6/6b7ac61523e1e31a17c56e99fbfb642b.php ENDPATH**/ ?>