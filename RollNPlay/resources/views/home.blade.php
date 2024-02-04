<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head_section')
    <style>
        body{
            background-color: #878787;
        }

        /* hero banner section */
        #hero_banner_section{
            margin-top: 6%;
        }

        #banner_header, #shop_by_category_header {
            display: block;
            margin-bottom: 2%;
            text-align: center; /* Center the content horizontally */
            margin-bottom: 2%; /* Center the block-level element horizontally */
        }

       .hero-banner {
            height: 100%;
            width: 100%;
            margin-bottom: 3%;
            border-radius: 10px;
        }

        /* hero banner, square images */
        .square-banner{
            height: 100%;
            width: 100%;
            border-radius: 10px;
        }

        .square-banner:hover {
            transition: transform 0.5s ease;
            transform: scale(1.05);
        }

        /* hero banner, landscape image */
        .landscape-banner-section{
            margin-top: 2%;    
        }

        #landscape_banner{
            height: 100%;
            width: 100%;
            border-radius: 10px;
            /* box-shadow: 8px 8px 8px rgba(0, 0, 0, 0.5); */
        }

        #landscape_banner:hover{
            transition: transform 0.5s ease;
            transform: scale(1.05);
        }

        /* shop by category section */
        #shop_by_category_container {
            height: 95%;
            width: 95%;
        }

        #shop_by_category_header{
            margin-top: 8%;
        }

        #shop_by_category_section{
            background-color: rgb(228, 228, 228);
            border-radius: 10px;
            padding: 30px 30px 0px 30px;
        }

        .image-category{
            height: 100%;
            width: 100%;
            border-radius: 10px;
            transition: transform 0.5s ease;
        }

        #shop_by_category_section a{
            text-decoration: none;
            color: rgb(29, 28, 26);
            transition: color 0.5s ease;
        }

        #shop_by_category_section a:hover {
            color:rgb(54, 54, 255)
        }

        .category {
            text-align: center;
            font-size: 23px;
        }

        .category p {
           margin-top: 7px;
        }

        .category .img-fluid:hover{
            transition: transform 0.5s ease;
            transform: scale(1.03);
        }

        /* suggested game section */
        /* there are two of them, one is displayed at alrger screens, and the other is for medium or lower screens */
        #suggested_game_container{
            margin-top: 10%;
            background-color: rgb(228, 228, 228);
            border-radius: 10px;
            width: 93.8%;
            padding: 2%;
            margin-bottom: 5%;
        }

        #suggested_game_container h3{
            margin-bottom: 2%;
        }

        #suggested_game_container #large_screen{
            margin-top: 20%;
            font-size: 180%;
            margin-bottom: 2%;
        }
        
        #suggested_game_container #small_screen {
            margin-top: 4%;
            font-size: 200%;
        }

        .suggested_game_price {
            margin-top:3%;
            margin-bottom:4%;
            font-size: 200%;
        }

        .number-input-form {
            display: flex;
            height: 50px;
        }

        .number-input-form .btn {
            background-color: white;
            border: none;
            height: 100%;
            padding-top: 0%;
            font-size: 180%;
        }

        .increase-btn{
            border-radius: 0% 20% 20% 0%;
        }

        .decrease-btn{
            padding: 0 3%;
            border-radius: 20% 0% 0% 20%;
        }

        .increase-btn:hover {
            background-color: rgba(0, 160, 177, 0.7);
            color: white;
        }

        .decrease-btn:hover{
            background-color: rgba(255, 2, 2, 0.7);
            color: white;
        }

        .order-number{
            background-color: white;
            border: none;
            border-radius: 0%;
            width: 20%;
            height: 100%;
            padding-bottom: 1%;
            padding-left: 6%;
            font-size: 180%;
            outline: none;
        }

        .add-to-cart{
            margin-left: 2%;
            width: 100%;
            border-radius: 10px 10px 10px 10px;
        }

        .add-to-cart:hover{
            background-color: rgba(0, 128, 0, 0.8);
            color: white;
        }

        .buy-now{
            margin-top: 2%;
            width: 100%;
            border-radius: 10px 10px 10px 10px;
        }

        .buy-now:hover{
            background-color: rgba(0, 0, 255, 0.8);
            color: white;
        }
    </style>
    <script>
         $(document).ready(function(){
            $(".image-1").click(function(){
                $(".main-image").attr("src", $(this).attr("src"));
            });
            $(".image-2").click(function(){
                $(".main-image").attr("src", $(this).attr("src"));
            });
            $(".image-3").click(function(){
                $(".main-image").attr("src", $(this).attr("src"));
            });
            $(".image-4").click(function(){
                $(".main-image").attr("src", $(this).attr("src"));
            });

            $('.order-number').on('input', function() {
           let value = parseInt($(this).val(), 10);
           let maxValue = 9;
            if (value > maxValue) {
            $(this).val(maxValue);
            }
            });

            $('.order-number').on('keypress', function(event) {
            let allowedKeys = [48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 8];
            let keyCode = event.which;
            if (!(allowedKeys.includes(keyCode))) {
            event.preventDefault();
            }
            });

            $('.order-number').on('blur', function() {
            if ($(this).val().trim() === '') {
            $(this).val('0');
            }
            });

            $('.decrease-btn').click(function() {
            let inputField = $(this).siblings('.order-number');
            let value = parseInt(inputField.val(), 10);
            if (value > 0) {
            inputField.val(value - 1);
            }
            });

            $('.increase-btn').click(function() {
            let inputField = $(this).siblings('.order-number');
            let value = parseInt(inputField.val(), 10);
            let maxValue = 9;
            if (value < maxValue) {
            inputField.val(value + 1);
            }
            });
        });
    </script>
    <title>RollNPlay-Home</title>
