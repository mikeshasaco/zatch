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
</style>


    <!-- Header -->
    <header id="header" class="header" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h1 class="h1-large" style="color:white;">Zatch Bell Token</h1>
                        <p class="p-large" style="color:white;">Zatch Bell ($ZachBell) is a fully decentralized, peer-to-peer digital currency, owned in whole by its community with instant rewards for holders. </p>
                        <a class="btn-solid-lg" style="color:black; background-color:yellow" href="https://twitter.com/ZatchBell___">Twitter</a>
                        <a class="btn-solid-lg secondary" style="color:black; background-color:yellow" href="https://t.me/ZatchBell11">Telegram</a>
                        <br>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="zatchnoback.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Features -->
    <div id="features" class="cards-1"  style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="zatchnoback.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Rewards</h5>
                            <p style="color:white;">Rewards are distributed to holders automatically and in real-time. With every transaction (buy or sell), 10% of the transaction value is distributed to holders.</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="Cha_burago.gif" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">Type</h5>
                            <p style="color:white;"> Each Mamodos NFT Will Be Unique Type That Will Give To It Rarity</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="Zofis_koko_1.png" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:white;">NFT Battles</h5>
                            <p style="color:white;">We are building a NFT battle arena where you can take your Mamodos and battle amongst other members in the community</p>
                        </div>
                    </div>
                    <!-- end of card -->

               
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->


    <!-- Details 1 -->
    <div id="details" class="basic-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">NFT's</h2>
                        <p style="color:white;">Our goal with Zatch Bell ($ZACHBELL) is to provide a decentralized battle ground system on the block chain where our holders can battle amongst each other for prizes.</p>
                        <!-- <p>We enjoy helping small and medium sized tech businesses take a shot at established Fortune 500 companies</p> -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="zatchblast.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->



   

    <!-- Details 2 -->
    <div class="basic-3" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="image-container">
                    <img class="img-fluid" src="gifzatch.gif" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-5">
                    <div class="text-container">
                        <h2 style="color:white">Tokenomics</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">1,000,000,000,000,000 Total Supply</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">10% Redistribution Ethereum To Community Holders. <br>  Ethereum will be distrbuted every 60 min to holders</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">NO DEV Team Wallet </div>
                            </li>
                            <li class="media">
                                <i class="fas fa-chevron-right"></i>
                                <div class="media-body" style="color:white">2% To Liqudity pool </div>
                            </li>

                            <li>
                            <div class="media-body" style="color:white">50% of the total supply will be burned before launch </div>

                            </li>
                        </ul>
  
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-3 -->
    <!-- end of details 2 -->


    
    <!-- Pricing -->
    <div id="pricing" class="cards-2" style="background-color:black;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h2-heading">RoadMap</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card-->
                    <div class="card" style="background-color:black;">
                        <div class="card-body">
                            <div class="card-title" style="color:yellow;">Phase 1</div>
                            <ul class="list-unstyled li-space-lg">
                           
                                <li class="media">
                                    <i class="fas fa-chevron-right"></i><div class="media-body" style="color:white;">Release 1st Edition  NFT's </div>
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
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
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
                    </div> <!-- end of card -->
                    <!-- end of card -->

                    <!-- Card-->
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
                    </div> <!-- end of card -->
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of pricing -->



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