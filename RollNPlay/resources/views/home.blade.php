<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head_section')
    <style>
        body{
            background-color: #fefefe
        }
        

        /* hero banner section */
        #hero_banner_section{
            margin-top: 6%;
        }

       .hero-banner {
            margin-top: 5%;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
           
        }

        #first-small-banner{
            margin-top: 5%;
            height: 184px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
        }

        #second-small-banner{
            margin-top: 2%;
            height: 184px;
            border-radius: 10px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
        }

        /* shop by category section */
        #shop_by_category_section {
            margin-top: 6%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    @include('layouts/navbar')
    {{-- hero banner section --}}
    <div class="container" id="hero_banner_section">
        <p class="fs-3">Some additionals in this area</p>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12" >
                <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div>
                    <img src="/images/blank_image_2.png" alt="blank image" id="first-small-banner" class="img-fluid">
                </div>
                <div>
                    <img src="/images/blank_image_2.png" alt="blank image" id="second-small-banner" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    {{-- shop by category section --}}

    <div class="container" id="shop_by_category_section">
        <h3>Shop by Category</h3>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="mt-3">
                <h4>NAME OF CARDS SEPARATE THESE TWO ROWS</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <div >
                    <img src="/images/blank_image_1.png" alt="blank image" class="img-fluid hero-banner">
                </div>
            </div>
        </div>
        <h4 class="mt-3">NAME OF CARDS HERE ALSO</h4>
    </div>

    
</body>
</html>