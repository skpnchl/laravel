@extends('enter.i')


@section('title', 'About')


@section('main')

<div id="m-about">
	<div>
		<div class="contener">
			<h1>it's not our work life, it's our life's work.</h1>
			<h3>you can trust us.</h3>
		</div>
	</div>
	<div>
		<div class="contener">
			<h3>how we work.</h3>
			<p>small teams with big ideas.</p>
			<p>client as a partner help truly.</p>
		</div>
	</div>
	<div>
		<div class="contener">
			<h3>who we are.</h3>
			<p>designers, developer and thinkers.</p>
			<p>we give full time on your project.</p>
		</div>
	</div>
	<div>
		<div class="contener">
			<h1>c.e.o</h1>
			<p>sk panchal  <a href="https://plus.google.com/skp" target="_blank" class="link-p">(profile) </a><br/><a href="../resum.docx" class="link-p">resum</a></p>
			<p>you want to proof call me now I will give you.</p>
		</div>
	</div>
</div>

@stop

@section('script')

<script>
	$(document).ready(function(){
		addingC('.activeapply4','active');
	})
</script>

@stop