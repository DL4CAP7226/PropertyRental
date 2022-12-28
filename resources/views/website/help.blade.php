@extends('website/layout/master')
@section('title','help')
@section('body')

<style>
    .help-con__row {
    margin-bottom: 28px;
}
.help-con__box {
    float: left;
    min-height: 100px;
    width: 500px;
    padding-left: 60px;
    box-sizing: border-box;
}
.help-topic__title {
    font-weight: 600;
    font-size: 18px;
    padding-bottom: 8px;
    color: #000;
    position: relative;
}
.help-topic__title .sec-icon {
    position: absolute;
    height: 32px;
    width: 32px;
    text-align: center;
    left: -60px;
}
img {
    vertical-align: middle;
}
.help-topic__list {
    font-size: 14px;
    color: #666;
}
.help-topic__list .div__ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}
.help-topic__list .div__li {
    margin: 0;
    padding: 0 0 9px 0;
    list-style-type: none;
    position: relative;
}
.help-topic__list .div__li a {
    color: #303030;
    /* text-decoration: underline; */
}
.browse:after {
    content: "";
    position: absolute;
    left: 0;
    top: 6px;
    width: 2px;
    height: 20px;
    background: #d8232a;
}

div {
    display: block;
}

.browse {
    font-size: 24px;
    color: #606060;
    margin: 22px 0 25px 0;
    position: relative;
    padding-left: 10px;
}
</style>
<section>
<div class="container">

		  	<div class="browse">Explore Help Topics</div>
		  	<div class="help-con">
		    
		      
		      
			      
			      	<div class="help-con__row clearfix">
			      
			      
				      <div class="help-con__box">
				        <div class="help-topic">
				          <div class="help-topic__title">
				          	<span class="sec-icon">
					          	
					          		<img src="https://img.staticmb.com/mbphoto/faqcontent/1530532148966_user_profile.svg">
					          	
				          	</span>
				          	User Profile
				          </div>
				          <div class="help-topic__list">
				            <div class="div__ul" id="UL87">
				            	
				            		
					              		<div class="div__li" onclick="trackGA('User Profile', 'New Registration &amp; Login');urlLinkChange('/help/category-detail/New_Registration_Login','sameTab', 'topics');"><a href="javascript:void(0);">New Registration &amp; Login</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('User Profile', 'Account Deactivation/Re-activation');urlLinkChange('/help/category-detail/account-deactivation-reactivation','sameTab', 'topics');"><a href="javascript:void(0);">Account Deactivation/Re-activation</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('User Profile', 'My Profile');urlLinkChange('/help/category-detail/my-profile-owner','sameTab', 'topics');"><a href="javascript:void(0);">My Profile</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('User Profile', 'Password Settings');urlLinkChange('/help/category-detail/Reset_Password','sameTab', 'topics');"><a href="javascript:void(0);">Password Settings</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('User Profile', 'Update Email Address');urlLinkChange('/help/category-detail/update-email-id','sameTab', 'topics');"><a href="javascript:void(0);">Update Email Address</a></div>
					              	
					              	
					              	
				              	
				            		
					              	
					              	
					              		<div class="div__li notShown" onclick="trackGA('User Profile', 'Update Mobile Number');urlLinkChange('/help/category-detail/update-mobile-number','sameTab', 'topics');"><a href="javascript:void(0);">Update Mobile Number</a></div>
					              	
				              	
				            		
					              	
					              	
					              		<div class="div__li notShown" onclick="trackGA('User Profile', 'Manage Calls/ Alerts');urlLinkChange('/help/category-detail/manage-calls-alerts-owner','sameTab', 'topics');"><a href="javascript:void(0);">Manage Calls/ Alerts</a></div>
					              	
				              	
				              	
				              	
				              	<div class="help-topic__link">
				              		
					              		<a href="javascript:void(0)" class="discover-now" id="explore87" onclick="jqExploreNow('UL87','explore87');">
					              			Explore More 
					              		</a>
				              		
				              	</div>
						              		
				            </div>
				          </div>
				          
				        </div>
				      </div>
			      
			      
		      
		      
			      
			      
				      <div class="help-con__box">
				        <div class="help-topic">
				          <div class="help-topic__title">
				          	<span class="sec-icon">
					          	
					          		<img src="https://img.staticmb.com/mbphoto/faqcontent/1530532190652_property_management.svg">
					          	
				          	</span>
				          	Property Management
				          </div>
				          <div class="help-topic__list">
				            <div class="div__ul" id="UL97">
				            	
				            		
					              		<div class="div__li" onclick="trackGA('Property Management', 'Free Property Listing');urlLinkChange('/help/category-detail/free-listing','sameTab', 'topics');"><a href="javascript:void(0);">Free Property Listing</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Property Management', 'Posting Property');urlLinkChange('/help/category-detail/post-property','sameTab', 'topics');"><a href="javascript:void(0);">Posting Property</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Property Management', 'Edit/Update Property Details');urlLinkChange('/help/category-detail/how-to-edit-property-details-owner','sameTab', 'topics');"><a href="javascript:void(0);">Edit/Update Property Details</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Property Management', 'Locality Update');urlLinkChange('/help/category-detail/ADD_LOCALITY','sameTab', 'topics');"><a href="javascript:void(0);">Locality Update</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Property Management', 'Upload/Edit Photos');urlLinkChange('/help/category-detail/upload-edit-photos-all','sameTab', 'topics');"><a href="javascript:void(0);">Upload/Edit Photos</a></div>
					              	
					              	
					              	
				              	
				            		
					              	
					              	
					              		<div class="div__li notShown" onclick="trackGA('Property Management', 'Property Status');urlLinkChange('/help/category-detail/property-status','sameTab', 'topics');"><a href="javascript:void(0);">Property Status</a></div>
					              	
				              	
				            		
					              	
					              	
					              		<div class="div__li notShown" onclick="trackGA('Property Management', 'Magic Cash');urlLinkChange('/help/category-detail/magic-cash','sameTab', 'topics');"><a href="javascript:void(0);">Magic Cash</a></div>
					              	
				              	
				            		
					              	
					              	
					              		<div class="div__li notShown" onclick="trackGA('Property Management', 'Deactivate/Reactivate Property');urlLinkChange('/help/category-detail/deactivate-reactivate-my-property','sameTab', 'topics');"><a href="javascript:void(0);">Deactivate/Reactivate Property</a></div>
					              	
				              	
				              	
				              	
				              	<div class="help-topic__link">
				              		
					              		<a href="javascript:void(0)" class="discover-now" id="explore97" onclick="jqExploreNow('UL97','explore97');">
					              			Explore More 
					              		</a>
				              		
				              	</div>
						              		
				            </div>
				          </div>
				          
				        </div>
				      </div>
			      
			      
			      	</div>
			      
		      
		      
			      
			      	<div class="help-con__row clearfix">
			      
			      
				      <div class="help-con__box">
				        <div class="help-topic">
				          <div class="help-topic__title">
				          	<span class="sec-icon">
					          	
					          		<img src="https://img.staticmb.com/mbphoto/faqcontent/1530532268024_response_management.svg">
					          	
				          	</span>
				          	Response Management
				          </div>
				          <div class="help-topic__list">
				            <div class="div__ul" id="UL93">
				            	
				            		
					              		<div class="div__li" onclick="trackGA('Response Management', 'View Responses on Property Posted');urlLinkChange('/help/category-detail/view-responses','sameTab', 'topics');"><a href="javascript:void(0);">View Responses on Property Posted</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Response Management', 'Download Responses on Property Posted');urlLinkChange('/help/category-detail/download-responses-on-property','sameTab', 'topics');"><a href="javascript:void(0);">Download Responses on Property Posted</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Response Management', 'Protection from online frauds');urlLinkChange('/help/category-detail/protection-from-online-fraud','sameTab', 'topics');"><a href="javascript:void(0);">Protection from online frauds</a></div>
					              	
					              	
					              	
				              	
				              	
				              	
				              	<div class="help-topic__link">
				              		
				              	</div>
						              		
				            </div>
				          </div>
				          
				        </div>
				      </div>
			      
			      
		      
		      
			      
			      
				      <div class="help-con__box">
				        <div class="help-topic">
				          <div class="help-topic__title">
				          	<span class="sec-icon">
					          	
					          		<img src="https://img.staticmb.com/mbphoto/faqcontent/1530532299489_order_services.svg">
					          	
				          	</span>
				          	Orders &amp; Services
				          </div>
				          <div class="help-topic__list">
				            <div class="div__ul" id="UL108">
				            	
				            		
					              		<div class="div__li" onclick="trackGA('Orders &amp; Services', 'Planning to Buy Ad Packages');urlLinkChange('/help/category-detail/Buy_Ad_Packages','sameTab', 'topics');"><a href="javascript:void(0);">Planning to Buy Ad Packages</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Orders &amp; Services', 'Package Queries');urlLinkChange('/help/category-detail/Queries_on_Owner_Packages','sameTab', 'topics');"><a href="javascript:void(0);">Package Queries</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Orders &amp; Services', 'Package Activation');urlLinkChange('/help/category-detail/Package_Activation','sameTab', 'topics');"><a href="javascript:void(0);">Package Activation</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Orders &amp; Services', 'My Package Details');urlLinkChange('/help/category-detail/my-package-details-owner','sameTab', 'topics');"><a href="javascript:void(0);">My Package Details</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('Orders &amp; Services', 'Package Services');urlLinkChange('/help/category-detail/package-services','sameTab', 'topics');"><a href="javascript:void(0);">Package Services</a></div>
					              	
					              	
					              	
				              	
				              	
				              	
				              	<div class="help-topic__link">
				              		
				              	</div>
						              		
				            </div>
				          </div>
				          
				        </div>
				      </div>
			      
			      
			      	</div>
			      
		      
		      
