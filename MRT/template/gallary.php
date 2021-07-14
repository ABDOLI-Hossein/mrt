<?php


/**
 * Template Name: gallary
 * Template Post Type: post, page
 */
get_header();
?>
    <style>
.next-prev{
    display: none;
    }
        @media only screen and (max-width: 1000px) {
            .sideSection .nameside {
                font-size: 20px;
            }
            .sideSection{
                height: unset!important;
                top: 70px!important;
                justify-content: space-evenly!important;
            }
        }
    </style>
    <div class="sideSection d-flex" style="height: 10%;justify-content: space-between;top: 145px;">

        <span class="sep">-</span>
        <span class="nameside">گالری تصاویر</span>

    </div>

<div class="flex-grow-1 per-10  d-flex gallary" style="min-height: 420px">
    <div class="flex-grow-1 per-8  d-flex gallary-top p-relative   mw100-m">
        <div class="per-5 gallaryVideo   mw100-m">

            <div class="gallaryVideoLayer">
                <div class="gallaryPlayBtnWrap">
                    <div class="gallaryPlayBtnWrap2">
                        <i class="fa fa-play" style="font-size: 25px;color: #D9AF73;margin-left: 7px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="per-7 p-absolute gallaryText   mw100-m">
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
        </div>

    </div>
    <div class="flex-grow-1 per-2 d-noneM"></div>
</div>

    <div class="flex-grow-1 per-10 gallaryImg" style="margin-top: 86px">
        <div class="flex-grow-1 per-8  d-flex  p-relative  mw100-m d-block">
            <div class="flex-grow-1 per-4  mw100-m">
                <img src="<?php bloginfo("template_directory"); ?>/images/gallary/left2.png">
                <img src="<?php bloginfo("template_directory"); ?>/images/gallary/left1.png">
                <img src="<?php bloginfo("template_directory"); ?>/images/gallary/left3.png">

            </div>
            <div class="flex-grow-1 per-6  mw100-m">
                <img src="<?php bloginfo("template_directory"); ?>/images/gallary/right1.png">
                <div class="d-flex  d-block" style="justify-content: space-between">
                    <img src="<?php bloginfo("template_directory"); ?>/images/gallary/right3.png">
                    <img src="<?php bloginfo("template_directory"); ?>/images/gallary/right2.png">
                </div>
                <img src="<?php bloginfo("template_directory"); ?>/images/gallary/right1.png">
            </div>
        </div>
    </div>







<?php get_footer(); ?>