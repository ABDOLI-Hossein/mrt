<?php


/**
 * Template Name: Home
 * Template Post Type: post, page
 */
get_header();
?>
<style>
    header{
        position: fixed;
        width: 1366px;
        top: 0;
        height: 100px;
        align-items: center;
        display: flex;
    }
</style>
    <div class="sideSection">
        <span class="numberside">۰۱</span>
        <span class="sep">-</span>
        <span class="nameside">افتخارات</span>
        <div class="sideLine"></div>
    </div>

    <section data-secId="0" class="eachSection activee  per-10 flex-grow-1 hero d-flex">
        <div class="flex-grow-1 per-6 d-flex align-center mw100-m align-flexend">

            <div class="owl-carousel owl-theme heroSlider">
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/mohammadRajabi.png">
                </div>
                <div class="item">
                    <img src="<?php bloginfo("template_directory"); ?>/images/DrRajabiInItaly.png">
                </div>

            </div>


        </div>

    <div  class="flex-grow-1 d-flex heroIntro css-typing mw100-m " style="flex-direction: column;justify-content: center;z-index: 1">
        <div id="typewriter">
            <h2 class="stroke-text">وب سایت شخصی</h2>
            <h2>دکتر محمد رجبی طرخورانی</h2>
            <h6 class="small-font">نویسنده و استاد ریاضیات (۱۳۳۱ - ۱۳۷۲)</h6>

        </div>
        <a href="<?php echo get_home_url(); ?>/زندگی-نامه/">
            <button  class="animate__animated animate__fadeInDown animate__delay-5s animate__slow">بیشتر بدانید</button>
        </a>

    </div>

    </section>

    <section data-secId="1" class="eachSection per-10 flex-grow-1 eftekharat d-flex flex-dir-column-reverse">
        <div class="flex-grow-1  p-relative mw100-m m-h-100" style="max-width: 55%">
            <img src="<?php bloginfo("template_directory"); ?>/images/work1.png" style="position: absolute;left: 68px;top: 0;"/>
            <img id="ef-img1"  src="<?php bloginfo("template_directory"); ?>/images/work2.png" style="position: absolute;right: 15px;top: 0;"/>
            <img id="ef-img2"  src="<?php bloginfo("template_directory"); ?>/images/work3.png" style="position: absolute;bottom: 60px;right: 0;"/>
            <img id="ef-img3"  src="<?php bloginfo("template_directory"); ?>/images/work4.png" style="position: absolute;left: 0;bottom: 20%" />
        </div>
        <div class="flex-grow-1 d-flex mw100-m" style="max-width: 45%">
            <div class="per-8 flex-grow-1 d-flex eftekharatWrap mw100-m">
                <ul>
                    <li>اولین فارغ التحصیل مقطع دکتری ریاضی محض در ایران</li>
                    <li>مولف و مترجم ۱۲ کتاب ریاضی دانشگاهی و پیش دانشگاهی </li>
                    <li>موسس نشر علوم پایه-۱۳۶۸</li>
                    <li>برنده ی دوازهمین دوره کتاب سال</li>
                    <li>برنده ی پایان نامه برگزیده ی دکتری ریاضی محض</li>
                </ul>
            </div>
        </div>
    </section>

    <section data-secId="2" class="eachSection  per-10 flex-grow-1  darbare align-center d-flex d-block">
        <div class="per-9 flex-grow-1  mw100-m">
            <p>در سال 1331 در شهرستان تفرش متولد شدم. تحصیلات ابتدایی خود را در دبستان کافی و متوسطه خود را در دبیرستان سعدی آن شهر در رشته ریاضی به پایان رساندم.درسال 1350 با اخذ دیپلم ریاضی و موفقیت در کنکور سراسری وارد گروه ریاضی دانشگاه تهران گردیدم.در سال 1354 دوره لیسانس ریاضی را به پایان برده و در همان سال وارد دوره فوق لیسانس ریاضی همین گروه شدم.در مرداد 1356 موفق به اخذ درجه فوق لیسانس ریاضی گردیدم و در اول مهرماه همان سال به عنوان مربی آموزشی به استخدام رسمی این گروه درآمدم. برنامه کار به این صورت بود که پس از سه سال تدریس برای ادامه تحصیل و اخذ دکتری با بورس دانشگاه به خارج از کشور اعزام شوم. ولی بعد از پیروزی انقلاب در سال 1357 و مشکلاتی که برای اعزام دانشجو به خارج پیش آمد این مهم عملی نشد. پس از تشکیل دوره های دکتری در داخل کشور و از جمله دایر شدن این دوره در گروه ریاضی دانشگاه تهران در سال 1367 جزو اولین دوره پذیرفته شدم . و در این مدت ضمن انجام کارهای آموزشی محوله از طرف گروه به امر تحصیل و تحقیق نیز مشغول بوده ام.</p>
            <div style="--animate-sa:progress 10s forwards" class="levels-wrapper flex-dir-column-reverse">
                <div id="ex6" title="اخذ درجه دکتری ریاضی استاد راهنما : دکتر درفشه " style="--bg-color:#02001E" class="levels-bullets downex1">۱۳۷۲</div>
                <div id="ex5" title="ورود به دوره دکتری ریاضی دانشگاه تهران" style="--bg-color:#02001E" class="levels-bullets upex1">۱۳۶۸</div>
                <div id="ex4" title="اتمام کارشناسی ارشد ریاضی استاد راهنما :دکتر خسروشاهی" style="--bg-color:#02001E" class="levels-bullets downex1">۱۳۵۶</div>
                <div id="ex3" title="اتمام دوره کارشناسی و ورود به کارشناسی ارشد ریاضی" style="--bg-color:#02001E" class="levels-bullets upex1">۱۳۵۴</div>
                <div id="ex2" title="ورود به دوره کارشناسی ریاضی دانشگاه تهران " style="--bg-color:#02001E" class="levels-bullets downex1">۱۳۵۰</div>
                <div id="ex1" title="در تفرش بدنیا آمد" style="--bg-color:#02001E" class="levels-bullets upex1">۱۳۳۱</div>
            </div>

        </div>

    </section>

    <section id="sec3" data-secId="3" class="eachSection per-10 flex-grow-1 universities d-flex flex-dir-column-reverse">
        <div class="flex-grow-1 per-4 p-relative  mw100-m">
            <img id="uni-img1"  src="<?php bloginfo("template_directory"); ?>/images/uni1.png" style="position: absolute;top: 60px;right: 30px;"/>
            <img id="uni-img2"  src="<?php bloginfo("template_directory"); ?>/images/uni2.png" style="position: absolute;top: 125px;"/>
            <img id="uni-img3"  src="<?php bloginfo("template_directory"); ?>/images/uni3.png" style="position: absolute;bottom: 265px;right: 36px;"/>
            <img id="uni-img4"  src="<?php bloginfo("template_directory"); ?>/images/uni4.png" style="position: absolute;bottom: 0"/>
            <img id="uni-img5"  src="<?php bloginfo("template_directory"); ?>/images/uni5.png" style="position: absolute;bottom: 40px;right: 66px;"/>
            <img id="uni-img6"  src="<?php bloginfo("template_directory"); ?>/images/DrRajabiInItaly(1).png" style="position: absolute;top: 400px;"/>

        </div>
        <div class="flex-grow-1 per-6 d-flex  mw100-m">


            <div class="per-8 flex-grow-1 d-flex mw100-m" style="justify-content: flex-end;align-items: center">
                <ul style="direction: rtl;position: relative">
                    <li class="uniLogo1">گروه ریاضی دانشکده ی علوم دانشگاه تهران (تدریس و معاونت آموزشی)</li>
                    <li class="uniLogo2">گروه ریاضی دانشکده ی علوم دانشگاه آزاد اسلامی واحد مرکز (تدریس)</li>
                    <li class="uniLogo2">گروه ریاضی کاربردی دانشگاه آزاد اسلامی واحد لاهیجان (تدریس) </li>
                </ul>
            </div>

        </div>
    </section>

    <section data-secId="4" class=" flex-grow-1  books eachSection per-10 p-relative d-flex align-center" style="flex-direction: column">
        <div class="flex-grow-1 per-10 d-flex book-info d-block">
                <div class="flex-grow-1 per-6 d-flex align-center mw100-m p-relative booksHeightM">
                    <div class="owl-carousel owl-theme booksSlider">
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/book1.png">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/book2.png">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/book3.png">
                        </div>
                        <div class="item">
                            <img src="<?php bloginfo("template_directory"); ?>/images/book4.png">
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 per-4 d-flex mw100-m">
                    <div class="per-8 flex-grow-1 books-right mw100-m">
                        <h2 class="books-right-title" style="margin-bottom: 0">آشنایی با منطق ریاضی</h2>
                        <h4 class="books-right-title2">تالیف : هربرت بی . اندرتون</h4>
                        <h4 class="books-right-title3">تالیف : هربرت بی . اندرتون مرکز نشر دانشگاهی , تهران </h4>
                        <button data-bookItem="0" class="book-info-button">اطلاعات کامل کتاب</button>
                    </div>

                </div>
        </div>
        <div class="flex-grow-1 per-10 d-flex align-center other-books-top" style="height: 400px;display: none">

            <div class="flex-grow-1 per-7 bookInfoLeft">
                <h4 class="bookInfoHeader"></h4>
                <h6 class="bookInfoDetail"></h6>
                <p class="bookInfoExp">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <div class="d-flex">
                    <button>دریافت فصل اول</button>
                    <button>تماس با مولف</button>
                </div>
                <h6 class="bookArchive">آرشیو کتابها<i class="fa fa-long-arrow-left"></i></h6>
            </div>
            <div class="flex-grow-1 per-3"  style="width: 100%;">
                <img class="bookInfoImg" src="<?php bloginfo("template_directory"); ?>/images/book1.png">
            </div>
        </div>
        <div class="other-books per-10 d-flex" style="position: relative;display: none;padding-bottom: 30px">

            <div class="per-9 flex-grow-1">
                <h6 class="">سایر کتابها</h6>
                <div class="owl-carousel owl-theme otherBooksSlider">
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/book1.png">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/book2.png">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/book3.png">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/book4.png">
                    </div>
                    <div class="item">
                        <img src="<?php bloginfo("template_directory"); ?>/images/book1.png">
                    </div>
                </div>
            </div>
            <div class="per-1 flex-grow-1"></div>
        </div>
    </section>

    <section id="sec5" data-secId="5" class="eachSection  per-10 flex-grow-1 nashrOlumPaye d-flex flex-dir-column-reverse">
        <div class="flex-grow-1 per-4 p-relative  mw100-m">
            <img class="animate__animated animate__bounceInDown" src="<?php bloginfo("template_directory"); ?>/images/nashr1.png" style="position: absolute;top: 5%;left: 0;"/>
            <img class="animate__animated animate__fadeInUp" src="<?php bloginfo("template_directory"); ?>/images/nashr2.png" style="position: absolute;bottom: 5%;right: 40px;"/>
        </div>
        <div class="flex-grow-1 per-6 d-flex mw100-m">
            <div class="per-8 flex-grow-1 rtl mw100-m">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان </p>
                <button>انتشارات پایه</button>
            </div>

        </div>
    </section>

    <section data-secId="6" class="eachSection per-10 flex-grow-1 azZabanHamkaran d-flex d-block">
        <div class="flex-grow-1 per-4 p-relative d-flex mw100-m d-noneM" style="align-items: center;justify-content: center">
            <div class="hamkaranSlideImgWrap">
                <div id="hslide2" style="background:url('<?php bloginfo("template_directory"); ?>/images/hamkaran2.png') center center no-repeat;background-size: 80%;">slide2</div>
                <div id="hslide1" style="background:url('<?php bloginfo("template_directory"); ?>/images/hamkaran4.png') center center no-repeat;" class="bgs-100">slide1</div>
                <div id="hslide3" style="background:url('<?php bloginfo("template_directory"); ?>/images/hamkaran3.png') center center no-repeat;background-size: 80%">slide3</div>
                <div id="hslide4" style="background:url('<?php bloginfo("template_directory"); ?>/images/hamkaran1.png') center center no-repeat;background-size: 80%">slide4</div>
            </div>
        </div>
        <div class="flex-grow-1 per-4 p-relative d-flex mw50-m d-none d-flexM" style="align-items: center;justify-content: flex-start;height: 300px;margin-left: 25px">
            <div class="hamkaranSlideImgWrap hamkaranM" style="background: url('<?php bloginfo("template_directory"); ?>/images/hamkaran4.png');background-size: cover;">

            </div>
        </div>

        <div class="flex-grow-1 per-6 d-flex mw100-m hamkaranTopM">
            <div class="per-8 flex-grow-1 d-flex mw100-m" style="align-items: center">
                <div class="owl-carousel owl-theme hamkaran">
                    <div class="item">
                        <h4>اسلاید ۱</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <div class="item">
                        <h4>اسلاید ۲</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <div class="item">
                        <h4>اسلاید ۳</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                    <div class="item">
                        <h4>اسلاید ۴</h4>
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="sec7" data-secId="7" class="eachSection  per-10 flex-grow-1 tamasBaMa d-flex flex-dir-column-reverse">
        <div class="flex-grow-1 per-4 p-relative d-flex mw100-m" style="align-items: center;justify-content: center">
            <form class="tamasBaMaForm">

                <input id="nameForm" class="nameInput" type="text" placeholder="نام و نام خانوادگی"/>
                <input id="emailForm" type="email" placeholder="ایمیل" />
                <textarea id="textForm" rows="10" placeholder="پیام شما"></textarea>
                <input type="submit" value="ارسال پیام" id="tamasBaMaSubmit"  />
            </form>
        </div>
        <div class="flex-grow-1 per-6 d-flex mw100-m">
            <div id="tamasbama-right" class="per-8 flex-grow-1 d-flex mw100-m" style="flex-direction: column;direction: rtl;justify-content: center">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <ul class="tamasBaMaInfo">
                    <li class="tamasBaMaEmail">ایمیل</li>
                    <li class="tamasBaMaPhone">تلفن: 021-5658524</li>
                </ul>
                <ul class="tamasBaMaSocial">
                    <li><img src="<?php bloginfo("template_directory"); ?>/images/linkedin.png" /></li>
                    <li><img src="<?php bloginfo("template_directory"); ?>/images/instagram.png" /></li>
                    <li><img src="<?php bloginfo("template_directory"); ?>/images/twitter.png" /></li>
                    <li><img src="<?php bloginfo("template_directory"); ?>/images/facebook.png" /></li>
                </ul>
            </div>
        </div>
    </section>

<?php get_footer(); ?>