<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SKPWEBSITE - Contact</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="../favicon.png">
		<link rel="canonical" href="http://www.skpwebsite.com">
		<meta name="description" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{URL::asset('css/semantic.min.css')}}">
		<style>
		
			.right{
				float:right;
			}
			.mssgerrer{
				color: red;
			}
			.mssg{
				color: green;
			}
			
			.hiding{
				display: none;
			}
			.row{
				clear:both;
			}
		</style>
	</head>
	<body>
			<div class="ui secondary  menu">
			  <a class="item">
			   	SKPWEBSITE
			  </a>
			  <a class="item">
			    {{Auth::user()->name}}
			  </a>
			  <a class="active item" href="{{ route('home') }}">
			  	Home
			  </a>
			  <div class="right menu">
			    <div class="item">
			      <div class="ui icon input">
			        <input type="text" placeholder="Search...">
			        <i class="search link icon"></i>
			      </div>
			    </div>
			    <a class="ui item" href="{{ route('logout')}}">
			      Logout
			    </a>
			  </div>
			</div>

			{{-- post submit --}}
			<div class="ui text container">
	  			<p class="mssg hiding"></p>
	  			<p class="mssgerrer hiding"></p>
				<div class="ui form">
				  <div class="field">
				    <label>What's query about your website.</label>
				    <textarea id="body"></textarea>
				  </div>
				  <button id="actionpost" class="ui green button">
				   	Post
				  </button>
				</div>
			</div>

			{{-- posts --}}

			<div class="ui text container">
				@foreach($posts as $post)
				<div class="row"></div>
					<br>
				<div style="border-top: 1px solid #f4f4f4; padding-top: 5px;">
					<h3 class="ui header">
						{{ $post->signup->name }} 
						<span style="float:right;color:#000;font-size:14px;font-weight:normal;"> On 
							{{date('M j, Y - g:sA ',strtotime($post->created_at))}}
						</span>
					</h3>
					<p style="word-wrap: break-word;">{{ $post->body }}</p>
					@if(Auth::user()->id==$post->user_id)
					<button class="ui negative button right" dataid="{{ $post->id }}" value="Delete">
					  Delete
					</button>
					<button class="ui primary button right" dataid="{{ $post->id }}" value="Edite">
					  Edite
					</button>
					@endif
				</div>
				@endforeach
			</div>

			  <div class="ui loader"></div>
					{{-- model --}}
				<div class="ui modal">
				  <i class="close icon"></i>
				  <div class="header">
				    Edite Your Post
				  </div>
				  <div class="text container">
				  	<div class="ui form">
  					  <div class="field">
  					    <textarea id="bodymodel"></textarea>
  					  </div>
  					</div>
				  </div>
				  <div class="actions">
				    <div class="ui black deny button">
				      Cencel
				    </div>
				    <div id="editeprompt" class="ui positive right button">
				      Done
				    </div>
				  </div>
				</div>


		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/semantic.min.js') }}"></script>
		<script>
			$.ajaxSetup({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    }
			});

			var Mssg = {
				post: 'Succesfull Posting',
				postN: 'Fail Posting',
				delete: 'Succesfull Delete',
				deleteN: 'Failed Deleting Post please Try agen',
				edite: 'Succesfull Edite',
				editeN: 'Error Editing Please Try agen.',
				deleteConfirm: 'Do You Want To Delete this post...?'
			}

			var Post = {
				loadingActive: function(){
					$('.loader').addClass('active');
				},
				loadingDeactive: function () {
					$('.loader').removeClass('active');
				},
				mssg: function(m) {
					$('.mssgerrer').hide();
			    	$('.mssg').show().text(m);
				},
				mssgError: function () {
					$('.mssg').hide()
					$('.mssgerrer').show().text(data);
				}
			};

			Post.Error = function (qXHR, exception) {
				var msg = '';
				if (jqXHR.status === 0) {msg = 'Not connect.\n Verify Network.';} 
				else if (jqXHR.status == 404) {msg = 'Requested page not found. [404]';} 
				else if (jqXHR.status == 500) { msg = 'Internal Server Error [500].';} 
				else if (exception === 'parsererror') { msg = 'Requested JSON parse failed.';} 
				else if (exception === 'timeout') {msg = 'Time out error.';}
				else if (exception === 'abort') {msg = 'Ajax request aborted.';} 
				else { msg = 'Uncaught Error.';}
				this.mssgError(msg);
			};
			$('#actionpost').click(function(e) {
			    Post.loadingActive();
			    e.preventDefault();
			    $.ajax({
			        type: 'post',
			        url: 'dashboard/post',
			        data: {
			            body: $('#body').val()
			        },
			        success: function(data) {
			            if(data == "T"){
			            	Post.mssg(Mssg.post);
			            	$('#body').val('');
			            }
			            if(data == "F"){
			            	Post.mssgError(Mssg.postN);
			            }
			            if($.isArray(data)){
			            	Post.mssgError(data);
			            }
			            Post.loadingDeactive();
			        },
			        error: function(jqXHR, exception){
			        	Post.Error(jqXHR, exception);
			        }
			    })
			    Post.loadingDeactive();
			});


			$('[value="Delete"]').click(function(e) {
			    e.preventDefault();
			    var $this = $(this);
			    if(confirm('Do You Want To Delete this post...?')){
			    	Post.loadingActive();
    			    $.ajax({
    			        type: 'post',
    			        url: 'post-delete/' + $this.attr('dataid'),
    			        data: {'_token': '{{ csrf_token() }}'},
    			        success: function(data) {
    			            if(data =="T"){
    			            	Post.mssg(Mssg.delete);
    			            	$this.parent().css('display', 'none');
    			            }
    			            if(data =='F'){
    			            	Post.mssgError(Mssg.deleteN);
    			            }
    			            Post.loadingDeactive();
    			        },
    			        error: function(jqXHR, exception){
    			        	Post.Error(jqXHR, exception);
    			        }
    			    })
    			    Post.loadingDeactive();
    			}
			});
			$('[value="Edite"]').click(function(e) {
			    e.preventDefault();
			    var $this = $(this);
			    $('.ui.modal').modal('show');
			    $('textarea#bodymodel').val($this.siblings('p').text());
		    	$('#editeprompt').click(function(){
		    		Post.loadingActive();
		    		$.ajax({
		    		    type: 'post',
		    		    url: 'post-edite/' + $this.attr('dataid'),
		    		    data: {
		    		    	'_token': '{{ csrf_token() }}',
		    		    	edite:$('#bodymodel').val()
		    		    },
		    		    success: function(data) {
		    		        if($.isArray(data)){
		    		        	Post.mssg(data);
		    		        }else{
		    		        	if(data !=="F"){
			    		        	Post.mssg(Mssg.edite);
			    		        	$this.parent().children('p').text(data);
			    		        }else{
			    		        	Post.mssgError(Mssg.editeN);
			    		        }
		    		        }
		    		        Post.loadingDeactive();
		    		    },
		    		    error: function(jqXHR, exception){
		    		    	Post.Error(jqXHR, exception);
		    		    }
		    		})
		    		Post.loadingDeactive();
		    	});
			})

		</script>
	</body>
</html>