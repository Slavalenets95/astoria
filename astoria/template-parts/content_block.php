<?php $classes = get_sub_field('css_classes') ?>
<div class="content-block sd <?= $classes ? $classes : '' ?>">
    <div class="container">
        <?= get_sub_field('content') ?>
    </div>
</div>