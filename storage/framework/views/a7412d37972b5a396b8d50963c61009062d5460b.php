<?php
$privacyPage = \System\Models\Pages_model::find($this->theme->gdpr_more_info_link)
?>
<div
    id="euCookieBanner"
    data-control="cookie-banner"
    data-active="<?= $this->theme->enable_gdpr ?>"
    style="display:none;"
>
    <div
        style="background-color: <?= $this->theme->gdpr_background_color ?>; color: <?= $this->theme->gdpr_text_color ?>;"
    >
        <div class="container">
            <div class="d-flex align-items-center">
                <p id="eu-cookie-message" class="mb-0">
                    <span><?= $this->theme->gdpr_cookie_message ?></span>
                    <a
                        href="<?= site_url($privacyPage ? $privacyPage->permalink_slug : ''); ?>"
                    ><?= $this->theme->gdpr_more_info_text ?></a>
                </p>
                <a
                    id="eu-cookie-action"
                    class="btn btn-secondary ml-auto"
                    href="javascript:void(0);"
                ><?= $this->theme->gdpr_accept_text ?></a>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/tastyignitor2/storage/system/templates/508/3b7/5083b7a1d9a2ce4825b0d3d26b2bb8ba.php ENDPATH**/ ?>