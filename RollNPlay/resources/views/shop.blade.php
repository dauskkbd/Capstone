<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts/head')
    <style>
        body{
            background-color: grey 
        }

        .shop-banner-container{
            margin-top: 10%;
        }

        .filters-cards{
            width: 98%;
        }

        .filters{
            background-color: white;
            border-radius: 10px;
            margin-top: 5%;
        }
    </style>
    <title>RollNPlay-Shop</title>
</head>
<body>
    @include('layouts/navbar')
    <div class="container shop-banner-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <img src="images/shop_banner_resize.webp" alt="blank image" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid filters-cards">
        <div class="row">
            <div class="col-lg-2 filters">
                Filter by:
                <div>
                    <input type="checkbox" name="filter_checkbox"> In stock<br>
                    <input type="checkbox" name="accessories"> Accessories (1)<br>
                    <input type="checkbox" name="adventure_games"> Adventure Games (53)<br>
                    <input type="checkbox" name="board_game_accessories"> Board Game Accessories (26)<br>
                    <input type="checkbox" name="board_game_promos"> Board Game Promos (1)<br>
                    <input type="checkbox" name="board_games"> Board Games (11)<br>
                    <input type="checkbox" name="card_games"> Card Games (2)<br>
                    <input type="checkbox" name="escape_games"> Escape Games (11)<br>
                    <input type="checkbox" name="expert_games"> Expert Games (91)<br>
                    <input type="checkbox" name="family_games"> Family Games (126)<br>
                    <input type="checkbox" name="kids_games"> Kids Games (25)<br>
                    <input type="checkbox" name="lcg"> LCG (1)<br>
                    <input type="checkbox" name="living_card_games"> Living Card Games (48)<br>
                    <input type="checkbox" name="party_games"> Party Games (46)<br>
                    <input type="checkbox" name="reservation"> Reservation (1)<br>
                    <input type="checkbox" name="shirts"> Shirts (1)<br>
                    <input type="checkbox" name="strategy_games"> Strategy Games (137)
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>
</html>
