<!DOCTYPE html>
<html lang="en">

<head>
    <title>Electrominer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:400,500,600,700,800,900" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.stepProgressBar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>


<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid da" >
            <div class="row">
                <div class="navbar-header">
                    <button type="button" style=" border-color: #5184B6; border-width: 2px" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"> 
                        <div class="upload-wallet" style="border-top: 0px">
                            <img src="{{ asset('assets/images/logo blue.png') }}"  width="200px" alt="" /> 
                        </div>
                    </a>
                </div>
                <div class=" collapse navbar-collapse navbar-right main_menu" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href=""><span class="support button glow-button">SUPPORT</span></a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="button" href="#">Almas Zhumanov - <span id="unit"> </span></a></li>
                        <li class="button profile-img" style="padding: 0" > <a href="#"><img src="{{ asset('assets/images/almas.jpg') }}" alt="" width="50" class="img-circle" /></a></li>
                        <li class="border-left" ><a style="font-weight: bold" class="button" href="#">SIGN OUT</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

  <section class="dashboard">
    <div class="row">
    <div class="col-md-3 dashboard-left" >
      <ul>
        <li class="active"><a href="dashboard.html">DASHBOARD</a></li>
        <li><a href="mining.html">MINING</a></li>
        <li><a class="button glow-button" href="orders.html">ORDERS</a></li>
        <li><a class="button glow-button" href="balances.html">BALANCE</a></li>
        <li><a class="button glow-button" href="coins_info.html">COIN INFO</a></li>
        <li><a class="button glow-button" href="statistics.html">STATISTICS</a></li>
        <li><a class="button glow-button" href="settings.html">SETTIING</a></li>
        <li><a class="button glow-button" href="faq.html">FAQ</a></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        <div class="container-fluid upload-wallet">
            <ul>
                <li style=" border-top: 0px; margin-left: -10px; margin-bottom: 10px;"><href="" ><img src="{{ asset('assets/images/upload-wallet.png') }}" alt="" width="250"></li>
            </ul>
        </div>
      </ul>
        
    </div>

    <div class="col-md-9 dashboard-right">
        <div class="dashboard-inside">
      <div class="row">
        <div class="col-md-4">
            <div class="mast_div">
                <h3 class="head_t">MY BALANCE</h3>
                <h3 class="balance" style="border-bottom: 0px">0.0856245 BTC</h3>
                <h3 class="balance"> $ 1,560.60  USD</h3>
            </div>  
            <div class="mast_div">
                <h3 class="head_t">MY CAPACITY</h3>
                <div class="cap_de">1,000W <span>+487W</span></div>
                <p class="short_text text-right"><a href="#">multiplier <b>49%</b></a></p>
            </div> 
        </div>
        <div class="col-md-8">
            <h3 class="head_t">MINING CAPACITY <p class="short_text text-right"><a href="#">increase limits</a></p></h3>    
            
            <div class="mining_graph">
                <img src="{{ asset('assets/images/limits_graph.jpg') }}" alt="" title="" class="img-responsive" />
            </div>
        </div>
      </div>

   <!--  <div class="col-md-3">
        <h3>ALGORITHM</h3>
        <h3 class="balance">SHA-256</h3>
    </div>
 -->
<div class="mining-table dash_table">
    <h3 class="head_t">ACTIVE ORDERS</h3>
    <table class="table table-class" >
    
    <thead>
        <tr>
            <th>Coin</th> 
            <th>Speed</th>
            <th>Share</th>
            <th>Status</th> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Bitcoin</td>
            <td>1.05 Th/s</td>
            <td>45%</td>

            <td width="200px">
                <div class="progress progress2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">           
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>Dash</td>
            <td>17.00 Gh/s</td>
            <td>20%</td>

            <td width="200px">
                <div class="progress progress2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">           
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>Ethereum</td>
            <td>5.50 Gh/s</td>
            <td>10%</td>

            <td width="200px">
                <div class="progress progress2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">           
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>Bulwark</td>
            <td>1.00 Gh/s</td>
            <td>25%</td>
            <td width="200px">
                <div class="progress progress2">
                    <div class="progress-bar" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">           
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table> 
</div>

    </div>
<div>
  </section>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $.ajax({
            url: "https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x85f171847f04eae21f8036dac40c544b8de1059a&address={{ Auth::user()->wallet}}&tag=latest&apikey=GUXAFR2J2VEWXDJINH8YC7VY1Z5WQB4IGU",
            dataType : "json",
            contentType: "application/json",
            crossDomain : true
            }).done(function(data) {
                $("#unit").text(data['result'].slice(0, -8)+' ELM');
        });
    });
 </script>
</body>
</html>
