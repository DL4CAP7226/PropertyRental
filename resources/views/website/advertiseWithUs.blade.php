@extends('website/layout/master')
@section('title','category')
@section('body')

<style>
    .qap-section {
    padding: 50px 0;
}
.training-row ul {
    width: 78%;
}
.training-row ul li {
    width: 45%;
    padding: 15px;
    margin-bottom: 40px;
}

.training-row ul li {
    width: 47%;
    padding: 10px;
    min-height: 100px;
    margin-bottom: 30px;
}
.training-row ul li {
    background: #fff;
    border: 1px dashed #666666;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    border-radius: 100px;
    width: 100%;
    float: left;
    padding: 10px;
    text-align: left;
    margin-bottom: 15px;
    position: relative;
    min-height: 90px;
}
.training-row ul li:nth-child(even) {
    float: right;
}

.training-row ul li {
    width: 45%;
    padding: 15px;
    margin-bottom: 40px;
}
.training-row ul li {
    width: 47%;
    padding: 10px;
    min-height: 100px;
    margin-bottom: 30px;
}
.training-row ul li {
    background: #fff;
    border: 1px dashed #666666;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    border-radius: 100px;
    width: 51%;
    float: left;
    padding: 10px;
    text-align: left;
    margin-bottom: 15px;
    position: relative;
    min-height: 90px;
}
.training-row ul li>i {
    top: 2px;
}

.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
.icon-target-aud {
    background-position: -269px -89px;
    width: 65px;
    height: 63px;
}
.qap-sprite {
    background-size: 453px 335px;
}
.icon-target-aud {
    background-position: -168px -50px;
    width: 40px;
    height: 40px;
}

.training-row ul li .details {
    left: 115px;
}

.training-row ul li .details {
    left: 100px;
    width: 65%;
    margin: 0;
}
.training-row ul li .details {
    position: absolute;
    top: 50%;
    -moz-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -webkit-transform: translate(0, -50%);
    transform: translate(0, -50%);
    top: 45%;
    left: 67px;
    width: 73%;
}
.training-row ul li a {
    font-size: 12px;
    position: absolute;
    bottom: 8px;
    right: 30px;
}

a {
    text-decoration: none !important;
}
a {
    text-decoration: none;
    color: #0083ca;
    outline: 0;
}
.training-row ul li:nth-child(even) {
    float: right;
}
.training-row ul li {
    width: 45%;
    padding: 15px;
    margin-bottom: 40px;
}
.training-row ul li {
    width: 47%;
    padding: 10px;
    min-height: 100px;
    margin-bottom: 30px;
}
.training-row ul li {
    background: #fff;
    border: 1px dashed #666666;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    -ms-border-radius: 100px;
    border-radius: 100px;
    width: 51%;
    float: left;
    padding: 10px;
    text-align: left;
    margin-bottom: 15px;
    position: relative;
    min-height: 90px;
}
.training-row ul li>i {
    top: 2px;
}

.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
.icon-affinity {
    background-position: -275px 0px;
    width: 65px;
    height: 62px;
}
.qap-sprite {
    background-size: 453px 335px;
}
.icon-affinity {
    background-position: -172px 0px!important;
    width: 40px;
    height: 40px;
}


.training-row ul li>i {
    top: 2px;
}

.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}


element.style {
}
@media screen and (min-width: 1024px)
.training-row ul li>i {
    top: 2px;
}
@media screen and (min-width: 768px)
.training-row ul li>i {
    top: 7px;
    left: 10px;
}

.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
@media screen and (min-width: 768px)
.icon-target-aud {
    background-position: -269px -89px;
    width: 65px;
    height: 63px;
}
@media screen and (min-width: 768px)
.qap-sprite {
    background-size: 453px 335px;
}
.icon-target-aud {
    background-position: -168px -50px!important;
    width: 40px;
    height: 40px;
}
@media screen and (min-width: 1024px)
.training-row ul li>i {
    top: 2px;
}

@media screen and (min-width: 768px)
.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
@media screen and (min-width: 768px)
.icon-stay-top {
    background-position: -369px 0px;
    width: 65px;
    height: 60px;
}
@media screen and (min-width: 768px)
.qap-sprite {
    background-size: 453px 335px;
}
.icon-stay-top {
    background-position: -230px 0px!important;
    width: 40px;
    height: 40px;
}
@media screen and (min-width: 1024px)
.training-row ul li>i {
    top: 2px;
}