<!-- 			      
			      	<div class="help-con__row clearfix">
			      
			      
				      <div class="help-con__box">
				        <div class="help-topic">
				          <div class="help-topic__title">
				          	<span class="sec-icon">
					          	
					          		<img src="https://img.staticmb.com/mbphoto/faqcontent/1530532332962_MB_features.svg">
					          	
				          	</span>
				          	MB Features
				          </div>
				          <div class="help-topic__list">
				            <div class="div__ul" id="UL102">
				            	
				            		
					              		<div class="div__li" onclick="trackGA('MB Features', 'What is Propworth?');urlLinkChange('/help/category-detail/Propworth','sameTab', 'topics');"><a href="javascript:void(0);">What is Propworth?</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('MB Features', 'All About Property Auctions');urlLinkChange('/help/category-detail/Property_Auctions','sameTab', 'topics');"><a href="javascript:void(0);">All About Property Auctions</a></div>
					              	
					              	
					              	
				              	
				            		
					              		<div class="div__li" onclick="trackGA('MB Features', 'Forum for All');urlLinkChange('/help/category-detail/Forum','sameTab', 'topics');"><a href="javascript:void(0);">Forum for All</a></div>
					              	
					              	
					              	
				              	
				              	
				              	
				              	<div class="help-topic__link">
				              		
				              	</div>
						              		
				            </div>
				          </div>
				          
				        </div>
				      </div> -->
			      
			      
		      
		    </div>
		    
		  </div>

          </div>
		  
          </section>

@endsection
