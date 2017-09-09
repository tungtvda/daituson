
<body>
<div class="body-border">
    <div class="logomobi">
        <div class="slogan">
            <img src="{banner}" alt="{name}" title="{name}" width="100%"/>
        </div>
    </div>

    <div class="body_full">
        <div class="header_full">
            <div id="header_mobile">

                <div class="divmobile navbar-mobile">
                    <ul>
                        <li><a href="#" rel="nofollow"><img class="imghome-mobile"
                                                            src="{SITE-NAME}/view/default/themes/wp-content/themes/daituson/mobile/images/home-mobile.png"></a>
                        </li>
                        <li><a href="{SITE-NAME}" rel="nofollow">Trang chủ</a></li>
                    </ul>
                    <i class="fa-reorder toggle-menu menu-top push-body"></i>
                </div>
                <nav class="cbp-spmenu cbp-spmenu-horizontal cbp-spmenu-top">


                    <ul id="menu_mobile" class="menu_mnu_mobile">

                        <li class="{trangchu_mn}">
                            <a
                               href="{SITE-NAME}">
                                Trang chủ
                            </a>
                        </li>

                        <li class="{gioithieu_mn}">
                            <a  href="{SITE-NAME}/gioi-thieu.html">Giới thiệu</a>
                        </li>

                        {menu}

                        <li class="{phatthanh_mn}">
                            <a href="{SITE-NAME}/chuong-trinh-phat-thanh/">Chương trình phát thanh</a>
                        </li>

                        <li class="{lienhe_mn}">
                            <a href="{SITE-NAME}/lien-he.html">Liên hệ</a>
                        </li>
                    </ul>
                    <div class="clearb"></div>


                </nav>
                <link rel="stylesheet" type="text/css" href="{SITE-NAME}/view/default/themes/wp-content/themes/daituson/mobile/css/jPushMenu.css"/>
                <script type="text/javascript" src="{SITE-NAME}/view/default/themes/wp-content/themes/daituson/mobile/js/jPushMenu.js"></script>
                <script>
                    jQuery(document).ready(function () {
                        jQuery('.toggle-menu').jPushMenu();
                    });
                </script>
            </div>
            <div id="header">
                <div id="logo_img">

                    <p><img src="{banner}" alt="{name}" title="{name}" width="100%"/></p>

                </div>
            </div>
        </div>
    </div>
    <div class="full_wrapper">
        <div id="top-navi">
            <ul id="menu" class="menu_mnu sf-menu">
                <li class="{trangchu_mn}">
                    <a
                       href="{SITE-NAME}">
                        Trang chủ
                    </a>
                </li>

                <li class="{gioithieu_mn}">
                    <a  href="{SITE-NAME}/gioi-thieu.html">Giới thiệu</a>
                </li>

                {menu}

                <li class="{phatthanh_mn}">
                    <a href="{SITE-NAME}/chuong-trinh-phat-thanh/">Chương trình phát thanh</a>
                </li>

                <li class="{lienhe_mn}">
                    <a href="{SITE-NAME}/lien-he.html">Liên hệ</a>
                </li>
            </ul>
            <div class="clearb"></div>


        </div>
        <marquee class="slogan" scrollamount="{slide_text_tac_do}" style="{slide_text_mau_chu} {slide_text_mau_nen} {slide_text_co_chu}">
            {slide_text}
        </marquee>

        <div id="wrapper" class="clearfix">
            <div id="content">