@media screen and (min-width: 768px)
.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
@media screen and (min-width: 768px)
.icon-target {
    background-position: -374px -89px;
    width: 65px;
    height: 64px;
}
@media screen and (min-width: 768px)
.qap-sprite {
    background-size: 453px 335px;
}
.icon-target {
    background-position: -233px -50px!important;
    width: 40px;
    height: 40px;
}
@media screen and (min-width: 1024px)
.training-row ul li>i {
    top: 2px;
}
@media screen and (min-width: 768px)
.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
@media screen and (min-width: 768px)
.icon-device {
    background-position: -372px -168px;
    width: 66px;
    height: 63px;
}
@media screen and (min-width: 768px)
.qap-sprite {
    background-size: 453px 335px;
}
.icon-device {
    background-position: -231px -95px!important;
    width: 42px;
    height: 40px;
}
@media screen and (min-width: 1024px)
.training-row ul li>i {
    top: 2px;
}

@media screen and (min-width: 768px)
.training-row ul li>i {
    top: 7px;
    left: 10px;
}
.training-row ul li>i {
    display: block;
    position: relative;
    top: 15px;
    left: 7px;
    float: left;
}
@media screen and (min-width: 768px)
.icon-ads {
    background-position: -265px -168px;
    width: 66px;
    height: 65px;
}
@media screen and (min-width: 768px)
.qap-sprite {
    background-size: 453px 335px;
}
.icon-ads {
    background-position: -165px -95px!important;
    width: 42px;
    height: 42px;
}
.qap-sprite {
    background: url(https://teja10.kuikr.com/public/images/qap-icons-2x.png) no-repeat;
    background-size: 282px 190px;
    display: inline-block;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
    display: block;
}

.container {
    max-width: 1250px;
    width: 100%;
    margin: 0 auto;
}

.container {
    width: 100%;
    max-width: 1215px;
    margin: 0 auto;
    position: relative;
}
.row {
    margin-right: -15px;
    margin-left: -15px;
}

*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    font-family: 'Open Sans', sans-serif;
    background: #fff;
    color: var(--main-blk-clr);
    color: var(--main-blk-clr);
    padding: 0 !important;
}
body {
    margin: 0;
    font-size: 14px;
    line-height: 1.42857143;
    background-color: #fff;
    padding-top: 0;
    padding-bottom: 0;
    font-family: "Open Sans",sans-serif;
    color: #444;
}
@media (min-width: 1200px)
.col-lg-12 {
    width: 100%;
}

@media (min-width: 1200px)
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9 {
    float: left;
}
.packageBox .lt {
    width: 100%;
    float: left;
    display: flex;
}
.gridContnt .txtList li:before {
    content: "";
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: #d8232a;
    position: absolute;
    left: 1px;
    top: 7px;
}
.packageBox .lt .pckg-grid.up {
    transform: translate(0, 0);
    opacity: 1;
    transition: all 0.8s ease;
}

.packageBox .lt .pckg-grid {
    float: left;
    width: 24%;
    margin: 0 10px 0 0;
    transition: all 0.3s ease;
    border: 1px solid #E8E8E8;
    border-radius: 10px;
    min-height: 450px;
    transition: all 0.8s ease;
    transform: translate(0, 30px);
    opacity: 0;
}
*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    font-family: 'Open Sans', sans-serif;
    background: #fff;
    color: var(--main-blk-clr);
    color: var(--main-blk-clr);
    padding: 0 !important;
}
body {
    margin: 0;
    font-size: 14px;
    line-height: 1.42857143;
    background-color: #fff;
    padding-top: 0;
    padding-bottom: 0;
    font-family: "Open Sans",sans-serif;
    color: #444;
}
.packageBox .lt .insdPkage .head {
    text-align: center;
    background: #ff5d5d;
    border-radius: 10px;
    margin: 6px 6px 0;
    padding: 24px 10px 29px 10px;
    overflow: hidden;
}

