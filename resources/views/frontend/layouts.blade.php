<!DOCTYPE html>
<html lang="en">
<head>
  <title>Electrominer</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700,800,900" rel="stylesheet">
  <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/jquery.stepProgressBar.css') }}" rel="stylesheet">
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">
  <link href="{{ asset('css/popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/reg.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>
  <nav class="navbar navbar-inverse">
    <!--<nav class="navbar navbar-inverse navbar-fixed-top">-->
    <div class="container-fluid">
      <div class="row">
        <div class="navbar-header">
          <button class="navbar-toggle" data-target="#myNavbar" data-toggle="collapse" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style=" top: 10px;" href="#">
            <img src="images/logo.png" width="200px">
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-right main_menu" id="myNavbar">
          <ul class="nav navbar-nav">
            <li>
              <a class="href-glow" href="#ico">ITO</a>
            </li>
            <li>
              <a href="#home-member">CLOUD MINING</a>
            </li>
            <li>
              <a href="#selection-about">TEAM</a>
            </li>
            <li>
              <a href="docs/bounty.pdf" target="_blank">BOUNTY</a>
            </li>
            <li>
              <a href="#projects">PROJECTS</a>
            </li>
            <li>
              <a href="faq.html" target="_blank">FAQ</a>
            </li>
            <li>
              <a href="{{ route('login') }}" >Login</a>
            </li>
            <li>
              <a href="http://www.electrominer.io/electrominer.apk" target="_blank">Download App DEMO (Android)</a>
            </li>
            <!--             <li>
              <a href="http://www.electrominer.io/electrominer.ipa" target="_blank">Download App DEMO (iOS)</a>
            </li> -->
          </ul>
          <!--<ul class="nav navbar-nav navbar-right main_menu_right">
                        <li><a href="#">Sign Up / Log In</a></li>
                    </ul>-->
        </div>
      </div>
    </div>
  </nav>
  @yield('container')
  <footer>
    <div class="container-full">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 columns" style="font-weight: lighter;">
          <p>
            <strong>Electrominer</strong>
            <br> Lighthouse Project One, LLC
            <br> 21092 Bake Parkway
            <br> Spectrum Center Business Park,
            <br> Lake Forest, CA 92630</p>
          <br>
          <strong>
            <a class="btn-sale con" href="mailto:info@electrominer.io" style="border-radius:5px !important;">CONTACT US</a>
          </strong>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 columns" style="font-weight: lighter;">
          <p class="link-glow">
            <a href="index.html">Homepage</a>
            <br>
            <a href="#features">Features</a>
            <br>
            <a href="#ico">Token Sale</a>
            <br>
            <a href="#roadmap">Roadmap</a>
            <br>
            <a href="#home-member">Membership</a>
            <br>
            <br>
            <br>
          </p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 columns" style="font-weight: lighter;">
          <p class="link-glow">
            <a href="#selection-about">Team</a>
            <br>
            <a href="#projects">Projects</a>
            <br>
            <a href="https://www.facebook.com/pg/electrominer-2019200084994707/about/?entry_point=page_edit_dialog&tab=page_info" target="_blank">Media</a>
            <br>
            <a href="index.html">News</a>
            <br>
            <a href="faq.html" target="_blank">FAQ</a>
            <br>
            <a class="btn-sale con2" href="mailto:info@electrominer.io" style="border-radius:5px !important;">
              Contact Us</a>
            <br>
            <br>
          </p>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5">
          <div class="news_letter">
            <div>
              <h3>
                <strong>STAY UPDATED</strong>
              </h3>
              <div class="news_letter_content">
                <strong>
                  <form action=
                     "https://app.getresponse.com/add_subscriber.html "
                     accept-charset="utf-8 " method="post ">
                     <!-- Email field (required) -->
                     <input type="text " class="email_btn email_color email_btn_bottom " placeholder="YOUR EMAIL ADDRESS "
                     name="email "/><br/>
                     <div class="news_top_btn ">
                     <!-- List token -->
                     <!-- Get the token at: https://app.getresponse.com/campaign_list.html -->
                     <input type="hidden " name="campaign_token " value="6ID7A " />
                     <!-- Subscriber button -->
                     <input class="send_btn " style="margin-top: -44px; max-width: 300px; float: right; background: #5184b6
                    !important; color: #feed01 !important; border-radius: 0px !important; " type="submit " value="SUBMIT ">
                   </div>
                  </form>
              </div>


              <!-- <div class="news_letter_content ">
                <h5>
                <strong><span>
                  <input autocompsociallete="off " class="email_btn email_color " placeholder="YOUR EMAIL ADDRESS
                    " style=" border-radius: 0px !important; " type="text "></span>
                  <!-- <input class="send_btn " style="background: #5184b6 !important; color: #feed01 !important; border-radius:
                    0px !important; " type="submit " value="SUBMIT ">
                  </strong>
                </h5> -->
              <!-- </div> -->
            </div>
          </div>
          <div class="footer_social text-right ">
            <ul>
              <li>
                <a href="https://twitter.com/electrominerITO "><i class="fa fa-twitter "></i></a>
              </li>
              <li>
                <a href="https://www.facebook.com/pg/Electrominer-2019200084994707/about/?entry_point=page_edit_dialog&amp;tab=page_info
                    "><i class="fa fa-facebook "></i></a>
              </li>
              <li>
                <a href="https://t.me/electrominer "><i class="fa fa-paper-plane "></i></a>
              </li>
              <li>
                <a href="# "><i class="fa fa-bitcoin "></i></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UC7yUoTGPYC-k04LC9F2iP-A?view_as=subscriber "><i class="fa fa-youtube "></i></a>
              </li>
              <li>
                <a href="https://medium.com/electrominer-journal "><i class="fa fa-medium "></i></a>
              </li>
              <li>
                <a href="https://www.reddit.com/user/electrominerICO "><i class="fa fa-reddit-alien "></i></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/company/electrominer/ "><i class="fa fa-linkedin "></i></a>
              </li>
              <li>
                <a class="steemit_btn "  href="https://steemit.com/@electrominer "><i><img src="images/steemit logo.png "></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row footer_cusBtn2 ">
        <div class=" mobile_center_ft " style="margin-left: 10%; text-align:right; margin-right: 0PX; padding-right: 0; ">

              <p>
                <a class="btn-sale-paper margin-right " href="docs/white_paper.pdf " target="_blank ">WHITE PAPER</a>
                <a class="btn-sale-paper margin-right " href="docs/three_pager.pdf " target="_blank ">THREE PAGER</a>
                <a class="btn-sale-paper margin-right " href="docs/bounty.pdf " target="_blank " >BOUNTY
                </a>
              </p>

        </div>
      </div>
    </div>
    <hr style="border-top: 1px solid #5184b6 !important; ">
    <div class="container-full " style="font-weight: lighter; ">
      <div class="row ">
        <div class="col-md-6 ">
          <p>© 2018 Electrominer. All Rights Reserved</p>
        </div>
        <div class="col-md-2 link-glow " >
          <p><a href="docs/terms_of_use.pdf " target="_blank ">Terms of Use</a></p>
        </div>
        <div class="col-md-2 link-glow ">
          <p><a href="docs/privacy_policy.pdf " target="_blank ">Privacy Policy</a></p>
        </div>
        <div class="col-md-1 link-glow ">
          <p><a href="docs/website_disclaimer.pdf " target="_blank ">Disclaimer</a></p>
        </div>
        <!--
          <div class="col-md-2 ">
            <a href="#home-intro ">Go to top</a>
          </div>-->
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/jquery.min.js') }}">
  </script>
  <script src="{{ asset('js/bootstrap.min.js') }} ">
  </script>
  <script src="{{ asset('js/countdown.js') }} ">
  </script>
  <script src="{{ asset('js/countdown2.js') }} ">
  </script>
  <script src="{{ asset('js/jquery.stepProgressBar.js') }} ">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js ">
  </script>
  <script src="{{ asset('js/PieceLabel.min.js') }} ">
  </script>
  <script src="{{ asset('js/highcharts.js') }}">
  </script>
  @yield('scripts')
  <script>
    // 5-4-18
    $('#myGoal').stepProgressBar({
      currentValue: 0,
      steps: [
        {
          topLabel: ' ',
          value: 200,
          bottomLabel: ' '
        },
        {
          topLabel: '30%',
          value: 400,
          bottomLabel: 'PRE-SALE'
        },
        {
          topLabel: '15%',
          value: 600,
          bottomLabel: 'ITO WEEK 1'
        },
        {
          topLabel: '10%',
          value: 800,
          bottomLabel: 'WEEK 2'
        },
        {
          topLabel: '5%',
          value: 1000,
          bottomLabel: 'WEEK 3'
        },
        {
          topLabel: '0%',
          value: 1200,
          bottomLabel: 'WEEK 4',
          mouseOver: function () {
            alert('mouseOver');
          },
          click: function () { alert('click'); }
        }
      ],
      unit: '$'
    });

    $('#get-current-value-btn').click(function () {
      alert($('#myGoal').stepProgressBar('getCurrentValue'));
    });
    $('#set-current-value-btn').click(function () {
      $('#myGoal').stepProgressBar('setCurrentValue', 500);
    });
    $('#find-step-btn').click(function () {
      console.log($('#myGoal').stepProgressBar('findStep', 500));
    });
    $('#add-step-btn').click(function () {
      $('#myGoal').stepProgressBar('addStep', { value: 250 });
    });
    $('#remove-step-btn').click(function () {
      $('#myGoal').stepProgressBar('removeStep', 500);
    });
  </script>

  <script type="text/javascript ">
  var randomScalingFactor = function() {
     return Math.round(Math.random() * 100);
  };
  var ctx = document.getElementById("chart-area ").getContext("2d ");
  var myDoughnut = new Chart(ctx, {
     type: 'pie',
     data: {
         labels: ["Company:29% ", "Bounty:1% ", "Pre Ico:10% ", "ICO:60% " ],
         datasets: [{
             data: [29,1,10,60] ,
             backgroundColor: ['#ffffff', '#ffcd04', '#feed01', '#4c81b5'],
             borderColor: '#4c81b5',
             borderWidth: 1,
         }]
     },
     showDatapoints: true,
     options: {
         tooltips: {
             enabled: true
         },
         pieceLabel: {
             render: 'label',
             arc: true,
             overlap:false,
             fontColor: '#194e80',
             fontSize: 12,
             position: 'outside',
         },
         responsive: true,
         legend: {
             display: false,
             position: 'top',
         },
         title: {
             display: false,
             text: 'Testing',
             fontSize: 30
         },
         animation: {
             animateScale: true,
             animateRotate: true
         }
     }
  });
  </script>
  <script type="text/javascript ">
  Highcharts.chart('Bar_chart', {

     chart: {
         type: 'column'
     },

     title: {
         text: ''
     },

     xAxis: {
         categories: ['2021', '2022', '2023', '2024', '2025'],
         tickInterval: 1

     },
     legend: {
        enabled: 0,
     },
     yAxis: {
         allowDecimals: false,
         min: 0,
         max: 20,
         title: {
             text: ''
         }
     },

     tooltip: {
         formatter: function () {
             return '<b>' + this.x + '<\/b><br/>' +
                 this.series.name + ': ' + this.y + '<br/>'
                 //'Total: ' + this.point.stackTotal;
         }
     },

     plotOptions: {
         column: {
             stacking: 'normal'
         }
     },

     series: [{
         name: 'Solar Energy',
         data: [10, 13, 15, 17, 18, 20],
         stack: 'male'
     },
              {
         name: 'Mining Capacity',
         data: [10, 11, 12, 13, 14, 15],
         stack: 'female'
     }]
  });
  </script>
</body>
</html>
