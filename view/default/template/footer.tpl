</div> <!--end content-->
</div> <!--end wrapper-->


</div><!-- end full wrapper-->
<div class=" footer">
    <div id="wrapper" class="clearfix">
        <div id="content">
            <p>{giay_phep}</p>
            <p>Chịu trách nhiệm chính: {trach_nhiem_chinh}.</p>
            <p>Chịu trách nhiệm nội dung: {trach_nhiem_noi_dung}</p>
            <p>Trụ sở : {tru_so}</p>
            <p>Điện thoại: {dien_thoai} / Fax: {fax} * Email:{email}</p>
            <p>Sử dụng thông tin của website phải ghi rõ nguồn http://www.daituson.com.vn</p>
        </div>
    </div>
</div>
<div style="display:none;">Đang cập nhật nội dung</div>
<!--<script src="js/jquery.min.js" type="text/javascript"></script>-->

<style type="text/css">

    #top {
        width: 50px;
        height: 50px;
        position: fixed;
        bottom: 50px;
        right: 25px;
        background: url({SITE-NAME}/view/default/themes/images/scroll-top.png) no-repeat;
        text-indent: -9999px;
        cursor: pointer;
    }
</style>

<script type="text/javascript">
    $(document).ready(function () {
        $('#header').append('<div id="top">Back to Top</div>');
        $(window).scroll(function () {
            if ($(window).scrollTop() != 0) {
                $('#top').fadeIn();
            }
            else {
                $('#top').fadeOut();
            }
        });
        $('#top').click(function () {
            $('html,body').animate({scrollTop:0}, 500);
        });
    });
</script>

</div> <!-- end body border-->
</body>

<!-- Mirrored from daituson.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2017 01:24:34 GMT -->
</html>