@extends('website/layout/master')
@section('title','faq')
@section('body')

<style>
    .top-banner-container {
    background: linear-gradient(to bottom, #5C5C5F 0%, #152333 100%);
    height: 90px;
}
.l-width__full-1198 {
    width: 100% !important;
    margin: 0 auto;
}
.home-search {
    position: relative;
    padding: 0 10px;
}
.change-user-type {
    z-index: 99;
}

.change-user-type {
    position: absolute;
    top: 21px;
    right: 0;
    font-size: 14px;
    color: #e3e3e3;
    padding-right: 42px;
}
.coach-mark {
    position: absolute;
    width: 216px;
    height: 216px;
    top: -40px;
    right: -25px;
    background: rgba(0,0,0,.5);
    border-radius: 50%;
    z-index: 999;
    box-shadow: 0 0 0 rgb(0 0 0);
    animation: pulse 2s infinite;
    box-sizing: border-box;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    padding: 106px 20px 0 20px;
    text-align: center;
    line-height: 22px;
}
.home-search__title {
    color: #fff;
    font-size: 21px;
 text-align: center;
    padding: 20px 0 14px 0;
    font-weight: 400;
}
.home-search__title span {
    font-weight: 600;
}
.home-search__form {
    width: 710px;
    margin: 0;
}
.home-search__input {
    float: none;
    width: 591px;
    height: 45px;
    background: #fff;
    border-radius: 3px;
    box-sizing: border-box;
    padding: 1px;
    text-align: left;
    position: relative;
    margin: 0;
}
.input__home-search {
    font-size: 14px;
    box-sizing: border-box;
    height: 43px;
    width: calc(100% - 100px);
    padding-left: 16px;
    border: 0;
    outline: none;
    color: #999;
}
.home-search___submit {
    border: 0;
    cursor: pointer;
}
.home-search___submit {
    width: 91px;
    height: 41px;
    line-height: 41px;
    color: #fff;
    border-radius: 3px;
    position: absolute;
    top: 2px;
    right: 2px;
}
#searchContentDiv .ui-widget.ui-widget-content {
    border: 1px solid #f4f4f4;
    left: 0 !important;
    width: 515px !important;
    box-sizing: border-box;
    box-shadow: 1px 3px 8px -1px rgb(0 0 0 / 20%);
    min-height: 60px;
    padding-top: 10px;
}
button, html input[type="button"], input[type="reset"], input[type="submit"] {
    -webkit-appearance: button;
    cursor: pointer;
}
    .l-container {
    width: 100%;
    margin: 0 auto;
}
section, summary {
    display: block;
}
.l-container-left {
    width: 750px;
    float: left;
}

