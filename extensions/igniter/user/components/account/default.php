<div class="card mb-1">
    <div class="card-body">
        <h5 class="mb-0"><?= sprintf(lang('igniter.user::default.text_welcome'), $customer->first_name); ?></h5>
    </div>
</div>

<div class="card-group mb-1">
    <div class="card mr-sm-1">
        <div class="card-body">
            <?php if (!empty($customer->address)) { ?>
                <h5 class="font-weight-normal">
                    <?= lang('igniter.user::default.text_default_address'); ?>
                    <a
                        class="edit-address pull-right"
                        href="<?= site_url('account/address/'.$customer->address->getKey()); ?>"
                    ><?= lang('igniter.user::default.text_edit'); ?></a>
                </h5>
                <address class="text-left text-overflow"><?= format_address($customer->address); ?></address>
            <?php }
            else { ?>
                <p><?= lang('igniter.user::default.text_no_default_address'); ?></p>
            <?php } ?>
        </div>
    </div>

    <div class="card">
        <div class="card-body text-center">
            <p><i class="fa fa-shopping-basket fa-3x text-muted"></i></p>
            <?php if ($__SELF__->cartCount()) { ?>
                <p><?= sprintf(lang('igniter.user::default.text_cart_summary'), $__SELF__->cartCount(), currency_format($__SELF__->cartTotal())); ?></p>
                <a class="btn btn-primary" href="<?= site_url('checkout/checkout'); ?>">
                    <?= lang('igniter.user::default.text_checkout'); ?>
                </a>
            <?php }
            else { ?>
                <p><?= lang('igniter.user::default.text_no_cart_items'); ?></p>
                <a class="btn btn-light" href="<?= restaurant_url('local/menus'); ?>">
                    <?= lang('igniter.user::default.text_order'); ?>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <h5 class="font-weight-normal mb-3"><?= lang('igniter.user::default.text_edit_details') ?></h5>
        <?= partial('@settings'); ?>
    </div>
</div>
