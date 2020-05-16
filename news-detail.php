<?php
include ('./header.php')
?>
<?php
$banner_top = [
    [
        'image' => KHONGGIANSACH_ROOT_URL.'/images/banner_new_detail.png',
        'time' => 'Jan 15, 2020'
    ]
]
?>
<!--start banner-->
<div class="banner position-relative mb70">
    <?php foreach ($banner_top as $item) { ?>
        <div class="w-100">
            <img class="image-cover" style="width: 100%; height: 100%" src="<?=$item['image']?>"/>
            <div class="container770 text-banner">
                <h1 class="text-left text-white">Nunc, in accumsan vulputate elementum lacus, proin diam elit condimentum est, convallis</h1>
                <h4 class="text-left text-white"><?=$item['time']?></h4>
            </div>

        </div>
    <?php } ?>
</div>
<!--end banner-->
<!--content first start-->
<div class="container">
    <div class="content-news-detail container770 m-auto">
        <p class="text-p"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eget posuere dolor. In porta malesuada velit, id luctus leo rhoncus eu. Cras sit amet ipsum nec velit pellentesque maximus eu rutrum metus. Aliquam ac neque nec nisl commodo ultrices. Nunc blandit in lorem congue pulvinar. Sed quis felis sed arcu semper consectetur.</b></p>
        <p class="text-p">Vestibulum eleifend pellentesque dignissim. Duis vel ipsum vitae est faucibus finibus eget et nibh. Nulla porta pharetra quam nec malesuada. Integer at dui interdum, scelerisque lectus at, fermentum tortor. Cras lobortis, arcu id facilisis vulputate, leo libero lobortis orci, id consectetur mi leo vel nisl. Maecenas ut velit sed dui feugiat hendrerit. Praesent tempor aliquam sem ac sollicitudin. Integer purus sapien, tincidunt id tortor vitae, dapibus mollis nisi. In eleifend accumsan dolor ac molestie. Cras auctor aliquam lectus eget consequat. Morbi pretium mi massa, nec pretium mauris elementum ac. Aliquam fringilla eleifend sagittis. Vestibulum et tempus ex. Aenean tincidunt auctor sapien. Integer condimentum nibh tempus massa condimentum pellentesque.</p>
    </div>
   <div class="">
       <div class="container970" style="margin: 0 auto">
          <img src="./images/bg_1_new_detail.jpg" alt="">
       </div>
   </div>

    <div class="container770 m-auto">
        <p class="text-p"><b>Lorem ipsum dolor sit amet</b></p>
        <p class="text-p">Consectetur adipiscing elit. Mauris eget posuere dolor. In porta malesuada velit, id luctus leo rhoncus eu. Cras sit amet ipsum nec velit pellentesque maximus eu rutrum metus. Aliquam ac neque nec nisl commodo ultrices. Nunc blandit in lorem congue pulvinar. Sed quis felis sed arcu semper consectetur.</p>
        <p class="text-p">Vestibulum eleifend pellentesque dignissim. Duis vel ipsum vitae est faucibus finibus eget et nibh. Nulla porta pharetra quam nec malesuada. Integer at dui interdum, scelerisque lectus at, fermentum tortor. Cras lobortis, arcu id facilisis vulputate, leo libero lobortis orci, id consectetur mi leo vel nisl.</p>
    </div>

    <div class="">
        <div class="container970" style="margin: 0 auto">
            <img src="./images/bg_2_new_detail.jpg" alt="">
        </div>
    </div>