.l-container-right-new {
    width: 385px;
    float: right;
    border-radius: 3px;
    margin-bottom: 20px;
    padding: 20px 0 0 0;
    box-sizing: border-box;
}
.clearfix {
    display: block;
}
.most-questions {
    padding-bottom: 0px;
}
.l-container-right-new .most-questions__title {
    color: #303030;
    font-size: 18px;
    font-weight: 600;
    position: relative;
    padding-left: 10px;
    margin-top: 4px;
    padding-bottom: 10px;
}
.help-topic__question .help-topic__question-row {
    margin: 0 0 15px 0;
    padding: 0;
    border: 1px solid #dbdbdb;
    border-radius: 4px;
    height: 60px;
    box-sizing: border-box;
    background: #f5f5f5;
}
.help-topic__question .help-topic__question-row a {
    display: block;
    color: #606060;
    font-size: 12px;
    padding: 8px 25px 0 10px;
    box-sizing: border-box;
    height: 60px;
    position: relative;
}
.faq-ques {
    font-size: 14px;
    color: #333;
    font-weight: 600;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    padding-bottom: 1px;
}
.faq-ans {
    font-size: 12px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
html, body {
    width: 100%;
    height: 100%;
    margin: 0 m;
    margin: 0;
    padding: 0;
}
@media only screen and (max-width: 480px) {
html, body {
    width: 100%;
    height: 100%;

    margin: 0;
    padding: 0;
}
}
</style>


<section class="top-banner-container" >
  <div class=" top-banner"="">
  <div class="">
    <div class="home-search">
	      <div class="change-user-type">
	      		 
	      		<a href="#" id="changeUserPersonaAnchor" class="btn__change-user" onclick="jqModalOpen('change-user-popup')"></a>
	      </div>
	      <div class="coach-mark" style="display:none;">
	      		Change your user type to get relevent answers.
       	  </div>
	      <div class="home-search__title ">
	      	
	      	
	      		 
		      			<span>Have Questions?</span> We've All the Answers
      	
	      	
	      </div>
      
</section>

<br>
<section class="container">
		 
			  <div class="clearfix">
				  <div class="most-questions" id="mostAskedContent" style="">
				    <div class="most-questions__title"><h3>Frequently Asked Questions</h3></div><br>
				    <div class="help-topic__question">
				   	 <div id="mostAskedContentDiv"><div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('How do I Deactivate my account?');urlLinkChange('/help/category-content-detail/how-do-i-deactivate-my-account-owner-web-en','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">How do I Deactivate my account?</div>
                     
                     <div class="faq-ans">To de-activate your account, follow these steps: Step 1: Login into your Magicbricks account with your username &amp; password. Step 2: On the top banner, click on 'My Activity / My Dashboard' and select 'Manage Profile'. Step 3:&nbsp;Proceed to 'Profile Details' section. Here, click on 'Deactivate account'. Step 4: You will get a Verification Code on your registered mobile no. &amp; email id. Step 5: Enter the 3 digit verification code sent and click 'Confirm'. Your account will be de-activated. Note: Your property &amp; services will no longer be active, once your account gets de-activated.</div>
                    
                    </a></div>
                     
                    <div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('How can I know the status or validity of my package? ');urlLinkChange('/help/category-content-detail/how-can-i-know-the-status-or-validity-of-my-package','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">How can I know the status or validity of my package? </div>
                     
                     <div class="faq-ans">To check status of your package, follow below steps: Login to your account Once you login, you will be landing on 'My Orders' view&nbsp; Here you will be able to see status of all upcoming &amp; past orders Click here to check the status/validity of your package</div>
                    
                    </a></div>
                     
                    <div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('When will my Property become visible on the site?');urlLinkChange('/help/category-content-detail/when-will-my-property-become-visible-on-the-site','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">When will my Property become visible on the site?</div>
                     
                     <div class="faq-ans">It takes maximum 24hours for a property to get screened and become visible on search.</div>
                    
                    </a></div>
                     
                    <div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('What all can I do with the Magicbricks package I have purchased?');urlLinkChange('/help/category-content-detail/what-all-can-i-do-with-the-package-i-have-purchased','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">What all can I do with the Magicbricks package I have purchased?</div>
                     
                     <div class="faq-ans">Once free listing is consumed, an Owner will be able to post property for Sale/Rent, Residential/Commercial after buying a paid package. This pack will also help you to: 1. Get better visibility among other properties posted on website 2. Get better responses for your property Verified tag Professional photoshoot Description by experts 3. Avail services&nbsp;offered in your package Ad in Times of India Vastu services Property valuation 4. Check status of services in your package 5. Priority query resolution by our support team</div>
                    
                    </a></div>
                     
                    <div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('How to Renew or Refresh my Property?');urlLinkChange('/help/category-content-detail/how-can-i-renew-or-refresh-property','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">How to Renew or Refresh my Property?</div>
                     
                     <div class="faq-ans">To refresh your property, you need to buy a suitable Ad Package. Once you have bought the required package, follow these steps: Step 1: Login to your Magicbricks account. You will land on 'My Orders' page. Step 2:&nbsp;You will see list of all active packages you have bought. Click on 'Refresh Existing Property' button available against the package you wish to use. Step 3: A pop-up will appear showing list of all properties that can be refreshed against the selected package.&nbsp;&nbsp; Note: You might not see all properties listed by you in this pop-up. Packages are categorised basis Listing Type - Sale/Rent, Property Type - PG/Residential/Commercial, Price. You will be able to refresh a property only when the package supports the property type, price, listing type. &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; Step 4: Click 'Refresh'&nbsp;button for the listing you wish to refresh.&nbsp;Your property listing will be refreshed. Note: Properties that are rejected, deleted, under screening or created same day can't be refreshed. 1 listing is deducted every time you refresh your property.</div>
                    
                    </a></div>
                     
                    <div class="help-topic__question-row" onclick="trackMostAskedQuestionGA('Why my package is still not activated?');urlLinkChange('/help/category-content-detail/why-my-package-is-still-not-activated','sameTab','most_asked_quetions')"><a href="#"><div class="faq-ques">Why my package is still not activated?</div>
                     
                     <div class="faq-ans">The reason that your package is still not activated could be because there was some error in the network or delay from the bank’s end. In case your amount was deducted, while your package still shows ‘Not Activated’, kindly share the screenshot of your transaction &amp; Order ID/Card ID to&nbsp;support@magicbricks.com. Please note that it usually takes 3-5 business days for the package to get activated.</div>
                    
                    </a></div>
                    
                </div>
                     
                    <br>
				    </div>
			      </div>
				  
				  
			  </div>
		  
		  <div class="clearfix"></div>
		</section>
        

@endsection
