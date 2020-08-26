<div id="local-box">
    <div class="panel local-search">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-<?= ($hideSearch) ? '12' : '4' ?> mb-3 mb-sm-0">
                    <div id="local-timeslot">
                        <?= partial('@timeslot'); ?>
                    </div>
                </div>
                <?php if (!$hideSearch) { ?>
                    <div class="col-sm-8">
                        <?= partial('@searchbar'); ?>
                    </div>
                <?php } ?>
            </div>
            <?php if (
                $location->requiresUserPosition()
                AND $location->userPosition()->hasCoordinates()
                AND !$location->checkDeliveryCoverage()
            ) { ?>
                <span class="help-block"><?= lang('igniter.local::default.text_delivery_coverage'); ?></span>
            <?php } ?>
        </div>
    </div>

    <?php if ($location->current()) { ?>
        <div class="panel panel-local">
            <div class="panel-body">
                <div class="row boxes">
                    <div class="box-one col-sm-6">
                        <?= partial('@box_one'); ?>
                    </div>
                    <div class="box-divider d-block d-sm-none"></div>
                    <div id="local-box-two" class="box-two col-sm-6">
                        <?= partial('@box_two'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<?php /**PATH /var/www/tastyignitor2/storage/system/templates/b75/9b8/b759b8df17316e7d80a722dfcf093f6b.php ENDPATH**/ ?>