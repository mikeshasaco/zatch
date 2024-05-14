@extends('layouts.master')
@section('content')


<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #000000;
  padding: 8px;
    background-color: #000000;
    color:white;

}

#customers tr:nth-child(even){background-color: #000000;}


#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #000000;
  color: white;
}

   
.cardone {
  
  --color1: rgb(0, 231, 255);
  --color2: rgb(255, 0, 231);
  
  width: 320px;
  height: 446px;
  /* background-color: #FFD700; */
  background-size: 141%;
  background-repeat: no-repeat;
  background-position: center;
  border-radius: 5% / 3.5%;
  box-shadow: -13px -13px 13px -15px var(--color1), 
    13px 13px 13px -15px var(--color2), 
    0 0 4px 2px rgba(255,255,255,0.5),
    0 35px 25px -15px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  display: block;
  vertical-align: middle;
  margin: 20px 10px;
  /* roatation */
  /* animation: holoCard 15s ease infinite; */
  transform-origin: center;
  z-index: 10;
  overflow: hidden;
  transform: translate3d(0,0,-1px); 
}

.cardone.redmask {
  --color1: rgb(255, 148, 54);
  --color2: rgb(255, 90, 144);
  background-image: url("zatch-bell.jpg");
  background-size: 279%;
  margin: auto;
}

.cardone.redmask:after {
  opacity: 1;
  background-image: url("https://media.giphy.com/media/gmDwphaOWmfkY/giphy.gif");
  background-position: center;
  background-size: 160%;
  z-index: 2;
  animation: holoSparkle 15s ease infinite both;
  filter: brightness(1);
  transition: filter 0.5s ease;
}
.cardone > span {
  position: relative;
  top: 45%;
}
.cardone:before,
.cardone:after {
  content: "";
  opacity: .1;
  mix-blend-mode: screen;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  background-repeat: no-repeat;
}
.cardone:before {
  background-position: 50% 50%;
  background-size: 300% 300%;
  animation: holoGradient 15s ease infinite both;
  background-image: linear-gradient(
    115deg,
    transparent 0%,
    var(--color1) 30%,
    transparent 47.5%,
    transparent 52.5%,
    var(--color2) 70%,
    transparent 100%
  );
}

