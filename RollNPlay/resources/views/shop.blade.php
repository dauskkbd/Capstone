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

        .filters-cards-container{
            width: 95%;
            margin-top: 5%;

        }

        .filters{
            background-color: white;
            border-radius: 10px;
        }

        .cards{
            margin-left: 1%;
        }
    </style>
    <script type="module">
        import { Ripple, initMDB } from "mdb-ui-kit";

        initMDB({ Ripple });
    </script>
    <title>RollNPlay-Shop</title>
</head>
<body>
    @include('layouts/navbar')
    <div class="container-fluid shop-banner-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <img src="images/shop_banner_resize.webp" alt="blank image" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid filters-cards-container">
        <div class="row">
            <div class="col-lg-2 filters">
                Filter by:
                <div>
                    <input type="checkbox" name="filter_checkbox"> In stock<br>
                    <input type="checkbox" name="accessories"> Accessories ()<br>
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
            <div class="col-lg-10 cards-container">
                <div class="cards">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="images/unmatched-hells-kitchen.webp" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="images/unmatched-hells-kitchen.webp" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="images/unmatched-hells-kitchen.webp" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                                  <img src="images/unmatched-hells-kitchen.webp" class="img-fluid"/>
                                  <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                  </a>
                                </div>
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#!" class="btn btn-primary" data-mdb-ripple-init>Button</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/footer')
</body>
</html>
