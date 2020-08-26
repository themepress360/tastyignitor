<?php $locationIsClosed = ($cartBox->locationIsClosed() OR $cartBox->hasMinimumOrder()); ?>
<button
    class="checkout-btn btn btn-primary <?= ($locationIsClosed) ? 'disabled' : ''; ?> btn-block btn-lg"
    data-attach-loading="disabled"
    <?php if ($pageIsCheckout AND !$locationIsClosed) { ?>
        data-checkout-control="confirm-checkout"
        data-request-form="#checkout-form"
    <?php } else if (!$locationIsClosed) { ?>
        data-request="<?= $checkoutEventHandler; ?>"
        data-request-data="locationId: '<?= $location->getId() ?>'"
    <?php } ?>
><?= $cartBox->buttonLabel(); ?></button><?php /**PATH /var/www/tastyignitor2/storage/system/templates/c16/cc7/c16cc7ec6bce537c2b0fc02e8eba23ec.php ENDPATH**/ ?>