.packageBox .lt .insdPkage .head {
    text-align: center;
    transition: all 0.4s ease;
}
.packageBox .lt .insdPkage .head h1 {
    font-size: 30px;
    font-weight: 600;
    padding: 0 0 10px;
}
h1 {
    color: var(--main-blk-clr);
}
h1, h2, h3, h4, h5, h6 {
    font-family: 'Open Sans', sans-serif;
}
.packageBox .lt .insdPkage .head ul {
    text-align: center;
    padding: 0 0 8px;
}
.packageBox .lt .insdPkage .head ul li {
    display: inline-block;
    position: relative;
    padding: 0 8px;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
svg:not(:root) {
    overflow: hidden;
}
*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
svg[Attributes Style] {
    width: 10;
    height: 10;
}
.packageBox .lt .insdPkage .head ul li {
    display: inline-block;
    position: relative;
    padding: 0 8px;
}

ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.packageBox .offr {
    float: left;
    padding: 6px 10px 8px 25px;

}
.packageBox .offr label {
    float: left;
    margin: 1px 12px 0 0;
    font-size: 12px;
}

label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
.packageBox .offr span {
    float: left;
    text-decoration: line-through;
    font-size: 13px;
}

*, :after, :before, input[type=search] {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.packageBox h3 {
    /* float: right; */
    font-weight: 700;
    font-size: 26px;
}
.gridContnt .cta {
    padding: 20px 0 0;
}
.butn {
    background: #fff;
    color: #EF534E;
    width: auto;
    height: 36px;
    line-height: 33px;
    display: block;
    text-align: center;
    width: 153px;
    border: 1px solid #EF534E;
    transition: all 0.4s ease;
    border-radius: 4px;
    position: relative;
    overflow: hidden;
    font-size: 15px;
    padding: 0 24px;
    font-weight: 500;
    margin: 0 auto;
}

a {
    text-decoration: none;
    transition: all 0.3s ease-in;
    color: var(--main-blk-clr);
    color: #303030;
}
.btn-group .dropdown-toggle:active, .btn-group.open .dropdown-toggle, a, img {
    outline: 0;
}
.butn span {
    display: inline-block;
    position: relative;
    z-index: 9;
}
.gridContnt .gridMeter {
    overflow: hidden;
    padding: 15px 0 0 26px;
}
.gridContnt .gridMeter span {
    float: left;
    font-size: 12px;
    font-weight: 600;
    padding: 19px 2px;
}
.gridContnt .gridMeter .meterBox {
    float: left;
    position: relative;
}
.gridContnt .gridMeter .yellow .txt {
    background: #fef6df;
}

.gridContnt .gridMeter .txt {
    background: #e9f7e8;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    position: absolute;
    left: 11px;
    top: 11px;
    font-size: 12px;
    text-align: center;
    padding: 9px 0 0;
    font-weight: 600;
}
svg:not(:root) {
    overflow: hidden;
}
.gridContnt .txtList {
    padding: 0 12px 8px;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.gridContnt .txtList li:first-child {
    font-weight: 700;
}
.gridContnt .txtList li {
    position: relative;
    line-height: 18px;
    padding: 0 0 6px 14px;
    font-size: 13px;
    margin: 0 0 4px;
}
.gridContnt .txtList li:before {
    content: "";
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: #d8232a;
    position: absolute;
    left: 1px;
    top: 7px;
}
.udgradBar {
    text-align: center;
    padding: 20px 0 0;
}
.udgradBar h2.active {
    transform: translate(0, 0);
    opacity: 1;
}
.udgradBar h2 {
    font-size: 18px;
    font-weight: 600;
    padding: 0 0 11px;
    transition: all 1s ease;
    transform: translate(0, 20px);
    opacity: 0;
}
.udgradBar ul.active {
    transform: translate(0, 0);
    opacity: 1;
}

.udgradBar ul {
    text-align: center;
    margin: 0 0 40px;
    transition: all 1s ease;
    transform: translate(0, 20px);
    opacity: 0;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}

.udgradBar ul li {
    display: inline-block;
    position: relative;
    font-size: 13px;
    color: #666666;
    position: relative;
    display: inline-block;
    margin-right: 13px;
    padding: 0 0px 0 18px;
    font-weight: 600;
}
ul, li {
    margin: 0;
    padding: 0;
    list-style: none;
}
.udgradBar ul li:before {
    position: absolute;
    content: "";
    display: block;
    border: solid #fff;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    border-color: #24a427;
    height: 10px;
    left: 2px;
    top: 3px;
    width: 6px;
}

</style>

<div class="container">
    <div class="text-center">
        <br>
        <h3>
    EXPLORE THE POWER OF NESTRAY AUDIENCE PLATFORM
        </h3>
        <p>
            Consumers don’t come to Nestray for entertainment or news. They come to us with a very precise intent – to either buy, sell or find something – across a wide range of categories including cars, homes, mobiles, furniture, jobs and various services. Armed with this powerful information, brands can target audiences with high intent and purchasing power and ensure the maximum impact for their campaigns.
        </p>
        <button class="btn btn-primary">Enquire Now</button>
        </div>
    </div>
    <br>
    <br>
    <section class="qap-section training-row" style="background:#eaf0af;">
        <div class="container">
            <div class="text-center">
                <h3>Sharp Targeting. Powerful Results.</h3>
                <br>
                <ul>
                <li>
                    <i class="qap-sprite icon-target-aud"></i>
                    <div class="details">
                        <p>Target audiences who have high <br>purchase intent on our platform.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=royal_enfield_case_study">View Case Study</a>
                </li>
                <li>
                    <i class="qap-sprite icon-affinity"></i>
                    <div class="details">
                        <p>Reach affinity audiences across 180+ <br>categories with our cross category <br>targeting.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=renault_kwid_case_study">View Case Study</a>
                </li>

                <li><i class="qap-sprite icon-stay-top"></i>
                    <div class="details">
                        <p>Always stay top of mind with our <br>Cookie Pool Retargeting on and <br>outside Nestray.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=royal_enfield_case_study">View Case Study</a>
                </li>
                <li>
                    <i class="qap-sprite icon-target"></i>
                    <div class="details">
                        <p>Smarter ways to reach out to relevant <br>audiences with our Price, Competitor, <br>Hyperlocal Search based targeting.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=city_bank_case_study">View Case Study</a>
                </li>

                <li>
                    <i class="qap-sprite icon-device"></i>
                    <div class="details">
                        <p>Cut through clutter with innovations <br>for your ad on our platform.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=flipkart_case_study">View Case Study</a>
                </li>
                <li>
                    <i class="qap-sprite icon-ads"></i>
                    <div class="details">
                        <p>Your ad reaches a larger pool of <br>audiences bypassing Ad Blockers only <br>on Nestray.</p>
                    </div>
                    <a target="_blank" href="http://coimbatore.quikr.com/adsales?case_study=flipkart_case_study">View Case Study</a>
                </li>
            </ul>
            </div>
        </div>
    </section>   
    
    @php

    $plan = DB::table('advertises')->get();

    @endphp

    <div class="udgradBar">
                            <h2 class="active">Upgrade to Premium &amp; get more Responses</h2>

                            <ul class="active">
                                <li>Get Upto 7X Responses</li>
                                <li>Rank higher in Property Search</li>
                                <li>Sell your Property Faster</li>
                            </ul>
                        </div>
    <section class="packageBox">
    <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 col-md-12">

                        <!-- Package container left -->
                        <div class="lt">


                            <!-- Silver Package -->
    @foreach($plan as $items)

                            <div class="pckg-grid up active" data-tab="silver">
                                <div class="insdPkage">


                                    <!-- head -->
                                    <div class="head">
                                        <h1> {{ $items->plan }} </h1>

                                        <ul>
                                            <li><span> {{ $items->rating }} </span> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <path fill="#F4C505" fill-rule="nonzero" d="M5.244.18L6.58 3.011c.046.096.092.144.185.144l2.997.48c.231.048.323.288.139.48L7.734 6.323a.374.374 0 0 0-.092.24l.507 3.119a.256.256 0 0 1-.369.288L5.06 8.482c-.092-.048-.184-.048-.23 0L2.106 9.97c-.092.096-.323-.048-.277-.288l.508-3.12c0-.095 0-.191-.092-.24L.078 4.116c-.139-.144-.092-.432.138-.48l2.998-.48c.092 0 .139-.048.185-.144L4.736.18c.139-.24.415-.24.508 0z">
                                                    </path>
                                                </svg></li>

                                            <li>
                                                <span> {{ $items->purchase }} </span> Purchased
                                            </li>
                                        </ul>

                                        <div class="offr">
                                            <label>  {{ $items->off }}% Off</label>
                                            <span>₹  {{ $items->actualPrice }}  </span>
                                        </div>

                                        <h3>₹  {{ $items->disPrice }} </h3>

                                    </div>
                                    <!-- head -->


                                    <!-- Grid Content -->
                                    <div class="gridContnt">
                                        <div class="cta">
                                            <a href="" class="butn"><span>Buy Now</span></a>
                                        </div>

                                        <div class="gridMeter">
                                            <span>Visible to</span>

                                            <div class="meterBox yellow">
                                                <div class="txt"> {{ $items->visible }} %</div>

                                                <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 200 200" data-value="75">
                                                    <path class="bg" stroke="#f4f4f4" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none"></path>
                                                    <path class="meter" stroke="#fecd33" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350" style="stroke-dashoffset: 87.3794;"></path>
                                                </svg>
                                            </div>
                                            <span>of buyers</span>
                                        </div>


                                        <div class="txtList">
                                            <ul>
                                                <?= $items->content ?? '' ?>
                                              
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Grid Content -->

                                </div>
                            </div>
                            <!-- Silver Package -->

                            @endforeach


                          <div class="hidden">
                          <!-- Gold Package -->
                            <div class="pckg-grid up" data-tab="gold">
                                <div class="insdPkage">


                                    <!-- head -->
                                    <div class="head">
                                        <h1>Gold</h1>

                                        <ul>
                                            <li><span>4.2</span> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <path fill="#F4C505" fill-rule="nonzero" d="M5.244.18L6.58 3.011c.046.096.092.144.185.144l2.997.48c.231.048.323.288.139.48L7.734 6.323a.374.374 0 0 0-.092.24l.507 3.119a.256.256 0 0 1-.369.288L5.06 8.482c-.092-.048-.184-.048-.23 0L2.106 9.97c-.092.096-.323-.048-.277-.288l.508-3.12c0-.095 0-.191-.092-.24L.078 4.116c-.139-.144-.092-.432.138-.48l2.998-.48c.092 0 .139-.048.185-.144L4.736.18c.139-.24.415-.24.508 0z">
                                                    </path>
                                                </svg></li>

                                            <li>
                                                <span>768</span> Purchased
                                            </li>
                                        </ul>

                                        <div class="offr">
                                            <label> 50% Off</label>
                                            <span>₹ 5598 </span>
                                        </div>

                                        <h3>₹ 2799</h3>

                                    </div>
                                    <!-- head -->


                                    <!-- Grid Content -->
                                    <div class="gridContnt">
                                        <div class="cta">
                                            <a href="" class="butn"><span>Buy Now</span></a>
                                        </div>

                                        <div class="gridMeter">
                                            <span>Visible to</span>

                                            <div class="meterBox">
                                                <div class="txt">90%</div>

                                                <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 200 200" data-value="90">
                                                    <path class="bg" stroke="#f4f4f4" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none"></path>
                                                    <path class="meter" stroke="#25bb1e" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350" style="stroke-dashoffset: 34.9518;"></path>
                                                </svg>
                                            </div>

                                            <span>of buyers</span>
                                        </div>


                                        <div class="txtList">
                                            <ul>
                                                <li>90 days Validity</li>
                                                <li>Number of Listings: 1</li>
                                                <li>Mobile no. of all responses</li>
                                                <li>Higher position in search for 8 days</li>
                                                <li>Professional Photoshoot of Property</li>
                                                <li>Verified tag on Property</li>
                                                <li>Online Site Visit Scheduler</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Grid Content -->

                                </div>
                            </div>
                            <!-- Gold Package -->



                            <!-- Diamond Package -->
                            <div class="pckg-grid up" data-tab="diamond">
                                <div class="insdPkage">


                                    <!-- head -->
                                    <div class="head">
                                        <h1>Diamond</h1>

                                        <ul>
                                            <li><span>4.4</span> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <path fill="#F4C505" fill-rule="nonzero" d="M5.244.18L6.58 3.011c.046.096.092.144.185.144l2.997.48c.231.048.323.288.139.48L7.734 6.323a.374.374 0 0 0-.092.24l.507 3.119a.256.256 0 0 1-.369.288L5.06 8.482c-.092-.048-.184-.048-.23 0L2.106 9.97c-.092.096-.323-.048-.277-.288l.508-3.12c0-.095 0-.191-.092-.24L.078 4.116c-.139-.144-.092-.432.138-.48l2.998-.48c.092 0 .139-.048.185-.144L4.736.18c.139-.24.415-.24.508 0z">
                                                    </path>
                                                </svg></li>

                                            <li>
                                                <span>1536</span> Purchased
                                            </li>
                                        </ul>

                                        <div class="offr">
                                            <label> 50% Off</label>
                                            <span>₹ 7400 </span>
                                        </div>

                                        <h3>₹ 3700</h3>

                                    </div>
                                    <!-- head -->


                                    <!-- Grid Content -->
                                    <div class="gridContnt">
                                        <div class="cta">
                                            <a href="" class="butn"><span>Buy Now</span></a>
                                        </div>

                                        <div class="gridMeter">
                                            <span>Visible to</span>

                                            <div class="meterBox">
                                                <div class="txt">92%</div>

                                                <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 200 200" data-value="92">
                                                    <path class="bg" stroke="#f4f4f4" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none"></path>
                                                    <path class="meter" stroke="#25bb1e" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350" style="stroke-dashoffset: 27.9614;"></path>
                                                </svg>
                                            </div>

                                            <span>of buyers</span>
                                        </div>


                                        <div class="txtList">
                                            <ul>
                                                <li>120 days Validity</li>
                                                <li>Number of Listings: 1</li>
                                                <li>Mobile no. of all responses</li>
                                                <li>Higher position in search for 10 days</li>
                                                <li>2 Open houses with Video tour<span style="color: #d8232a;">**</span>&nbsp;&nbsp;<span style="display: inline-block; background: #ffcc33; font-size: 10px; font-weight: 600; color: #303030; line-height: 16px; padding: 0 4px; border-radius: 2px;">New
                                                    </span></li>
                                                <li>Professional Photoshoot of Property</li>
                                                <li>Verified tag on Property</li>
                                                <li>Property Description by Experts</li>
                                                <li>500 Email Promotions</li>
                                                <li>Get ready list of buyers 100 CREDIT </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Grid Content -->

                                </div>
                            </div>
                            <!-- Diamond Package -->



                            <!-- Titanium Package -->
                            <div class="pckg-grid up" data-tab="titanium">
                                <div class="insdPkage">


                                    <!-- head -->
                                    <div class="head">
                                        <h1>Titanium</h1>

                                        <ul>
                                            <li><span>4.3</span> <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10">
                                                    <path fill="#F4C505" fill-rule="nonzero" d="M5.244.18L6.58 3.011c.046.096.092.144.185.144l2.997.48c.231.048.323.288.139.48L7.734 6.323a.374.374 0 0 0-.092.24l.507 3.119a.256.256 0 0 1-.369.288L5.06 8.482c-.092-.048-.184-.048-.23 0L2.106 9.97c-.092.096-.323-.048-.277-.288l.508-3.12c0-.095 0-.191-.092-.24L.078 4.116c-.139-.144-.092-.432.138-.48l2.998-.48c.092 0 .139-.048.185-.144L4.736.18c.139-.24.415-.24.508 0z">
                                                    </path>
                                                </svg></li>

                                            <li>
                                                <span>1229</span> Purchased
                                            </li>
                                        </ul>

                                        <div class="offr">
                                            <label> 50% Off</label>
                                            <span>₹ 9228</span>
                                        </div>

                                        <h3>₹ 4614</h3>

                                    </div>
                                    <!-- head -->


                                    <!-- Grid Content -->
                                    <div class="gridContnt">
                                        <div class="cta">
                                            <a href="" class="butn"><span>Buy Now</span></a>
                                        </div>

                                        <div class="gridMeter">
                                            <span>Visible to</span>

                                            <div class="meterBox">
                                                <div class="txt">97%</div>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="60" width="60" viewBox="0 0 200 200" data-value="97">
                                                    <path class="bg" stroke="#f4f4f4" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none"></path>
                                                    <path class="meter" stroke="#25bb1e" d="M41 149.5a77 77 0 1 1 117.93 0" fill="none" stroke-dasharray="350" stroke-dashoffset="350" style="stroke-dashoffset: 10.4855;"></path>
                                                </svg>
                                            </div>

                                            <span>of buyers</span>
                                        </div>


                                        <div class="txtList">
                                            <ul>
                                                <li>180 days Validity</li>
                                                <li>Number of Listings: 1</li>
                                                <li>Mobile no. of all responses</li>
                                                <li>Higher position in search for 50 days</li>
                                                <li>3 Open houses with Video tour<span style="color: #d8232a;">**</span>&nbsp;&nbsp;<span style="display: inline-block; background: #ffcc33; font-size: 10px; font-weight: 600; color: #303030; line-height: 16px; padding: 0 4px; border-radius: 2px;">New
                                                    </span></li>
                                                <li>Professional Photoshoot of Property</li>
                                                <li>Verified tag on Property</li>
                                                <li>Property Description by Experts</li>
                                                <li>Titanium Tag</li>
                                                <li>1000 Email Promotions</li>
                                                <li>Online Site Visit Scheduler</li>
                                            </ul>
                                        </div>

                                    </div>
                                    <!-- Grid Content -->

                                </div>
                            </div>
                            <!-- Titanium Package -->
                          </div>

                        </div>
                        <!-- Package container left -->

                    </div>
                </div>
            </div>
        </section>
        <br><br>

@endsection
