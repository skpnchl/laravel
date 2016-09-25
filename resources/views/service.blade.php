@extends('enter.i')


@section('title', 'Service')


@section('main')

<section class="service s-seo">
	<div class="contener">
		<h2>search engines optimization</h2>
		<p>optimize your site.</p>
	</div>
</section>
<section class="service s-sg">
	<div class="contener">
		<h2>your site submit on google</h2>
		<p>submit on google webmaster create site map, humans.txt ,roboto.txt</p>
	</div>
</section>
<section class="service s-snl">
	<div class="contener">
		<h2>ssl sertificate &amp; site securety</h2>
		<p>more secure your site Like http to https</p>
		<h2>social network linking</h2>
		<p>link your site with facebook twitter instagram youtube linkedin etc.</p>
	</div>
</section>
<section class="service s-promoting">
	<div class="contener">
		<h2>promoting</h2>
		<p>advertising website on google facebook.</p>
	</div>
</section>
<section class="service s-logo">
	<div class="contener">
		<h2>logo's design</h2>
		<h2>&amp; borchure design</h2>
		<p>your site icon</p>
	</div>
</section>
<section class="service s-ga">
	<div class="contener">
		<h2>google analytic</h2>
		<h2>&amp; google map</h2>
		<p>track visitor with google analytic and much more</p>
	</div>
</section>
<section class="service s-gtm">
	<div class="contener">
		<h2>content writing </h2>
		<h2>google tag manager</h2>
		<p>manage website content directly</p>
	</div>
</section>
<section class="service s-redesign">
	<div class="contener">
		<h2>design &amp; redesign</h2>
		<h2>responsive web design &amp; cross browser capability</h2>
		<p>old design to new design</p>
	</div>
</section>
<section class="service s-cms">
	<div class="contener">
		<h2>cms based site </h2>
		<h2>cms web development &amp; content writing, web programing</h2>
		<p>easily maintain with content manager system wordpress, joomla, duple</p>
	</div>
</section>
<section class="service s-update">
	<div class="contener">
		<h2>update your site</h2>
		<p>if your website is online store manage completely with our team</p>
	</div>
</section>

@stop

@section('script')


<script>
$(document).ready(function(){
        addingC('.activeapply2',"active"),$('a[href="#s4"]').attr("href","/contect/");var e=Math.floor(Math.random()*$(".service").length+1),o={1:"bounce",2:"bounceIn",3:"flash",4:"bounceInDown",5:"rubberBand",6:"bounceInRight",7:"bounceInLeft",8:"shake",9:"rotateInDownLeft",10:"rotateINDownRight"},n=$(".service"),t=$(window).height();$(document).height();$(window).scroll(function(){wintop=$(window).scrollTop(),n.each(function(){return $elm=$(this),!!$elm.hasClass("animate")||(topcoords=$elm.offset().top,void(wintop>topcoords-.75*t&&$elm.addClass("animated "+o[e])))})})});
</script>

@stop