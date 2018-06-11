@extends('frontend.layouts')
@section('container')
<section class="home-banner">
    <div class="container-full">
      <div class="row">
        <div class="col-md-12">
          <h1 class="banner-title">
            <span>SELF-POWERED BLOCKCHAIN
              <br> DATA CENTERS</span>
            <br> TOKEN SALE COMING SOON</h1>
          <!--ICO coming soon, Pre-register for info about the pre-sale-->


          <div class="row">
            <div class="col-sm-12 text-center">
              <strong>
                <form action="https://app.getresponse.com/add_subscriber.html" class="div_center" accept-charset="utf-8" method="post">
                  <div class="news_letter_content-top">
                    <!-- Email field (required) -->
                    <input type="text" class="email_btn email_color" placeholder="YOUR EMAIL ADDRESS" style="border-radius: 0px !important;"
                      name="email" />
                  </div>
                  <div class="news_top_btn">
                    <!-- List token -->
                    <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                    <input type="hidden" name="campaign_token" value="6ID7A" />
                    <!-- Subscriber button -->
                    <div class="news_letter_btn">
                      <input class="send_btn news_letter_content-top-button" style="background: #feed01 !important; color: #5184b6 !important;   border-radius: 0px !important;"
                        type="submit" value="SUBSCRIBE">
                    </div>
                  </div>
                </form>
              </strong>
            </div>
          </div>


        </div>
      </div>
      <!--<div class="row">
              <div class="col-md-4 col-md-offset-4 ">
                <div id="countdown2" class="row">

                 </div>
          </div>
          </div>-->
      <br>
      <div class="row">
        <p class="sale-div text-center">
          <!--           <a class="btn-sale-paper btn-yellow-glow margin-right" href="">PRE-REGISTER</a>  -->
          <a class="btn-sale-paper btn-yellow-glow margin-right" href="docs/white_paper.pdf" target="_blank">WHITE PAPER</a>
          <a class="btn-sale-paper btn-yellow-glow" href="docs/three_pager.pdf" target="_blank">THREE PAGER</a>
        </p>
        <p class="down-icon-blue">
          <a href="#home-intro">
            <img style=" bottom: 0px; max-height: 35px;" alt="DOWN" src="images/download-arrow-y.png">
          </a>
        </p>
      </div>
    </div>
    <img alt="" class="img-responsive cutm_bg" src="images/MOUNTAINS.png">
  </section>
  <section class="home-intro" id="home-intro">
    <div class="container-full">
      <div class="row">
        <div class="col-md-6 col-sm-8">
          <h4>
            <strong>Introduction</strong>
          </h4>
          <p>Electrominer was founded in 2017 by Blockchain enthusiasts and professionals in Green Energy Production, Construction,
            IT, and Business. The project was created to address the problems of cryptomining and to contribute to the future
            of decentralized technologies. Electrominer will unleash the potential of blockchain technology by creating sustainable,
            expandable, and self-sufficient solutions driven by community and clean energy. We are inviting you to join us
            and build the future of decentralized technologies together!</p>
        </div>
        <div class="col-md-6 col-sm-4" id="solar">
          <img alt="" class="img-container img-responsive p_tab" src="images/SOLAR.png" width="400">
        </div>
      </div>
      <div class="row mobile_t">
        <div class="col-md-6 col-sm-8">
          <h4>
            <strong>Problems of Crypto-Mining:</strong>
          </h4>
          <p>-High electricity costs (up to 45% of mining profit)
            <br> -High level of CO2 emissions
            <br> -Hardware is expensive to purchase, maintain, and upgrade
            <br> -Long-term contracts provided by cloud mining services
            <br> -Mining contracts lock users into to only one single coin/algorithm</p>
        </div>
        <div class="col-md-6 col-sm-4">
          <img alt="" class="img-container img-responsive fr p_tab" src="images/CONTAINERS.png" width="400">
        </div>
      </div>
      <div class="row mobile_t">
        <div class="col-md-6 col-sm-8">
          <h4>
            <strong>Solutions offered by Electrominer:</strong>
          </h4>
          <p>-Self-powered, sustainable mining facilities with ever-expanding hashing power
            <br> -Use of alternative solar energy reduces carbon footprint
            <br> -Professional 24/7 monitoring and maintenance of mining equipment
            <br> -Unlimited, adjustable contracts tailored to each users unique needs
            <br> -Ability to swap between various coins/algorithms</p>
        </div>
        <div class="col-md-6 col-sm-4">
          <img alt="" class="img-container p_tab screen_tab" src="images/SCREEN.png" width="480">
        </div>
      </div>
      <br>
    </div>
  </section>
  <section class="feature-page" id="features">
    <div class="">
      <div class="container-fluid">
        <div class="row feature-row-1">
          <div class="col-lg-6 col-md-12 feature-1 nopadding">
            <div class="inside_dr">
              <div>
                <br>
                <h2>DATA CENTERS
                  <img alt="" class="de" src="images/white_left_arrow.png">
                </h2>
                <p>
                  <strong>Sustainable</strong>
                  <br> Electrominer is building our own energy generating solar power plant to reduce electricity expenses and
                  minimize the negative environmental impact of cryptomining. Electrominer is revolutionizing the mining
                  industry by using alternative energy, empowering us to make cryptomining more cost-effective, sustainable,
                  and self-powered.</p>
                <p>
                  <strong>Mobile</strong>
                  <br> Electrominer Mobile Data Center Units are housed in shipping containers, allowing high mobility for easy
                  transportation.</p>
                <p>
                  <strong>Reliable</strong>
                  <br> Electrominer Mobile Data Center Units will be equipped with exclusively designed air cooling systems to
                  solve the problem of overheating. Each unit will utilize remote-controlled software monitoring the status
                  of all equipment
                  <!-- combining them into total computing capacity-->.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 feature-2 nopadding">
            <img alt="" class="img-responsive " src="images/containers.jpg">
          </div>
        </div>
        <div class="row feature-row-2">
          <!-- 5-4-18 -->
          <div class="col-lg-6 col-md-12 feature-3 nopadding mobile_hide">
            <img alt="" class="img-responsive" src="images/screen1.png">
          </div>
          <div class="col-lg-6 col-md-12 feature-4 nopadding">
            <div class="inside_dr">
              <div class="">
                <br>
                <h2>
                  <img alt="" class="de2" src="images/blue_right_arrow.png"> CLOUD MINING PLATFORM</h2>
                <p>
                  <strong>
                    Unlimited Terms and Flexible Contracts
                  </strong>
                  <br> Electrominer offers unlimited, flexible, and adjustable contracts for self-increasing shares of available
                  hashing power. This will provide our members with the freedom to choose their own mining contracts which
                  can be for as little as one hour, with the ability to be cancelled anytime. Users can also manage their
                  share of available hashing capacity by spreading it around to mine multiple coins using multiple algorithms.
                </p>
                <p>
                  <strong>
                    Floating Hash Power Multiplier
                  </strong>
                  <br> The Electrominer Platform will provide its members with guaranteed mining capacity along with an innovative
                  floating multiplier. The multiplier will depend on the number of tokens held and the current load of the
                  platform, meaning unused mining power will be distributed between its active users.
                  <!--Therefore, since
                  Electrominer team is planning to increase its mining capacity through time, the amount of
                  guaranteed Hashrate per token will grow proportionally. -->
                </p>
                <p>
                  <strong>
                    Low fees
                  </strong>
                  <br> Generating our own power using solar energy allows for lower fees for renting out hashing capacity and
                  larger returns compared to traditional cloud mining.
                </p>
              </div>
            </div>
          </div>
          <!-- 5-4-18 -->
          <div class="col-lg-6 col-md-12 feature-3 nopadding mobile_show">
            <img alt="" class="img-responsive rf" src="images/screen1.png">
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="token-sale" id="ico">
    <div class="container-full">
      <h2 class="text-center">TOKEN SALE</h2>
      <div class="P_Bar">
        <p class="text-center p">70,000,000 ELM AVAILABLE + BONUS %</p>
        <br>
        <br>
        <br>
        <br>
        <!-- <img src="images/timeline.png" class="img-responsive" alt="" > -->
        <div id="myGoal">

        </div>
        <br>
        <p class="sale-div text-center" style="margin-top: 7%">
          <!-- <a class="btn-sale-paper btn-white-text margin-right" href="">PRE-REGISTER</a>  -->

          <a style="font-weight: bold;" class="btn-sale-paper btn-white-text margin-right" href="docs/white_paper.pdf" target="_blank">WHITE PAPER</a>
          <a style="font-weight: bold;" class="btn-sale-paper btn-white-text" href="docs/three_pager.pdf" target="_blank">THREE PAGER</a>
        </p>
        <p class="down-icon-blue">
          <a href="#token-sale">
            <img style="position: relative; margin-top: 20px; max-height: 35px;" alt="" src="images/download-arrow.png">
          </a>
        </p>
      </div>
      <br>
    </div>
  </section>
  <section class="token-sale art_sr" id="token-sale">
    <div class="container-full">
      <div class="row">
        <div class="col-md-6">
          <h3>ITO Mission Statement</h3>
          <p>Electrominer is launching an ITO to raise $73.7 million in order to establish a 10 Megawatt Mining Facility which
            will be powered by clean, renewable energy. The ITO campaign was conceived with the intention of expanding our
            mining facilities and to allow users to join the Global Blockchain Ecosystem. Electrominer’s expansion will be
            primarily dictated by the number of tokens sold during the ITO. Electrominer is an already existing mining facility
            based in Southern California, but to initiate the development of this project, Electrominer needs to raise a
            soft cap of $8 million.</p>
        </div>
        <div class="col-md-6">
          <div class="row">
            <div class="col-sm-8">
              <h3>Token Distribution</h3>
              <p>Each Electrominer token (ELM) represents a share of available mining capacity. This means token holders are
                able to become a member of the Electrominer community and receive access to the Electrominer Cloud Mining
                Platform. Token Supply: 100,000,000 ELM. Ticker: ELM</p>
            </div>
            <div class="col-sm-4">
              <div class="pull-right mobile_center">
                <img class="img-responsive" src="images/Distribution.png" width="600">
                <!-- Pie Chart -->
                <!--<div class="Pie_chart">
                     <canvas id="chart-area"></canvas>
                   </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <div class="row nopadding">
        <div class="col-md-6 fund_usage">
          <h3>Funds Usage</h3>
          <div class="row">
            <div class="col-md-6">
              <p>Operating reserves : 4%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="1" class="progress-bar" role="progressbar" style="width: 4%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Land and Utilities : 9%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 9%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Mining Data Centers : 52%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar" role="progressbar" style="width: 52%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Cloud-Mining Platform : 1%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar" role="progressbar" style="width: 1%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Solar Energy : 21%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar" role="progressbar" style="width: 21%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Soft costs : 8%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="8" class="progress-bar" role="progressbar" style="width: 8%;"></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p>Contingency : 5%</p>
            </div>
            <div class="col-md-6">
              <div class="progress progress2">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="3" class="progress-bar" role="progressbar" style="width: 5%;"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mobile_t_space">
          <h3>Reinvestments and Capacity</h3>
          <!-- 5-4-18 -->
          <!--<img class="img-responsive reinverstment_img" src="images/Reinvestment.png" width="660"> -->
          <div class="dia_ad">
            <div class="view_m">
              <div class="view_1">
                <span class="cr_1"></span> Solar Energy - 30%</div>
              <div class="view_2">
                <span class="cr_2"></span> Mining Capacity - 10%</div>
            </div>
            <ul class="diagram_str">
              <li>
                <img class="img-responsive" src="images/g1.png"> 2020</li>
              <li>
                <img class="img-responsive" src="images/g2.png"> 2021</li>
              <li>
                <img class="img-responsive" src="images/g3.png"> 2022</li>
              <li>
                <img class="img-responsive" src="images/g4.png"> 2023</li>
              <li>
                <img class="img-responsive" src="images/g5.png"> 2024</li>
              <li>
                <img class="img-responsive" src="images/g6.png"> 2025</li>
            </ul>
            <ol class="diagram_str2">
              <li>20</li>
              <li>15</li>
              <li>10</li>
              <li>5</li>
              <li>MW</li>
            </ol>
          </div>
          <!--<div id="Bar_chart" style="min-width: 280px; height: 300px; margin: 0 auto"></div>-->
        </div>
      </div>
      <br>
      <br>

      <p class="down-icon-blue">
        <a href="#roadmap">
          <img style="position: relative; bottom: 20px; max-height: 35px;" alt="" src="images/download-arrow.png">
        </a>
      </p>
    </div>
  </section>
  <section class="token-sale" id="roadmap">
    <div class="container-full text-center">
      <div class="row text-center">
        <div style="margin-bottom: 65px" class="col-md-12">
          <h2 class="text-center">
            <strong>ROADMAP</strong>
          </h2>
          <p style="margin-bottom: 50px;" class="text-center drw">
            <b>Learn more</b> about what we've achieved so far</p>
          <br>
          <img class="text-center img-responsive" src="images/roadmap.png" width="1800">
        </div>
        <br>
        <br>


      </div>
      <p class="down-icon-blue">
        <a href="#home-member">
          <img style="position: inherit; bottom: 10px; max-height: 35px;" alt="" src="images/download-arrow.png">
        </a>
      </p>
    </div>
  </section>
  <section class="home-member member_row" id="home-member">
    <div class="container-full">
      <br>
      <h1>JOIN OUR COMMUNITY AND THE
        <span>ELECTROMINER REVOLUTION</span>
      </h1>
      <br>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <h2>MEMBERSHIP</h2>
          <p>Buying any amount of Electrominer tokens means becoming a member of the Electrominer Community and sharing in the
            total hash power capacity. Members will be granted access to the Electrominer Cloud Mining Platform and receive
            mining profits using their guaranteed hash power capacity. Electrominer will collect a symbolic “rental fee”
            in the form of membership and automatically transfer mined coins directly to users' wallets -- you set the wallet
            address, we send the profits! Unused mining capacity will be distributed between currently active members according
            to the number of tokens held. Furthermore, Electrominer will provide its members with an opportunity to participate
            in the decision-making process of our project by taking part in voting on strategic improvements to our services.</p>
          <br>
        </div>
        <div class="col-md-6 col-sm-12 ">
          <img class="img-laptop" src="images/MACBOOK.png">
        </div>
      </div>
    </div>
  </section>
  <section class="wallet">
    <div class="container-full">
      <div class="row">
        <div class="col-md-6 automatically">
          <!--<img src="images/upload-wallet.png"  class="img-responsive" />
                    <h2 class="text-center">AUTOMATICALLY<br>
                    <span>TRANSFER ANYTIME</span></h2>
                </div>-->
          <h2>CLOUD MINING PLATFORM</h2>
          <p>Our platform provides our members with guaranteed mining capacity available for rent and a floating multiplier
            to increase profitability. Each members’ mining capacity will be dictated by the number of tokens held by each
            individual member. The Web Portal and the Mobile Application will allow our users to track or change the status
            of their chosen cryptomining contract with the ability to withdraw funds at any time.
          </p>
        </div>
      </div>
      <br>
      <br>
      <div class="row steps-icons">
        <div class="col-md-2 col-sm-4 col-xs-6 icon_div one_a">
          <img class="img-responsive" src="images/token.png">
          <h3 class="text-center ico_txt">TOKEN
            <br> PURCHASE
          </h3>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 icon_div two_a">
          <img class="img-responsive" src="images/membershp.png">
          <h3 class="text-center ico_txt">MEMBERSHIP</h3>
        </div>
        <!--         <div class="col-md-2 col-sm-4 col-xs-6 icon_div three_a">
          <img class="img-responsive" src="images/platform.png">
          <h3 class="text-center ico_txt">PLATFORM<br>
          ACCESS</h3>
        </div> -->
        <!--         <div class="col-md-2 col-sm-4 col-xs-6 icon_div four_a">
          <img class="img-responsive" src="images/share.png">
          <h3 class="text-center ico_txt">CLOUD<br>
          CAPACITY</h3>
        </div> -->
        <div class="col-md-2 col-sm-4 col-xs-6 icon_div five_a">
          <img class="img-responsive" src="images/cloud.png">
          <h3 class="text-center ico_txt">CLOUD
            <br> MINING
          </h3>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 icon_div six_a">
          <img class="img-responsive" src="images/wallet.png">
          <h3 class="text-center ico_txt">RECEIVE
            <br> REWARDS
          </h3>
        </div>
      </div>
    </div>
  </section>
  <section class="selection-project" id="projects">
    <div class="container-fluid">
      <h2 class="text-center">
        <strong>
          A SELECTION OF PROJECTS
        </strong>
      </h2>
      <h2 class="worked text-center">WE'VE WORKED ON
      </h2>
    </div>
    <div class="row nopadding">
      <div class="col-md-4 nopadding">
        <div class="popup nopadding" onclick="myFunction01()">
          <img alt="" class="img-responsive img-class" src="images/projects/01.jpg">
          <span class="popuptext" id="myPopup01">Description Here</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction01() {
              var popup = document.getElementById("myPopup01");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
      <div class="col-md-4 nopadding">
        <div class="popup nopadding" onclick="myFunction02()">
          <img alt="" class="img-responsive img-class" src="images/projects/02.jpg">
          <span class="popuptext" id="myPopup02">Description Here</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction02() {
              var popup = document.getElementById("myPopup02");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
      <div class="col-md-4 nopadding">
        <div class="popup nopadding" onclick="myFunction03()">
          <img alt="" class="img-responsive img-class" src="images/projects/03.jpg">
          <span class="popuptext" id="myPopup03">Description Here</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction03() {
              var popup = document.getElementById("myPopup03");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
    </div>
    <div class="nopadding row">
      <div class="col-md-4 nopadding">
        <div class="popup nopadding" onclick="myFunction04()">
          <img alt="" class="img-responsive img-class" src="images/projects/04.jpg">
          <span class="popuptext" id="myPopup04">Description Here</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction04() {
              var popup = document.getElementById("myPopup04");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
      <div class="col-md-4 nopadding">
        <div class="popup" onclick="myFunction05()">
          <img alt="" class="img-responsive img-class" src="images/projects/05.jpg">
          <span class="popuptext" id="myPopup05">Description Here</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction05() {
              var popup = document.getElementById("myPopup05");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
      <div class="col-md-4 nopadding">
        <div class="popup" onclick="myFunction06()">
          <img alt="" class="img-responsive img-class" src="images/projects/06.jpg">
          <span class="popuptext" id="myPopup06">Description Heryhe</span>
          <script>
            // When the user clicks on div, open the popup
            function myFunction06() {
              var popup = document.getElementById("myPopup06");
              popup.classList.toggle("show");
            }
          </script>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="selection-about" id="selection-about">
    <div class="container-fluid">
      <h1 class="text-center">ELECTROMINER TEAM</h1>
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <!--  IMg CIrcle  class is bootstrap class & text-center also
                        -->
          <img alt="" class="img-circle img-class" height="200" src="images/almas.jpg" width="200">
          <p>
            <strong>Almas Zhumanov</strong>
          </p>
          <p>CEO, Co-Founder</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <!--  IMg CIrcle  class is bootstrap class & text-center also
                        -->
          <img alt="" class="img-circle img-class" height="200" src="images/aziz.jpeg" width="200">
          <p>
            <strong>Aziz Aznabakiyev</strong>
          </p>
          <p>CTO</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/natalia.jpg" width="200">
          <p>
            <strong>Natalia Shipovalova</strong>
          </p>
          <p>Marketing Manager</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/ken.jpg" width="200">
          <p>
            <strong>Kenneth O'Leary</strong>
          </p>
          <p>Construction/Development Manager</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/david.png" width="200">
          <p>
            <strong>David Hall</strong>
          </p>
          <p>Chief Construction Officer</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/alex.png" width="200">
          <p>
            <strong>Alexander Fedorchenko</strong>
          </p>
          <p>Software Developer</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/amit.jpeg" width="200">
          <p>
            <strong>Amit Trivedi</strong>
          </p>
          <p>Mobile Developer</p>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 text-center about-div">
          <img alt="" class="img-circle img-class" height="200" src="images/olga.jpg" width="200">
          <p>
            <strong>Olga Aznabakiyeva</strong>
          </p>
          <p>Web Developer</p>
        </div>
      </div>
    </div>
  </section>
  @endsection