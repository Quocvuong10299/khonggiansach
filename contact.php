<?php include 'header.php' ?>
<?php
$banner_top = [
    [
        'image' => KHONGGIANSACH_ROOT_URL.'/images/banner_contact.png',
//        'link' => '#'
    ]
]
?>
<div class="banner position-relative mb70">
    <?php foreach ($banner_top as $item) { ?>
       <div class="">
           <img style="width: 100%; height: 100%" src="<?=$item['image']?>"/>
           <div class="t-bigTitleBanner text-cover-image">
               Liên hệ
           </div>
       </div>
    <?php } ?>
</div>
<!--info contact-->
<div class="container">
    <div class="container1170">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <h1 class="draw-title mt57 position-relative">Thông tin liên hệ</h1>
                <p class="text-p text-left">Bắt đầu từ 2016, KHÔNG GIAN SẠCH đã nhận ra cơ hội để phát triển loạt dịch vụ vệ sinh nội thất chất lượng cao, đáp ứng tiêu chí của người tiêu dùng hiện đại: quy trình đơn giản, làm việc nhanh gọn và chất lượng làm sạch tiêu chuẩn.</br> </p>
                <p class="text-p text-left">Trải qua nhiều cột mốc đáng nhớ, chúng tôi sẽ tiếp tục hoàn thiện dịch vụ để mang đến cho bạn một cuộc sống thoải mái, trong lành hơn trong tương lai!</p>
                <div class="info text-p">
                    <b class="text-left t-blue mr-1">Hotline:</b><a class="text-black" href="tel:1800 6248">0931 34 39 36</a></br>
                    <b class="text-left t-blue mr-1">Tổng đài:</b><a class="text-black" href="tel:1800 6248">1800 6248</a><br>
                    <b class="text-left t-blue mr-1">Địa chỉ:</b>536-538 Hoàng Văn Thụ, Phường 4, Quận Tân Bình.
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003449.685261338!2d106.13470232167776!3d10.755639032674207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529292e8d3dd1%3A0xf15f5aad773c112b!2zSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1589426337826!5m2!1svi!2s" width="100%" height="550px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>

</div>
<!--end info contact-->
<!--send mess for us-->
   <div class="container">
       <div class="container mt70px mb-4">
           <h1 class="draw-title">Để lại lời nhắn cho chúng tôi</h1>
       </div>
       <form class="d-flex flex-column justify-content-center align-items-center">
           <div class="form-group min-w770">
               <label for="name">name</label>
               <input type="text" class="form-control text-black" id="name" placeholder="Họ và tên">
           </div>
           <div class="form-group">
               <label for="Email">Email</label>
               <input type="email" class="form-control text-black" id="Email" placeholder="Email">
           </div>
           <div class="form-group">
               <label for="sdt">SĐT</label>
               <input type="text" class="form-control text-black" id="sdt" placeholder="SĐT">
           </div>
           <div class="form-group">
               <label for="note">Lời nhắn</label>
               <textarea class="form-control text-black" id="note" placeholder="Lời nhắn"></textarea>
           </div>
          <div class="d-flex justify-content-center align-items-center mb80 mt-4">
                  <a href="#" class="btn btn-primary">
                      Gửi
                  </a>
          </div>
       </form>
   </div>
<!--end send mess for us-->
<?php
    @include "./footer.php";
?>