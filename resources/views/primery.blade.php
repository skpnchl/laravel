@extends('enter.i')


@section('title','Create Your Website Just Call Now')


@section('main')

<section id="s1">
	<div class="contener s1-c">
		<div class="s1-item1">
			<p>Build your website without any knowledge.</p>
			<div class="s1-item1-1">
				<h1>No drag and drop</h1>
			</div>
			<div class="s1-item1-2">
				<p>Choose your template and give your website information.</p>
			</div>
		</div><a href="{{ route('contact') }}">
		<div class="s1-item2">
			<p>ask me</p>
		</div></a>
	</div>
</section>
<section id="s2">
	<div class="contener s2-c">
		<div class="s2-item1">
			<div><img src="img/skp-responsive.png" alt="skpwebsite responsive"/></div>
		</div>
		<div class="s2-item2">
			<div>
				<h1>full responsive<br/>&amp;<br/>latest modern.</h1>
				<p>All Mobile Tablet &amp; PC compatible Fasts speedily loading in using tools latest functionality modern appearance you love it.</p>
			</div>
		</div>
	</div>
</section>
<section id="s2">
	<div class="contener s2-c">
		<div class="s2-item2">
			<div>
				<h1>s.e.o</h1>
				<h3>Google Friendly</h3>
				<p>More people on your site.<br/>Search engine optimization your website will be top rank on google.</p>
			</div>
		</div>
		<div class="s2-item1">
			<div><img src="img/skp-ceo.png" alt="skpwebsite responsive"/></div>
		</div>
	</div>
</section>
<section id="s4">
	<div class="contener s4-c">
		<div class="s4-item1">
			<div>
				<h1><span class="tfms">24x7</span>FULL SERVICE</h1>
				<h2>+919549002930<br/>skpnchl@gmail.com</h2>
			</div>
		</div>
		<div class="s4-item2">
		<p class="mssg animated bounceIn" style="color: green; display: none;"></p>
		<p class="mssgerrer" style="color: red; display: none;"></p>
			<div>
				<form action="#" id="home-contact" autocomplete="off">
					<input type="text" name="fullname-hm" required="" class="fullname inco"/>
					<label for="fullname" class="fullname-l laco"><span>FULL NAME</span></label>
					<input type="email" name="email-hm" required="" class="email inco"/>
					<label for="email" class="email-l laco"><span>EMAIL</span></label>
					<input type="text" name="number-hm" required="" class="number inco"/>
					<label for="number" class="number-l laco"><span>MOBILE NO.</span></label><br/><br/>
					<input type="submit" name="submit" value="SEND" class="submit s1-item2"/>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
				</form>
			</div>
		</div>
	</div>
</section>
<div class="loading" style="display: none;"><div></div></div>

@stop



@section('script')

<script>
		/* this animation Man home page*/
		$(window).on('scroll resize',function (){
			fullappere('.s2-item2:eq(0)',18,55);
			fullappere('.s2-item1:eq(1)',25,55);
			fullappere('.s4-item1:eq(0)',35,55);
		});
		$('#home-contact').submit(function (e) {
	    	e.preventDefault();
	    	$('.loading').show();
	    	var name = $('.fullname').val(),
				email= $('.email').val(),
				number = $('.number').val();
			$.ajax({
				type: 'get',
				url: 'homecontactajax',
				data: {name: name,email: email,number: number},
				success: function(data){
					$('.mssgerrer').hide();
					$('.mssg').show();
					$('.mssg').html(' Hello <b style="font-size:18px">'+data+ '</b> your contact succesfully sent.')
	    			$('.fullname').val('');
					$('.email').val('');
					$('.number').val('');
					$('.loading').hide();
				},
				error: function (jqXHR, exception) {
					$('.mssg').hide();
					$('.mssgerrer').show();
			        var msg = 'Errer';
			        if (jqXHR.status === 0) {
			            msg = 'Not connect.\n Verify Network.';
			        } else if (jqXHR.status == 404) {
			            msg = 'Requested page not found. [404]';
			        } else if (jqXHR.status == 500) {
			            msg = 'Internal Server Error [500].';
			        } else if (exception === 'parsererror') {
			            msg = 'Requested JSON parse failed.';
			        } else if (exception === 'timeout') {
			            msg = 'Time out error.';
			        } else if (exception === 'abort') {
			            msg = 'Ajax request aborted.';
			        } else {
			            msg = 'Uncaught Error.\n' + jqXHR.responseText;
			        }
			        $('.mssgerrer').html(msg);
			        $('.loading').hide();
			    }
			});
	    })
</script>

@stop