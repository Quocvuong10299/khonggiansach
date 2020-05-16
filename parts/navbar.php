<?php
    $topPage = [
        'phone' => [
            "title" => '1800 6248',
            "link" => '#',
            "icon" => KHONGGIANSACH_ROOT_URL.'/images/ic-phone.svg'
        ],
        'search' => [
            "link" => '#',
            "icon" => KHONGGIANSACH_ROOT_URL.'/images/ic-search.svg'
        ],
    ];
    $navbar = [
        [
            'title' => 'Trang chủ',
            'link' => '#',
        ],
        [
            'title' => 'Về chúng tôi',
            'link' => '#'
        ],
        [
            'title' => 'Dịch vụ vệ sinh',
            'link' => '#'
        ],
        [
            'title' => 'Tin tức',
            'link' => '#'
        ],
        [
            'title' => 'Tuyển dụng',
            'link' => '#'
        ],
        [
            'title' => 'Hợp tác',
            'link' => '#',
        ],
        [
            'title' => 'liên hệ',
            'link' => '#'
        ],
    ]
?>
<div class="header">
    <div class="body-navbar d-flex justify-content-center align-items-center box_shadown_menu">
        <div class="container">
            <div class="top-navbar_content d-flex flex-wrap justify-content-between align-items-center">
                <div class="logo">
                    <img src="<?php echo KHONGGIANSACH_ROOT_URL.'/images/logo.png' ?>" alt="">
                </div>
                <div class="menu d-none d-lg-block">
                    <ul class="menu-content d-flex">
                        <?php foreach ($navbar as $item){ ?>
                            <li class="t-navTop menu-item current-menu-item ml30px position-relative active-menu">
                                <a href="<?php echo $item['link'] ?>" class="text-black">
                                    <?php echo $item['title'] ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="search">
                    <form action="#">
                        <div class="right d-flex align-items-center">
                            <a href="<?php echo $topPage['search']['link'] ?>" class="">
                                <img class="svg" src="<?php echo $topPage['search']['icon'] ?>" alt="">
                                <?php
//                                echo $topPage['phone']['title'];
                                ?>
                            </a>
                        </div>
                    </form>
                </div>
                <div class="right d-flex align-items-center">
                    <a href="<?php echo $topPage['phone']['link'] ?>" class="btn btn-primary">
                        <img class="svg mr10px" src="<?= $topPage['phone']['icon'] ?>" alt="">
                        <?php
                        echo $topPage['phone']['title'];
                        ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