<!--content 2-->
   <section>
       <div class="justify-content-center align-items-start">
          <div class="container d-flex justify-content-center align-items-center flex-column">
              <div class="container770">
                  <div class="text-black">
                      <h1>H1 Pellentesque nisi libero, elementum at venenatis ac, fringilla quis enim.</h1>
                      <h2>H2 Donec vel metus commodo, lobortis augue vel.</h2>
                      <h3>H3 Proin id dolor non nibh pharetra malesuada.</h3>
                      <h4> H4 Nulla justo velit, lobortis et nisi eu, hendrerit vulputate mauris.</h4>
                      <h5>H5 Phasellus at nunc et mauris accumsan fringilla.</h5>

                      <p> Body In rhoncus leo vitae purus hendrerit, nec dictum ligula tristique. Body small Eu nascetur vitae tortor elit id fames ut quis sed convallis cursus.</p>
                  </div>
                  <div class="position-relative">
                      <p class="text-p line-left-column p-3">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin finibus, libero ac cursus eleifend, purus orci pellentesque neque, et blandit turpis nibh faucibus nibh. Donec vel ultrices urna. Mauris elementum tristique justo, ut rutrum tortor lacinia vel. Curabitur non sapien ut turpis interdum molestie vitae at neque. Nunc placerat volutpat tincidunt. Nam rutrum eleifend rutrum. Duis imperdiet tempor quam non interdum. Nam eros eros, tincidunt eu eleifend quis, aliquam et erat. Donec mattis suscipit magna, mattis volutpat justo sodales a. Praesent nec volutpat mi. Proin varius posuere malesuada.</p>
                  </div>
                  <div class="">
                      <ul>
                          <li class="text-p"> Ut eu rhoncus turpis. Suspendisse aliquam odio in augue tristique, at euismod.</li>
                          <li class="text-p"> Ut eu rhoncus turpis. Suspendisse aliquam odio in augue tristique, at euismod.</li>
                          <li class="text-p"> Ut eu rhoncus turpis. Suspendisse aliquam odio in augue tristique, at euismod.</li>
                      </ul>
                      <ul>
                          <li class="text-p">1. Sed luctus id nibh sit amet tincidunt. Donec a est nec sapien volutpat cursus ac.</li>
                          <li class="text-p">2. Sed luctus id nibh sit amet tincidunt. Donec a est nec sapien volutpat cursus ac.</li>
                          <li class="text-p">3. Sed luctus id nibh sit amet tincidunt. Donec a est nec sapien volutpat cursus ac.</li>
                      </ul>
                  </div>
              </div>
          </div>
       </div>
   </section>
<!--    end content 2-->
<!--    line-->
    <div class="hr_gray mt40 mb45 mb90"></div>
<!--    end line-->
    <section>
        <div class="container">
            <div class="container770 mb45" style="margin: 0 auto">
                <div class="justify-content-center d-flex align-items-center">
                    <img src="./images/Screenshot.jpg" alt=""/>
                </div>
            </div>
        </div>
    </section>
</div>
<!--content first end-->
<!--relate post-->
<section>
    <div class="container mt80px">
        <div class="container910 position-relative">
            <h1 class="draw-title">Bài viết liên quan</h1>
            <div class="relate_post_slick">
                <div class="d-flex max370 max-h140 box-product mr30px">
                    <img style="max-width: 140px; max-height: 140px" src="./images/image_news_2.jpg" alt=""/>
                    <div class=" max190 ml-2 mt11_5">
                        <h5 class="t-blue m-0">NEWS</h5>
                        <h3 class="text-left">
                            Porttitor leo, est feugiat vestibulum lacus ac arcu id.
                        </h3>
                    </div>
                </div>
                <div class="d-flex max370 max-h140 box-product mr30px">
                    <img style="max-width: 140px; max-height: 140px" src="./images/image_news_2.jpg" alt=""/>
                    <div class=" max190 ml-2 mt11_5">
                        <h5 class="t-blue m-0">NEWS</h5>
                        <h3 class="text-left">
                            Porttitor leo, est feugiat vestibulum lacus ac arcu id.
                        </h3>
                    </div>
                </div>
                <div class="d-flex max370 max-h140 box-product mr30px">
                    <img style="max-width: 140px; max-height: 140px" src="./images/image_news_2.jpg" alt=""/>
                    <div class=" max190 ml-2 mt11_5">
                        <h5 class="t-blue m-0">NEWS</h5>
                        <h3 class="text-left">
                            Porttitor leo, est feugiat vestibulum lacus ac arcu id.
                        </h3>
                    </div>
                </div>
            </div>
            <div class="right d-flex align-items-center" style="mix-blend-mode: multiply;">
                <a href="#" class="btn btn-primary">
                    Xem thêm
                </a>
            </div>
        </div>
    </div>
</section>
<!--end relate post-->
<?php
include ('./footer.php');
?>
