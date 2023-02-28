   
    @extends('layouts.app')
    @section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Home</div>
                    <div class="card-body">
                        <p>You are in Home Page</p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- React root DOM -->
    <div id="user"> 
    </div>

    <!-- React JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <main id="primary" class="site-main">

        <div class="container">
        
            <div class="col mt24">
                <div class="col-content-1 sticky-side">
                    <ul class="side-menu">
                        <li>
                            <img src="/storage/img/2023/02/Group-1005.png" class="" title="" alt=""> All Sports <span class="counter-balloon">1923</span> 
                        </li>
                        <li class="selected">
                            <img src="/storage/img/2023/02/ic_outline-sports-basketball.png" class="" title="" alt=""> Basketball <span class="counter-balloon">152</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/bx_football.png" class="" title="" alt=""> Football <span class="counter-balloon">123</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/bx_tennis-ball.png" class="" title="" alt=""> Tennis <span class="counter-balloon">123</span> 
                        </li>                                                
                        <li>
                            <img src="/storage/img/2023/02/material-symbols_sports-volleyball-outline.png" class="" title="" alt=""> Volleyball <span class="counter-balloon">123</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/icon-park_rugby-one.png" class="" title="" alt=""> Rugby <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/bx_baseball.png" class="" title="" alt=""> Baseball <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/Icehockey.png" class="" title="" alt=""> Ice Hockey <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/icon-park-outline_badminton.png" class="" title="" alt=""> Badminton <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/MMA.png" class="" title="" alt=""> MMA <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/iconoir_boxing-glove.png" class="" title="" alt=""> Boxing <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/Cueball.png" class="" title="" alt=""> Cue ball <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/mdi_racing-helmet.png" class="" title="" alt=""> Moto Sport <span class="counter-balloon">23</span> 
                        </li>
                        <li>
                            <img src="/storage/img/2023/02/game-icons_american-football-helmet.png" class="" title="" alt=""> NFL <span class="counter-balloon">40</span> 
                        </li>                                                
                    </ul>
                </div>

                <div class="col-content-9">
                    <div class="nav-tabs">
                        <ul class="nav-tabs-menu">
                            <li>
                                <a href="#">All</a>
                            </li>
                            <li class="selected">
                                <a href="#">NBA</a>
                            </li>
                            <li>
                                <a href="#">PBA</a>
                            </li>
                            <li>
                                <a href="#">MPBA</a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="space-btw"></div>

                    <div class="hot-live-events">
                        <div class="hot-live">
                            <img src="/storage/img/2023/02/hot.png" alt="" title="">
                            <span>Hot Live Events</span>
                        </div>

                        <div class="hot-live-tabs">
                            <div class="hot-live-content">
                                <div class="player-match">
                                    <div class="player-match-one">
                                        <img src="/storage/img/2023/02/Pistons.png" alt="Piston">
                                        <span>Piston</span>
                                    </div>
                                    <div class="player-match-score">
                                        <span class="score">98 - 95</span>
                                        <span class="status">Finished<span>
                                    </div>
                                    <div class="player-match-two">
                                        <img src="/storage/img/2023/02/Magic.png" alt="Magic">
                                        <span>Magic</span>
                                    </div>
                                </div>
                                
                                <div class="player-match-standing">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="100px">Team</th>
                                                <th>1st</th>
                                                <th>2nd</th>
                                                <th>3rd</th>
                                                <th>4th</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bluetxt">76rs</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                            <tr>
                                                <td class="bluetxt">Pelicans</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="hot-live-content">
                                <div class="player-match">
                                    <div class="player-match-one">
                                        <img src="/storage/img/2023/02/76ers.png" alt="76rs">
                                        <span>76rs</span>
                                    </div>
                                    <div class="player-match-score">
                                        <span class="score">98 - 95</span>
                                        <span class="status">2nd Quarter</span>
                                        <span class="last-min">03:32</span>
                                    </div>
                                    <div class="player-match-two">
                                        <img src="/storage/img/2023/02/Pelicans.png" alt="Pelicans">
                                        <span>Pelicans</span>
                                    </div>
                                </div>
                                
                                <div class="player-match-standing">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="100px">Team</th>
                                                <th>1st</th>
                                                <th>2nd</th>
                                                <th>3rd</th>
                                                <th>4th</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bluetxt">76rs</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                            <tr>
                                                <td class="bluetxt">Pelicans</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                            <div class="hot-live-content">
                                <div class="player-match">
                                    <div class="player-match-one">
                                        <img src="/storage/img/2023/02/Hornets.png" alt="Hornets">
                                        <span>Hornets</span>
                                    </div>
                                    <div class="player-match-score">
                                        <span class="score">98 - 95</span>
                                        <span class="status">3rd Quarter</span>
                                        <span class="last-min">03:32</span>
                                    </div>
                                    <div class="player-match-two">
                                        <img src="/storage/img/2023/02/Lakers.png" alt="Lakers">
                                        <span>Lakers</span>
                                    </div>
                                </div>
                                
                                <div class="player-match-standing">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="100px">Team</th>
                                                <th>1st</th>
                                                <th>2nd</th>
                                                <th>3rd</th>
                                                <th>4th</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="bluetxt">76rs</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                            <tr>
                                                <td class="bluetxt">Pelicans</td>
                                                <td>27</td>
                                                <td>39</td>
                                                <td>26</td>
                                                <td>8</td>
                                                <td class="bluetxt">98</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            

                        </div>
                    </div>

                    <div class="live-content">
                        <div class="live-content-filter">
                            <ul class="menu-filter">
                                <li>
                                    <a href="#">ALL</a>
                                </li>
                                <li class="selected">
                                    <a href="#">LIVE</a>
                                </li>
                                <li>
                                    <a href="#">FINISHED</a>
                                </li>
                                <li>
                                    <a href="#">SCHEDULED</a>
                                </li>
                            </ul>

                            <div class="live-content-cal">
                                <img src=""> 
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>

                        <div class="live-events">
                            <div class="live-bookmark">
                                <img src="/storage/img/2023/02/material-symbols_bookmark-2.png"> <span class="">Live</span>
                            </div>

                            <div class="live-team">
                                <div class="live-team-one">
                                    <img src="/storage/img/2023/02/Pelicans.png" width="21px" height="auto" alt="hornets"> <span>Hornets</span>
                                </div>
                                <div class="live-team-two">
                                    <img src="/storage/img/2023/02/Nuggets.png" width="21px" height="auto" alt="Raptors"> <span>Raptors</span>
                                </div>
                            </div>

                            <div class="live-team-scores">
                                <div class="live-team-scores-one">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Home Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                                <div class="live-team-scores-two">
                                    <table>
                                        <tr>
                                            <td class="semdark" width="110px">Visiting Town</td>
                                            <td>27</td>
                                            <td>39</td>
                                            <td>26</td>
                                            <td>20</td>
                                            <td class="whitebg bluetxt">110</td>
                                        <tr>
                                    </table>
                                </div>
                            </div>

                            <div class="live-date">
                                <span class="">12/29/2022</span>
                            </div>

                            <div class="live-shirt">
                                <img src="/storage/img/2023/02/shirt.png" alt="shirt">
                            </div>
                        </div>
                        
                    </div>

                    <?php
                    /*
                        while ( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                    */
                    ?>
                </div>

                <div class="col-content-2">
                    <div class="trending">
                        <div><span>TRENDING</span></div>

                        <div class="trending-latest">
                            <img src="/storage/img/2023/02/OKBET-WORLD-CUP-QATAR-2022-copy-scaled-3.png" alt="How Lauri Markanen Grew From Finished to The Finisher">
                            <h3>How Lauri Markanen Grew From Finished to The Finisher</h3>
                            <p>During Brazil's encounter against Serbia at the FIFA World Cup in Qatar on November 25, Neymar da Silva Santos suffered an ankle ...</p>
                            <div class="metas">
                                <span class="meta-tag">Basketball</span> <span class="meta-date"> 11/15/2022</span>
                            </div>
                        </div>

                        <div class="trending-latest">
                            <img src="/storage/img/2023/02/OKBET-WORLD-CUP-QATAR-2022-copy-scaled-2.png" alt="How Lauri Markanen Grew From Finished to The Finisher">
                            <h3>How Lauri Markanen Grew From Finished to The Finisher</h3>
                            <p>During Brazil's encounter against Serbia at the FIFA World Cup in Qatar on November 25, Neymar da Silva Santos suffered an ankle ...</p>
                            <div class="metas">
                                <span class="meta-tag">Basketball</span> <span class="meta-date"> 11/15/2022</span>
                            </div>
                        </div>

                        <div class="trending-latest">
                            <img src="/storage/img/2023/02/OKBET-WORLD-CUP-QATAR-2022-copy-scaled-1.png" alt="How Lauri Markanen Grew From Finished to The Finisher">
                            <h3>How Lauri Markanen Grew From Finished to The Finisher</h3>
                            <p>During Brazil's encounter against Serbia at the FIFA World Cup in Qatar on November 25, Neymar da Silva Santos suffered an ankle ...</p>
                            <div class="metas">
                                <span class="meta-tag">Basketball</span> <span class="meta-date"> 11/15/2022</span>
                            </div>
                        </div>

                        <div class="trending-latest">
                            <img src="/storage/img/2023/02/OKBET-WORLD-CUP-QATAR-2022-copy-scaled-4.png" alt="How Lauri Markanen Grew From Finished to The Finisher">
                            <h3>How Lauri Markanen Grew From Finished to The Finisher</h3>
                            <p>During Brazil's encounter against Serbia at the FIFA World Cup in Qatar on November 25, Neymar da Silva Santos suffered an ankle ...</p>
                            <div class="metas">
                                <span class="meta-tag">Basketball</span> <span class="meta-date"> 11/15/2022</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        
    </main>


    @endsection