</style>


    <!-- Header -->
    <header id="header" class="header" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large" style="color:white;">GameStopWifDog Token</h1>
                        <p class="p-large" style="color:white;">GameStopWifDog ($GAWD) is a fully decentralized, peer-to-peer digital currency, launching on the solana network! </p>
                        <a class="btn-solid-lg" style="color:black; background-color:red" href="https://twitter.com/ZatchBell___">Twitter</a>
                        <a class="btn-solid-lg secondary" style="color:black; background-color:red" href="https://t.me/ZatchBell11">Telegram</a>
                        <br>
                    </div> <!-- end of text-container -->
                </div> 
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="gamedog.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> 
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- <div id="features" class="cards-1"  style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="zatchnoback.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Rewards</h5>
                            <p style="color:white;">Rewards are distributed to holders automatically and in real-time. With every transaction (buy or sell), 10% of the transaction value is distributed to holders.</p>
                        </div>
                    </div>
                   
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="Cha_burago.gif" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Type</h5>
                            <p style="color:white;"> Each Mamodos NFT Will Be Unique Type That Will Give To It Rarity</p>
                        </div>
                    </div>
                  
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="Zofis_koko_1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">NFT Battles</h5>
                            <p style="color:white;">We are building a NFT battle arena where you can take your Mamodos and battle amongst other members in the community</p>
                        </div>
                    </div>
                  

               
                </div> 
            </div> 
        </div>
    </div>  -->
    




   

    <!-- Details 2 -->
    <div class="basic-3" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="gamedog.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">Launching on Solana</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">Launching on Pumpfun</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">Contract Address</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">website link </div>
                            </li>
                            <!-- <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">2% To Liqudity pool </div>
                            </li> -->

                            <!-- <li>
                            <div class="media-body" style="color:white">50% of the total supply will be burned before launch </div>

                            </li> -->
                        </ul>
  
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


     
    

        <!-- Details 1 -->
        <!-- <div id="details" class="basic-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">Presale Instructions:</h2>
                        <p style="color:white;">Send Ethereum amount to the designated wallet address: 0x1D979859040938b6203fD4c53665828F3b1C156a</p>
                        <p style="color:white;">Tokens will the be sent immediately to the user wallet address.</p>
                        <p style="color:white;">The user will also recieve the Zatch Dark moon NFT that will get sent to there opensea account.</p>
                        <p style="color:white;">Message me on Telegram King Zatch and I will make sure you recieve your tokens and nft before launch.</p>
                        <a class="btn-solid-lg secondary" style="color:black; background-color:yellow" href="https://t.me/ZatchBell11">Join Telegram for Join Presale</a> -->

                        <!-- <p>We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p> -->
                    <!-- </div> 
                </div>  -->
                <!-- <div class="col-lg-7">
                <table class="table"> -->
  <!-- <thead>
    <tr>
     <center><h2 style="color:white;">Presale Chart</h2> </center>
    </tr>
  </thead>
  <tbody>
  <tr>
    
    <td style="color:white;">ETH Amount</td>
    <td style="color:white;">($Zatch) Tokens</td>
   
  </tr>
    <tr>
    
      <td style="color:white;">.1 ETH</td>
      <td style="color:white;">5,000,000,000</td>
    </tr>
    <tr>
      
      <td style="color:white;">.2 ETH</td>
      <td style="color:white;">10,00,0000,000</td>
    </tr>
    <tr>
     
      <td style="color:white;">.3 ETH </td>
      <td style="color:white;">15,00,0000,000</td>
    </tr>
    <tr>
     
     <td style="color:white;">.4 ETH</td>
     <td style="color:white;">20,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">.5 ETH</td>
     <td style="color:white;">25,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">.6 ETH</td>
     <td style="color:white;">30,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">.7 ETH</td>
     <td style="color:white;">35,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">.8 ETH</td>
     <td style="color:white;">40,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">.9 ETH</td>
     <td style="color:white;">45,00,0000,000</td>
   </tr>
   <tr>
     
     <td style="color:white;">1 ETH</td>
     <td style="color:white;">50,00,0000,000</td>
   </tr>

  </tbody>
</table>
                     -->
                    <!-- </div> 
                </div> 
            </div> 
        </div> 
    </div> 
     -->

    
    <!-- <div id="pricing" class="cards-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">RoadMap</h2>
                </div> 
            </div> 
            <div class="row">
                <div class="col-lg-12">

                    <div class="card" style="background-color:black;">
                        <div class="card-body">
                            <div class="card-title" style="color:yellow;">Growth</div>
                            <ul class="list-unstyled li-space-lg">
                           
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Grow </div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">1000 Holders</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">2,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">1 Million MarketCap</div>
                                </li>

                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Marketing Campaign</div>
                                </li>
                            </ul>
                         
                        </div>
                    </div> 
                    

                    
                    <div class="card" style="background:black;">
                        <div class="card-body">
                            <div class="card-title" style="color:yellow;">Phase 2</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release 2nd Edition  NFT's</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">5,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">10,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">5 Million MarketCap</div>
                                </li>

                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Coingecko and CoinMarketcap</div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> 
                    

                    
                    <div class="card" style="background:black;">
                        <div class="card-body">
                            <div class="card-title" style="color:yellow;">Phase 3</div>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release NFT's Battles</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">10,000 Holders</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">15,000 Telegram Members</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;"> 8 Million MarketCap</div>
                                </li>
                                <li class="media">
                                <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;"> Cex and Dex </div>
                                </li>
                            </ul>
                           
                        </div>
                    </div> 
                    

                </div> 
            </div> 
        </div> 
    </div> 
   
 -->


<!-- <table id="customers">
  <tr>
    <th>BayBlade</th>
    <th></th>
    <th>Country</th>
  </tr>
  <tr>
    <td>  <img class="img-fluid" src="images/cyberusyellow.gif" height="200px" width="200px" alt="alternative"></td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
 
</table> -->



@endsection