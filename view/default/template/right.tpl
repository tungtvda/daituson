<div id="ct_right">
    <div class="right_all search dacbiet phatthanh">
        <h3><a href="{SITE-NAME}/chuong-trinh-phat-thanh/">Chương trình phát thanh</a></h3>
        <div class="thuvien_img">
            <ul>
               {phat_thanh_left}
            </ul>

        </div>
    </div>
    {quang_cao_top}
    <div class="right_all search dacbiet heightright">
        <h3><a href="{SITE-NAME}/tin-bai-phan-anh/">Tin bài phản ánh</a></h3>
        <div class="thuvien_img">
            {phan_anh_left}
        </div>
    </div>
    {quang_cao_bottom}
    <div class="right_all search dacbiet heightright">
        <h3><a href=" ">Liên kết Website</a></h3>
        <div class="thuvien_img">
            <!--<h2></h2>-->
            <ul>
               {link_website}
            </ul>

        </div>
    </div>
    {quang_cao_full}
    <div class="right_all search dacbiet heightright">
        <h3><a href=" ">Thống kê truy cập</a></h3>
        <div class="thuvien_img">
            <ul>
                <li><a>Đang online:
                        <script type="text/javascript">
                            /* <![CDATA[ */

                            writeJavaScriptCookie();

                            function writeJavaScriptCookie() {
                                var date = new Date();
                                date.setTime(date.getTime() + (60 * 60 * 1000));
                                var the_cookie_date = date;
                                var the_cookie = "cmsms_statistics_javascript_detected=true";
                                the_cookie = the_cookie + ";expires=" + the_cookie_date;
                                document.cookie = the_cookie;
                            }
                            /* ]]> */
                        </script>


                        <script type="text/javascript">

                            /* <![CDATA[ */

                            writeResolutionCookie();

                            function writeResolutionCookie() {
                                var date = new Date();
                                date.setTime(date.getTime() + (60 * 60 * 1000));
                                var the_cookie_date = date;
                                var the_cookie = "cmsms_statistics_module_resolution=" + screen.width + "x" + screen.height;
                                var the_cookie = the_cookie + ";expires=" + the_cookie_date;
                                document.cookie = the_cookie;

                                var bn = navigator.appName;    // Browser Name
                                if (bn.substring(0, 9) == "Microsoft") {
                                    bn = "MSIE";            // browser name, cont'd
                                }
                                ;
                                var cd = (bn == "MSIE") ? screen.colorDepth : screen.pixelDepth; // Color depth
                                if (cd != "undefined") {
                                    var the_depthcookie = "cmsms_statistics_module_colordepth=";
                                    the_depthcookie = the_depthcookie + cd;
                                    the_depthcookie = the_depthcookie + ";expires=" + the_cookie_date;
                                    document.cookie = the_depthcookie;
                                }
                            }
                            /* ]]> */
                        </script>

                        7</a></li>
                <li><a>Tổng số truy cập: {number}</a></li>
            </ul>
        </div>
    </div>
</div>