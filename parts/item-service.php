<div class="overflow-hidden text-center box-shadow-service">
    <div class="w-100 image-cover pt60percent mb16" style="background-image: url(<?=$item['image'] ?>)"></div>
    <h3 class="t-titleCard">
        <a href="#" class="text-black h3-title">
            <?= $item['name'] ?>
        </a>
    </h3>
    <div class="container-fluid">
        <h4>
            <?= $item['title'] ?>
        </h4>
    </div>
    <div class="d-flex flex-wrap align-items-center justify-content-center">
        <p class="t-priceCard mr-2">
            <?= $item['price'] ?>
        </p>
    </div>
    <div class="d-flex align-items-center justify-content-center mb35" style="mix-blend-mode: multiply;">
        <a href="<?php echo $item['button_link'] ?>" class="btn btn-primary">
            <?= $item['button_title'] ?>
        </a>
    </div>
</div>
<div class="container970">

</div>