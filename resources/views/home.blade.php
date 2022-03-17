<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>home</title>

        <!-- Styles -->
        <style>
       
        </style>
    </head>
    <body>
        <header>
            <div class="container">
                <figure>
                    <img src="../assets/img/dc-logo.png" alt="">
                </figure>
                <ul>
                    <li>
                        <a href="#">CHARACTERS</a>
                    </li>
                    <li class="active">
                        <a href="#">COMICS</a>
                    </li><li>
                        <a href="#">MOVIES</a>
                    </li>
                    <li>
                        <a href="#">TV</a>
                    </li>
                    <li>
                        <a href="#">GAMES</a>
                    </li><li>
                        <a href="#">COLLECTIBLES</a>
                    </li><li>
                        <a href="#">VIDEO</a>
                    </li><li>
                        <a href="#">FANS</a>
                    </li><li>
                        <a href="#">NEWS</a>
                    </li><li>
                        <a href="#">SHOP</a>
                    </li>
                </ul>
            </div>
        </header>
        <div class="jumbo">
            <div class="container">
                <button class="btn">CURRENT SERIES</button>
            </div>
        </div>
        <div class="list">
            <div class="container">
                <ul>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Action Comics</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">American Vampire 1976</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Aquaman</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batgirl</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batman</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batman Beyond</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">batman/superman</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batman/superman Annual</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">BAtman: the joker War zone</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batman Three Jokers</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Batman White Knight</span>
                    </li>
                    <li class="card-img">
                        <figure>
                            <img 
                                :src="require(`../assets/img/${card.url}`)" 
                                :alt="card.description"
                            />
                        </figure>
                        <span class="text">Cat Woman</span>
                    </li>
                </ul>
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="col-50-left">
                    <div>
                        <ul>
                        <li>
                            <h3>DC COMICS</h3>
                        </li>
                        <li>Characters</li>
                        <li>Comics</li>
                        <li>Movies</li>
                        <li>TV</li>
                        <li>Games</li>
                        <li>Videos</li>
                        <li>News</li>
                    </ul>
                    <ul>
                        <li>
                            <h3>SHOP</h3>
                        </li>
                        <li>Shop DC</li>
                        <li>Shop DC Collectibles</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li>
                            <h3>DC</h3>
                        </li>
                        <li>Terms of use</li>
                        <li>Privacy Policy (new)</li>
                        <li>Ad choices</li>
                        <li>Advertising</li>
                        <li>Jobs</li>
                        <li>Subscriptions</li>
                        <li>Talent Workshops</li>
                        <li>CPSC Certificates</li>
                        <li>Ratings</li>
                        <li>Shop Help</li>
                        <li>Contact us</li>
                    </ul>
                    </div>
                    <div>
                        <ul>
                        <li>
                            <h3>SITES</h3>
                        </li>
                        <li>DC</li>
                        <li>MAD Megazine</li>
                        <li>DC kids</li>
                        <li>DC Universe</li>
                        <li>DC Power Visa</li>
                    </ul>
                    </div>    
                </div>
                <div class="col-50-right">
                </div>
            </div>
        </footer>
        <div class="background">
            <div class="container">
                <div class="link">
                    <a href="">SIGN UP NOW!</a>
                </div>
                <div class="icons">
                    <span>FOllOW US</span>
                    <figure class="icon">
                        <img src="../assets/img/footer-facebook.png" alt="icon">
                    </figure>
                    <figure class="icon">
                        <img src="../assets/img/footer-twitter.png" alt="icon">
                    </figure>
                    <figure class="icon">
                        <img src="../assets/img/footer-youtube.png" alt="icon">
                    </figure>
                    <figure class="icon">
                        <img src="../assets/img/footer-pinterest.png" alt="icon">
                    </figure>
                    <figure class="icon">
                        <img src="../assets/img/footer-periscope.png" alt="icon">
                    </figure>
                </div>
            </div>
        </div>  
    </body>
</html>