</head>
<body>
    @include('layouts/navbar')

    {{-- hero banner section --}}

    <div class="container-fluid" id="hero_banner_section">
        <div id="banner_header">
            <h1>Ready to Roll&Play?</h1>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href=""><img src="/images/septima.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img src="/images/lord_of_the_rings.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                    <div class="carousel-item">
                        <a href=""><img src="/images/the-witcher.jpg" alt="blank image" class="img-fluid hero-banner"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="row d-flex">
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href=""><img src="/images/sleeping-gods.webp" alt="blank image" class="img-fluid square-banner"></a>
                    </div> 
                    <div class="col-lg-6 col-md-6 col-6 square-banner-section">
                        <a href=""><img src="/images/ticket-to-ride.jpg" alt="blank image" class="img-fluid square-banner"></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-12 landscape-banner-section">
                       <a href=""><img src="/images/tribes-of-the-wind.webp" id="landscape_banner" alt="blank image" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- shop by category section --}}
    
    <div class="container-fluid" id="shop_by_category_container">
        <div id="shop_by_category_header">
            <h1>Shop by Category</h1>
        </div>
        <div id="shop_by_category_section">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="#">
                        <img src="/images/aftermath.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>All Board Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/ankh-gods-of-egypt.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>New Arrivals</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/arkham-horror.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Best Sellers</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/azul-master-chocolatier.webp" alt="blank image" class="img-fluid image-category">
                        <p><strong>Incoming Games</strong></p></a>
                    </div>
                </div>
                <div class="mt-3">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/bloodborne.webp" alt="blank image" class="img-fluid image-category">
                        <p><strong>Crowdfunded Games</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/century-spice-road.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Special Editions</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/chronicles-of-crime.jpg" alt="blank image" class="img-fluid image-category">
                        <p><strong>Expansions</strong></p></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6 category">
                    <div><a href="">
                        <img src="/images/coatl.webp" alt="blank image" class="img-fluid image-category">
                        <p><strong>For the Kids</strong></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- suggested game section --}}

    <div class="container-fluid d-lg-block d-md-none d-none" id="suggested_game_container">
            <h3>Will you find the werewolf before he finds you?</h3>
            <div class="row">
                <div class="col-lg-2 col-md-12 col-12">
                        <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid image-1">
                        <img src="images/one-night-ultimate-werewolf-daybreak-side_resize.png" alt="blank image" class="img-fluid image-2">
                        <img src="images/one-night-ultimate-werewolf-daybreak-overview_resize.png" alt="blank image" class="img-fluid image-3">
                        <img src="images/one-night-ultimate-werewolf-daybreak-contents_resize.png" alt="blank image" class="img-fluid image-4">                              
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div>
                        <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid main-image">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="suggested_game_description">
                        <h4 id="large_screen"><strong> One Night Ultimate Werewolf Daybreak by Ted Alspach</strong></h4>
                        <p class="suggested_game_price"><strong>₱1,400.00</strong></p>
                        <form action="" class="number-input-form">
                            <span class="btn decrease-btn">-</span>
                            <input type="text" class="order-number" min="0" max="9" value="0">
                            <span class="btn increase-btn">+</span>
                            <span class="btn add-to-cart">Add to cart</span>
                        </form>
                        <form action="" class="number-input-form">
                            <span class="btn buy-now">Buy Now</span>
                        </form>
                    </div>
                </div>
            </div>
    </div>

    <div class="container-fluid d-lg-none d-md-block d-block" id="suggested_game_container">
        <h3>Will you find the werewolf before he finds you?</h3>
            <div class="row">
                <div class="col-md-12 col-12">
                    <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid main-image">          
                </div>
                    <div class="col-md-12 col-12 mt-3">
                        <div class="row">
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak_resize.jpg" alt="blank image" class="img-fluid image-1">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-side_resize.png" alt="blank image" class="img-fluid image-2">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-overview_resize.png" alt="blank image" class="img-fluid image-3">
                            </div>
                            <div class="col-md-3 col-6">
                                <img src="images/one-night-ultimate-werewolf-daybreak-contents_resize.png" alt="blank image" class="img-fluid image-4">  
                            </div>
                        </div>
                    </div>
                <div class="col-md-12">
                    <div class="suggested_game_description">
                        <h4 id="small_screen"><strong>One Night Ultimate Werewolf Daybreak by Ted Alspach</strong></h4>
                        <p class="suggested_game_price"><strong>₱1,400.00</strong></p>
                        <form action="" class="number-input-form">
                            <span class="btn decrease-btn">-</span>
                            <input type="text" class="order-number" min="0" max="9" value="0">
                            <span class="btn increase-btn">+</span>
                            <span class="btn add-to-cart">Add to cart</span>
                        </form>
                        <form action="" class="number-input-form">
                            <span class="btn buy-now">Buy Now</span>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    @include('layouts/footer')
</body>
</html>