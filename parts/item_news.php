<div class="product overflow-hidden box-product mb30px">
    <div class="image-product image-cover image-product-hover pt70percent" style="background-image: url(<?=$list['image'] ?>)"></div>
    <div class="p20">
        <div class=""><h5 class="t-blue">NEWS</h5></div>
        <h4 class="box-title-product d-flex justify-content-center align-items-center text-left">
            <a href="#" class="text-black">
                <?= $list['title'] ?>
            </a>
        </h4>
        <p class="text-content-product mt5px">
            <?= $list['title_small'] ?>
        </p>
        <div class="d-flex justify-content-start align-items-center author">
            <h5 class="mr-3 draw-point position-relative"><?=$list['author'] ?></h5>
            <h5><?=$list['day'] ?></h5>
        </div>
    </div>
</div>