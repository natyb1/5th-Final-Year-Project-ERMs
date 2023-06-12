@extends('frontend.master')
@section('title', 'Home Page')
@section('content')
    <div class="bread-wrapper bg-light">
        <div aria-label="breadcrumb">
            <h3 class="text-center">{{ $pageTitle }}</h3>
            <ol class="breadcrumb justify-content-center  bg-light">

            </ol>
        </div>
    </div>
    <div class="bigslider mt-2">
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="image" src="{{ asset('assets/img/h1.jpg') }}" alt="">
                </div>
                <div class="swiper-slide"> <img src="{{ asset('assets/img/h7.jpg') }}" alt=""> </div>
                <div class="swiper-slide"> <img src="{{ asset('assets/img/21.jpg') }}" alt=""></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>

    <div class="ml-5 mt-5">
        <div class="row">
            <div class="col-md-6 ">
                <h3>Mr Endris Abdu</h3>
                <p class="text-justify">ባሕርዳር፤ ግንቦት 11/2015 (ኢኢቢ) የአማራ ክልል ኢንዱስትሪና ኢንቨስትምንት ቢሮ የ2015 በጀት ዓመት የዘጠኝ ወር ዕቅድ
                    አፈፃጸሙን በመገመበት ወቅት ክልሉ ከውስጥና ከውጭ በሚሸረቡ ሴራዎች ምክንያት በበረካታ ችግሮች ቢፈተንም ህዝባችን በሳልና ሠላም ወዳድ፤ አስተዋይ ከመሆኑ በተጨማሪ
                    ባለሃብቱ በክልሉ ህዝብና መንግስት ያለው እምነት የፀና በመሆኑ የኢንቨስትመንት ፍሰቱ በየጊዜው እየጨመረ እንደሆነ ቢሮ ኃላፊው አቶ እንድሪስ አብዱ አስረድተዋል፡፡
                    ከሌሎች ዋናዋና ተግባራት አንፃርም በርካታ ጥሩ አፈጻጸሞች የተመዘገቡትን ያህል በአንዳንድ ተግባራት ደግሞ ዝቅተኛ አፈፃጸሞች እንደተመዘገቡ ተገምግሟል፡፡ ከዕቅድ
                    አንፃር በጥሩ አፈፃፀም የተመዘገቡ፡- <br>
                    >> በሙሉ አቅማቸው ወደ ስራ ሲገቡ ለ795,914 ዘጎች ስራ ዕድል ሊፈጥሩ የሚችሉና 346.43 ቢሊዮን ብር ካፒታል ያስመዘገቡ 3595 ባለሃብቶች የኢንቨሰትመንት
                    ፈቃድ ማውጣታቸው፣ <br>
                    >> በዘጠኝ ወሩ ውስጥ ጊዜአዊውን ሳይጨምር ለ47,502 ዜጎች ቋሚ የስራ ዕድል መፍጠር መቻሉ፣ <br>
                    >> ከቀረቡ 2,805 ፕሮጀክቶች ውጥ 2,022 የኢንቨስትመንት ፕሮጀክቶች ገመግሞ ማሳለፍ መቻሉ፣ <br>
                    >> 22,392.09 ሄ/ር የኢንቨስመንት መሬት ለይቶ በማካለል በሳይት ፕላን መረጃውን መያዝ መቻሉ፣ <br>
                    >> ከ99.08 ሚሊዮን ዶላር የውጭ ምንዛሬ ከማስገኜትና ስትራቴጅክ የሆኑ የምግብ ምርቶችን አምርቶ ከመተካት አንፃር እና <br>
                    >> በተለያዩ አማራጮች/በማሽን ሊዝ፣በፕሮጀክት ፋይናንስና ስራ መስኬጃ/ ለ614 የኢንቨስትመንት ፕሮጀክት /ፋብሪካዎች/ ከ34.405 ቢሊዮን ብር በላይ ብድር ማቅርብ
                    መቻሉ…ወዘተ በጥንካሬ የተገመገሙ ሲሆን መሻሻል ያለባቸው ደግሞ፡-
                    o ፕሮጀክቶችን ወደ ተለያየ የአፈፃጸም ደረጃዎች ከማስገባት፣ <br>
                    o ለረዥም ጊዜ ታጥረው የተቀመጡ መሬቶችን ደግፎ ወደ ስራ ከማስገባትና ከአቅም በላይ የሆኑትን ተቆራርጦ እርምጃ በመውሰድ መሬት ከማስመለስ፣ <br>
                    o በሳይት ፕላን የተካለለን መሬት በተለያዩ ስልቶች ከ3ኛ ወገን በማፅዳት ለባለሃብቱ ከማስተላለፍ፣ <br>
                    o ፈጣን፣ ቀልጣፋና ከቢሮክራሲ የፀዳ አገልግሎት ከመስጠት <br>
                    o የነባር ፕሮጀክቶች የማምረት አቅም በማሳደግ የደረጃ ሽግግር እንዲያደርጉ ከማድርግና <br>
                    o ፕሮጀክቶች ወደ ማምረት/አገልግሎት መስጠት ከማስገባት አንፃር በታቀደው ልክ ባለመፈፀማቸው አመራሩ የሚለካው በአፈፃፀሙ ክል ስለሆነ በቀሪ ወራት እነዚህን ጉድለቶች
                    ነቅሶ ይዞ መሰራት እንዳለበት ቢሮ ኃላፊው አቶ እንድሪስ አብዱ በማጠቃለያ ኃሣባቸው አፅንኦት ሰጥተው አስረድተዋል፡፡</p>

                <div class="row  justify-content-between">
                    <div class="col-md-3 mt-5">
                        <button class="btn btn-lg btn-primary">More</button>
                    </div>
                    {{-- <div class="col-md-3 mt-5">
                        <span class="fa-2x text-primary mr-2 hover-effect"><a href=""><i
                                    class="fa-brands fa-twitter"></i></a></span>
                        <span class="fa-2x text-primary mr-2 hover-effect"><a href=""><i
                                    class="fa-brands fa-facebook"></i></a></span>
                        <span class="fa-2x text-danger mr-2 hover-effect"><a href=""><i
                                    class="fa-brands fa-instagram"></i></a></span>

                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 m-3">
                <div class="image-wrapper">
                    <img src="{{ asset('assets/img/pp.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-center mt-5">News</h3>
    <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('assets/img/n1.jpg') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="card-body">
                        <p class="card-text">በሲቪል ሰርቪስ ኮሚሽን እና በሰላም ሚኒስቴር አስተባባሪነት ብሔራዊ የመስግስት አገልግሎት ዘርፍ ተኮር የምክክር መድረክ</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('assets/img/n2.jpg') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="card-body">

                        <p class="card-text">የአማራ ኢንዱስትሪ ሰራተኞች የተጠሪ ተቋማት ሰራተኞች በክልሉ የአረንጓዴ አሻራቸውን ሲያኖሩ እና የአቅመ
                            ደካሞችን ቤት የማደስ ተግባር ሲሳተፉ</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('assets/img/n3.jpg') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="card-body">

                        <p class="card-text">ለሁለት አዲስ ሀገር አቀፍ የቴሌኮሙኒኬሽን ፍቃዶች የጨረታ ማስረከቢያ ጊዜ የመዘጋት ስነ ስርዓት</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('assets/img/n4.jpg') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="card-body">

                        <p class="card-text">የኢትዮ-ቻይና 4ኛ ከፍተኛ ደረጃ የማስተባበርና የምክክር መድረክ በባቡር ፕሮጀክቶች ላይ</p>

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="card">
                    <div class="img-wrapper"><img src="{{ asset('assets/img/n5.jpg') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="card-body">

                        <p class="card-text">ኢትዮጵያ የመንግስትን ዲጂታላይዜሽን ፕሮግራም ለመደገፍ ከአጋር ድርጅቶች ጋር የብድር ስምምነት ተፈራረመች</p>

                    </div>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden"><i class="fa-sharp fa-solid fa-angles-left"></i></span>
        </button>
        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="" aria-hidden="true"></span>
            <span class="visually-hidden"><i class="fa-sharp fa-solid fa-angles-right"></i></span>
        </button>
    </div>
@endsection
