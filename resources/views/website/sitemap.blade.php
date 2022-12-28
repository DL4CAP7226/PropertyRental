@extends('website/layout/master')
@section('title','sitemap')
@section('body')

<style>
    .sitemapCont {
    padding: 10px 0px;
    margin: 0px;
}
.sitemapCont .staticHeading {
    padding-bottom: 5px;
    padding: 5px 20px;
}
.staticHeading {
    padding: 0px 0px 10px 12px;
    margin: 0px;
    font-size: 18px;
    /* color: #666666; */
    font-weight: normal;
}
.section {
    padding: 15px 20px 10px;
    overflow: hidden;
    width: 100%;
    box-sizing: border-box;
    border-bottom: 1px dotted #dddddd;
}
.sitemapCont .header {
    font-size: 14px;
    padding-bottom: 5px;
    font-weight: bold;
}

ul.linkBox {
    margin-left: 15px;
}
ol, ul {
    list-style: none;
}
.links {
    float: left;
    width: 49.5%;
    padding: 4px 0px;
    list-style-type: disc;
    color: #666666;
}
.links a, div.more a {
    text-decoration: underline;
    font-size: 14px;
    color: #007FFF;
    text-decoration: none;
}
</style>

<section class="searchFormCont sitemapCont">
		<div class="staticHeading text-center"><h3>Sitemap</h3></div>
		<div class="section">
			<h3 class="">Search Options:</h3>
			<ul class="linkBox">
				<li class="links"><a href="#">Property Search</a></li>
				<li class="links"><a href="#">Project Search</a></li>
				<li class="links"><a href="#">Agent Search</a></li>
				<li class="links"><a href="#">Trend Search</a></li>
<!-- 				<li class="links"><a href="">Post Property</a></li> -->
	<li class="links"><a href="">Post Property</a></li> 

				<li class="links"><a href="">Post Requirement</a></li>
			</ul>
		</div>
		<div class="section">
			<h3 class="">Agents by Cities:</h3>
			<ul class="linkBox">
				<li class="links"><a href="#">New Delhi</a></li>
				<li class="links"><a href="#">Mumbai</a></li>
				<li class="links"><a href="#">Bangalore</a></li>
				<li class="links"><a href="#">Chennai</a></li>
			</ul>
			<div class="more" style="display:none">
				<a class="more" href="#">More</a>
			</div>
		</div>
		<div class="section" style="display:none">
			<h3 class="header">News &amp; Messages:</h3>
			<ul class="linkBox">
				<li class="links"><a href="#">Property News</a></li>
				<li class="links"><a href="#">Messages</a></li>
			</ul>
		</div>
	</section>
<br><br>
@endsection
