<?php
$banner_top = [
    [
        'image' => KHONGGIANSACH_ROOT_URL.'/images/banner_1.png',
//        'link' => '#'
    ]
]
?>
<div class="banner position-relative mb70">
            <?php foreach ($banner_top as $item) { ?>
                        <div class="image-banner image-cover image" style="background-image: url(<?= $item['image']?>); width: 100%">
                           <div class="title-banner">
                               <div class="container">
                                   <p class="tf-normal t-titleBanner mb-0">
                                       Nhà ở trong lành
                                   </p>
                                   <div class="d-flex">
                                       <p style="font-size: 38px" class="tf-normal t-titleBanner mr8px ml-5 mb-0">
                                           nhờ
                                       </p>
                                       <h1 class="t-gradientPage mb-0" style="mix-blend-mode: multiply;">
                                           Không Gian Sạch
                                       </h1>
                                   </div>
                                   <div class="line-banner"></div>
                                   <div class="content-top ml-5">
                                       <p class="text-normal-footer t-gray-2"> KHÔNG GIAN SẠCH cung cấp dịch vụ vệ sinh nội thất hàng đầu Việt Nam </p>
                                       <div class="right d-flex align-items-center" style="mix-blend-mode: multiply;">
                                           <a href="#" class="btn btn-primary">
                                               <h6>LIÊN HỆ NGAY</h6>
                                           </a>
                                       </div>
                                   </div>

                               </div>
                           </div>
                        </div>
            <?php } ?>
</div>