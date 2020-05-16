<?php include 'header.php' ?>
<?php include './parts/banner.php' ?>
<!--Tab service start-->
<?php
$servicesSectionIndex = [
    'title' => 'Dịch vụ được cung cấp bởi KHÔNG GIAN SẠCH ',
    'title-small' => 'Không chỉ đơn thuần là vệ sinh nội thất, chúng tôi khiến không gian sống và làm việc trở nên sống động hơn!'
];
$servicesIndex = [
    [
        'name' => 'Dịch vụ vệ sinh nệm, thảm, sofa ',
        'price' => '22.000 VND - 550.000 VND',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/bg_1.jpg',
        'title' => ' Vệ sinh nệm, thảm và sofa trả lại nguyên trạng như mới: đảm bảo nội thất sạch sẽ nhưng không làm ảnh hưởng đến màu sắc cũng như độ mềm mại của chất liệu.',
        'button_title' => 'XEM THÊM',
        'button_link' => '#'
    ],
    [
        'name' => 'Vệ sinh sản phẩm khác',
        'price' => '22.000 VND - 330.000 VND',
        'image' => KHONGGIANSACH_ROOT_URL.'/images/bg_2.jpg',
        'title' => 'Làm sạch rèm cửa, ghế ăn/ghế văn phòng, ghế bành, ghế thư giãn,... theo yêu cầu. Dịch vụ được thực hiện nhanh chóng, không ảnh hưởng đến quá trình nghỉ ngơi hay công tác của bạn.',
        'button_title' => 'XEM THÊM',
        'button_link' => '#'
    ]
];
?>
<div class="services mb81">
    <div class="container position-relative d-flex justify-content-center align-items-center">
        <div class="container970">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <h1 class="mb21 t-titleService draw-title">
                    <?=$servicesSectionIndex['title']?>
                </h1>
                <p class="mb50 max570px text-center t-titleSmallService">
                    <?=$servicesSectionIndex['title-small']?>
                </p>
            </div>
            <div class="row">
                <?php foreach ($servicesIndex as $item){ ?>
                    <div class="col-lg-6 col-md-6 col-xl-6 col-12 justify-content-end align-items-center d-flex max470">
                        <?php include './parts/item-service.php'; ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<!--Tab service end-->
<?php
    $serviceImage = [
            'image_service' => KHONGGIANSACH_ROOT_URL.'/images/bg_3.png'
    ];
    $serviceTitle = [
      'title' => 'KHÔNG GIAN SẠCH'."<br>".'Dịch vụ chuyên nghiệp, vệ sinh chất lượng',
    ];
    $serviceList = [
        [
            'title' => 'Đội ngũ nhân viên chuyên nghiệp, có kinh nghiệm lâu năm và cầu toàn, tỉ mỉ trong công việc.',
        ] ,
        [
            'title' => 'Sử dụng hệ thống làm sạch thông minh Rainbow®, được sản xuất bởi tập đoàn Rexair LLC',
        ],
        [
            'title' => 'KHÔNG GIAN SẠCH cung cấp dịch vụ vệ sinh uy tín, kể từ năm 2016 là đối tác của nhiều công ty, nhãn hiệu lớn như KYMDAN, TOTO,...',
        ],
        [
            'title' => 'Luôn đúng giờ, chú tâm vào công việc và thực hiện vệ sinh theo quy trình chuẩn, hiện đại.',
        ]
    ]
?>
<!--Tab intro service-->
<?php
$titleBanner = [
    'big-title' => 'Sở hữu nội thất sạch sẽ, không gian thoáng đãng thật dễ dàng!',
    'small-title'=> 'Chuyên nghiệp - Đúng giờ - Tận tâm - Không nhận tiền TIP',
]
?>
<section>
    <div class="image-cover position-relative" style="background-image: url('http://localhost/Khonggiansach/static/images/background.png')">
       <div class="container">
           <div class="container1240">
               <div class="row">
                   <div class="col-12 col-6 col-sm-12 col-lg-6 col-md-6 col-xl-6 ">
                       <img class="image-cover" src="<?=$serviceImage['image_service']?>">
                   </div>
                   <div class="col-12 col-6 col-sm-12 col-lg-6 col-md-6 col-xl-6">
                       <div class="max592px">
                           <h1 class="draw-title">
                               <?=$serviceTitle['title']?>
                           </h1>
                       </div>

                       <div class="list-item">
                           <?php foreach ($serviceList as $list){
                               ?>
                               <div class="d-flex">
                                   <div class="right d-flex align-items-start mt-2">
                                       <img class="svg mr10px" src="./images/check_list.svg" alt="">
                                   </div>
                                   <p class="text-black list-title"><?= $list['title'] ?></p>
                               </div>
                               <?php
                           } ?>
                           <div class="right d-flex align-items-center justify-content-center mt45 mb110px">
                               <a href="#" class="btn btn-primary">
                                   <h6>TÌM HIỂU THÊM</h6>
                               </a>
                           </div>

                       </div>
                   </div>
               </div>

           </div>
           <div class="banner-2 mb81">
               <div class="container">
                   <div class="banner-2 container970 max-h316">
                       <?php
                       @include('parts/banner2.php');
                       ?>
                   </div>
               </div>

           </div>
       </div>
    </div>
</section>
<!--Tab intro service end-->
<!--Slick slider-->
<div class="position-relative">
    <h1 class="draw-title mt57 position-relative">Đối tác</h1>

   <div class="d-flex justify-content-center align-items-center">
       <div class="container1183">
           <?php
           @include "./parts/banner-doitac.php";
           ?>
       </div>
   </div>
</div>
<!--Slick slider end-->
<!--chinhsach-->
<section>
       <div class="policy">
           <div class="container">
               <div class="container1167">
                   <div class="row">
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                           <h1 class="draw-title">Chính sách dành cho đối tác</h1>
                           <div class="text-big d-flex">
                               <b class="mr-2">100%</b>
                               <h3 class="text-left m-0 mt30 d-flex align-items-center">CÁC ĐỐI TÁC CỦA CHÚNG TÔI ĐỀU RẤT HÀI LÒNG!</h3>
                           </div>
                           <p class="text-p mb18 mt40"> Ngoài dịch vụ tiêu chuẩn chất lượng, KHÔNG GIAN SẠCH còn hỗ trợ MIỄN PHÍ cho đối tác của mình:</p>
                           <div class="max390">
                               <div class="d-flex">
                                   <div class="right d-flex align-items-start mt-2">
                                       <img class="svg mr10px" src="./images/check_list.svg" alt="">
                                   </div>
                                   <p class="text-black list-title">Lọc không khí, khử khuẩn (đặt máy tại văn phòng của đối tác).</p>
                               </div>
                               <div class="d-flex">
                                   <div class="right d-flex align-items-start mt-2">
                                       <img class="svg mr10px" src="./images/check_list.svg" alt="">
                                   </div>
                                   <p class="text-black list-title"> Vệ sinh nệm (dành cho toàn bộ nhân viên đối tác).</p>
                               </div>
                               <div class="d-flex">
                                   <div class="right d-flex align-items-start mt-2">
                                       <img class="svg mr10px" src="./images/check_list.svg" alt="">
                                   </div>
                                   <p class="text-black list-title">Vệ sinh máy lạnh dành riêng cho khách hàng ký hợp đồng cố định.</p>
                               </div>
                           </div>
                           <div class="d-flex align-items-center justify-content-center p45-36 pt44-64">
                               <a href="#" class="btn btn-primary">
                                   <div>Tìm hiểu thêm</div>
                               </a>
                           </div>
                       </div>
                       <div class="col-12 col-md-6 col-lg-6 col-xl-6">
                           <img src="./images/bg_5.png">
                       </div>
                   </div>
               </div>
           </div>
       </div>
</section>
<!--endchinhsach-->
<!--feedback for customer start-->
<section>
    <div class="container">
       <div class="container1170 position-relative">
           <h1 class="draw-title">Khách hàng nhận xét về chúng tôi</h1>
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <p class="text-p max570px text-center">Những review từ khách hàng cũ chính là minh chứng rõ ràng nhất cho chất lượng dịch vụ của chúng tôi </p>
                </div>
            </div>
           <div class="">
               <div class="slick-feedback">
                   <div class="max470 max-h253 box-product mr30px p35 d-flex flex-column align-items-start position-relative">
                       <div class="avt">
                           <img src="./images/avt1.png" alt=""/>
                       </div>
                       <h3 class="text-gradient">Chị Kim Phượng</h3>
                       <h5 class="mb20">Bệnh viện Hùng Vương</h5>
                       <p class="text-p"> “Nhân viên phục vụ chăm sóc chu đáo, tận tình. Dọn dẹp cẩn thận, gọn gàng, nhiệt tình. Siêu tốt!”</p>
                   </div>
                   <div class="max470 max-h253 box-product mr30px p35 d-flex flex-column align-items-start position-relative">
                       <div class="avt">
                           <img src="./images/avt2.png" alt=""/>
                       </div>
                       <h3 class="text-gradient">Chị Vi Vu</h3>
                       <h5 class="mb20">Sun Asterisk Vietnam</h5>
                       <p class="text-p">“Thật sự rất đúng giờ và đội ngũ nhân viên cực kỳ thân thiện. Cảm ơn KHÔNG GIAN SẠCH rất nhiều!” </p>
                   </div>
                   <div class="max470 max-h253 box-product mr30px p35 d-flex flex-column align-items-start position-relative">
                       <div class="avt">
                           <img src="./images/avt1.png" alt=""/>
                       </div>
                       <h3 class="text-gradient">Chị Kim Phượng</h3>
                       <h5 class="mb20">Bệnh viện Hùng Vương</h5>
                       <p class="text-p"> “Nhân viên phục vụ chăm sóc chu đáo, tận tình. Dọn dẹp cẩn thận, gọn gàng, nhiệt tình. Siêu tốt!”</p>
                   </div>
                   <div class="max470 max-h253 box-product mr30px p35 d-flex flex-column align-items-start position-relative">
                       <div class="avt">
                           <img src="./images/avt2.png" alt=""/>
                       </div>
                       <h3 class="text-gradient">Chị Vi Vu</h3>
                       <h5 class="mb20">Sun Asterisk Vietnam</h5>
                       <p class="text-p">“Thật sự rất đúng giờ và đội ngũ nhân viên cực kỳ thân thiện. Cảm ơn KHÔNG GIAN SẠCH rất nhiều!” </p>
                   </div>
               </div>
           </div>
           <div class="">
               <div class="d-flex align-items-center justify-content-center p45-36">
                   <a href="#" class="btn btn-secondary">
                       <b>Xem thêm</b>
                   </a>
               </div>
               <img class="banner_slick" src="./images/banner_2.png" alt=""/>
           </div>



       </div>
    </div>
</section>
<!--feedback for customer end-->
<!--news-->
<section>
    <div class="container pt10percent">
        <div class="container1290">
            <h1 class="draw-title">Tin tức</h1>
            <div class="row mt40">
                <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="product overflow-hidden box-product mb30px max370 max-h480">
                        <img src="./images/image_news_1.jpg" alt=""/>
                        <div class="p20">
                            <div class="mb8"><h5 class="t-blue m-0">NEWS</h5></div>
                            <h3 class="d-flex justify-content-center align-items-center text-left">
                                <a href="#" class="text-black">
                                    Commodo diam hendrerit integer viverra habitant hendrerit quis.
                                </a>
                            </h3>
                            <p class="text-content-product mb8">
                                Cras mauris odio aliquam sed velit. Imperdiet tellus aliquet viverra sed. Non diam gravida senectus mattis dolor. Egestas morbi integer.
                            </p>
                            <div class="d-flex justify-content-start align-items-center author pb20">
                                <h5 class="mr-3 draw-point position-relative">Admin</h5>
                                <h5>19-01-2020</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 max370">
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_2.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_3.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_4.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4 col-xl-4 max370">
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_5.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_6.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex box-product mb30px max-h140">
                        <img class="mr20px" src="./images/image_news_7.jpg"/>
                        <div class="">
                            <h5 class="t-blue mt11_5">NEWS</h5>
                            <h3 class="text-left">
                                <a class="text-black" href="#">Porttitor leo, est feugiat vestibulum lacus ac arcu id.</a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center justify-content-center mt20 mb80">
                <a href="#" class="btn btn-primary">
                    <div>Xem thêm</div>
                </a>
            </div>
        </div>
    </div>
</section>
<!--end news-->
<?php include 'footer.php' ?>
