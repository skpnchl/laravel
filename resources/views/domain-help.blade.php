@extends('enter.i')


@section('title', 'Choose Your Best Domain Name')


@section('main')

<div class="domain-help contener">
<h1>Simple Tip's to Choose Perfect Domain Name</h1>
	<ul>
		<li>For best domain letter shoud be under 12 character's.</li>
		<li>Word simple and short.</li>
		<li>Do not use hyphen and numeric letter.</li>
		<li>Easy to memories word's</li>
	</ul>
	<h3>NEW FUTURE COMING SOON...!</h3>
</div>

@stop

@section('script')


<script>
	$(document).ready(function(){
		addingC('a[href="/domain-help/"]','active');

	})
</script>

@stop