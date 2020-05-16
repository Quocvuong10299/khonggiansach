<?php
$bannerSlide = [
    [
        'title' => 'Với lịch sử hơn 66 năm của một thương hiệu nệm cao su đạt chất lượng quốc tế, KYMDAN sẽ tiếp tục hợp tác cùng KHÔNG GIAN SẠCH với hơn 3000 đơn hàng đã và đang triển khai.',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/image_1.png',
    ],
    [
        'title' => 'Cùng với KYMDAN, TOTO cũng là thương hiệu tiếp theo chọn đồng hành và gắn bó cùng dịch vụ của KHÔNG GIAN SẠCH.',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/image_2.png',
    ],
    [
        'title' => ' Là một trong những Agency nổi tiếng nhất Việt Nam, Ogilvy Vietnam đã tin tưởng và lựa chọn dịch vụ làm sạch nội thất của KHÔNG GIAN SẠCH.',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/image_3.png',
    ],
    [
        'title' => ' Là một trong những Agency nổi tiếng nhất Việt Nam, Ogilvy Vietnam đã tin tưởng và lựa chọn dịch vụ làm sạch nội thất của KHÔNG GIAN SẠCH.',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/image_1.png',
    ],
    [
        'title' => ' Là một trong những Agency nổi tiếng nhất Việt Nam, Ogilvy Vietnam đã tin tưởng và lựa chọn dịch vụ làm sạch nội thất của KHÔNG GIAN SẠCH.',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/image_2.png',
    ],
]
?>
<div class="banner mb80 position-relative">
    <div class="banner-slick container">
        <?php foreach ($bannerSlide as $banner) {?>
            <div class="banner-item ">
                <div class="">
                    <img style="height: 48px;width: auto" src="<?= $banner['image'] ?>">
                    <h4 class="text-left mt15"><?=$banner['title']?></h4>
                </div>
            </div>
        <?php }?>
    </div>
</div>
