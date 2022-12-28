@extends('website/layout/master')
@section('title','premium ads')
@section('body')

<style>
.col-md-9 {
    width: 85%;
}


.static-right-content-box {
    padding: 25px;
}


.static-right-content-box .content-title {
    padding-bottom: 10px;
    margin-bottom: 25px;
    font-size: 26px;
}


.static-right-content-box .section-title {
    padding: 12px 20px;
    font-size: 16px;
    margin: 20px 0;
}

.static-right-content-box .section-title span {
    float: left;
    display: block;
}

.static-right-content-box .section-title strong {
    margin-left: 25px;
    display: block;
}
.static-right-content-box .section-title {
    background-color: #f8f8f8;
    padding: 10px 15px;
    font-weight: bold;
    margin: 15px 0;
}
</style>
<section>
<div class="container">
<div class="col-xs-12 col-sm-12 col-md-9">
                <div class="content-box static-right-content-box">
                    <h4 class="content-title text-center">Premium Ads</h4>
                    <div class="section-title" id="use-premium-ads">
                        <span>1.</span><strong> Who can use Nestray Premium Paid Ads?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Any individual or business who meets Nestray’s Listing policy and Terms of Use can opt for Nestray’s Premium Listings.</p>
                    </section>
                    
                    <div class="section-title" id="why-premium-ads">
                        <span>2.</span><strong> Why should you use Nestray Premium Ads?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Premium ads help you make your ad more visible, reach out to more consumers and sell your product or service faster.</p>
                    </section>
                    <div class="section-title" id="how-premium-ads">
                        <span>3.</span><strong> How can one select their product or service to be a Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>To opt for a Premium ad, you need to first start posting your ad on Nestray. As part of the Post ad flow, you will have an option to either post your ad as a free ad or a Premium paid ad. At this stage, you can select for a Premium ad option.</p>
                    </section>
                    <div class="section-title" id="type-premium-ads">
                        <span>4.</span><strong> How many types of Premium Ads are there and what does a Premium Ad look like?</strong>
                    </div>
                    
                     <div class="section-title" id="recognise-premium-ads">
                        <span>5.</span><strong> How can I recognise a Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>All Premium Ads are easily recognizable.<br><span>Top of the page ad:</span> As the name says, they appear right at the Top of each category’s ad results. They are further highlighted in blue for increased visibility.<br> <span>Urgent + Top of the page ad:</span> They are indicated by a green star before the title and have all the other advantages of a Top of the page ad<br>
You will see these symbols on the browse page, View ad page and in your My Nestray section.
</p>
                    </section>
                    <div class="section-title" id="how-pay-ads">
                        <span>6.</span><strong> How do I pay for Premium Ads on Nestray?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Currently, we offer 3 modes of payment options for Premium ads:</p>
                        <ul>
                            <li><span>Credit/Debit/Cash Card payment.</span></li>
                            <li><span>Cheque payment.</span></li>
                            <li><span>Payment through Nestray’s Ad Credits.</span></li>
                        </ul>
                        <p>You can choose either of these options to pay for your Premium ad. More details about these are part of the Post Ad process on Nestray.</p>
                    </section>
                    <div class="section-title" id="ads-duration">
                        <span>7.</span><strong> How long does my Ad remain as a Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>All ads on Nestray stay on site for 90 days as long as they meet the Listing Policy and Terms Of Use of the website. All Premium ads currently whether Top Of Page or Urgent stay as a Premium ad on the website for 30 days. And after the first 30 days they continue to be active on the site for another -30 days as a normal ad. ( Not in a premium position )</p>
                    </section>
                     <div class="section-title" id="active-premium-ads">
                        <span>8.</span><strong> Do Premium Ads immediately get active once I have paid for it?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>All Premium ads go live to site after 24 Hours of the ad being posted. However, in case you opt for a payment option by cheque, your Premium ad will get active on the website only after the cheque is encashed by Nestray.</p>
                    </section>
                    <div class="section-title" id="monitor-premium-ads">
                        <span>9.</span><strong> Can I see or monitor my Premium Ads in My Nestray?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Yes you can check your Premium ads as well as edit them when required from My Nestray.</p>
                    </section>
                    <div class="section-title" id="higher-fee-ads">
                        <span>10.</span><strong> Can I post an Ad with a higher fee in a category with a lower fee?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>No you cannot. That would be misleading and would not be very helpful as the ability for relevant consumers to see your ad in the right category would be lost. Thereby losing all the benefits of the Premium ad position. You may also be penalised by Nestray for doing so.</p>
                    </section>
                    <div class="section-title" id="edit-premium-ads">
                        <span>11.</span><strong> Can I edit my Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Yes, in the first 5 days after your Premium ad goes live on Nestray, you can edit your Premium ad through the Paid ads section in My Nestray.</p>
                    </section>
                    <div class="section-title" id="continue-free-ads">
                        <span>12.</span><strong> Can I continue to post free Ads on Nestray?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Yes, you can continue to post free ads on Nestray.</p>
                    </section>
                    <div class="section-title" id="renew-premium-ads">
                        <span>13.</span><strong> Can I renew my Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Yes, you can renew your Premium ad after 30 days.</p>
                    </section>
                    <div class="section-title" id="refund-premium-ads">
                        <span>14.</span><strong> Can I get a refund for my Premium Ad?</strong>
                    </div>
                    <section class="static-content-section">
                        <p>Listing Fees for your Premium ad are NOT refundable, except in the instance of deletion of the ad by Nestray at the time of review (within 24 hours of it being posted) due to violation of Listing Policy/ Terms of Use or miscategorization of the ad. See Premium ads fees.</p>
                        <br>
                        <p>Hope the above information has been helpful in better understanding how Nestray’s Premium ads work. If you have any other question or need any help, please write to us and we will get back you soon.</p>
                    </section>
               </div>
            </div>

            </div>

            </section>
@endsection
