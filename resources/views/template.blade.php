@extends('enter.i')


@section('title','Choose Your Best Template')


@section('main')


<section id="template-c">
  <div class="contener box-t-c">
    <ul>
      <li id="all" class="all">all</li>
      <li id="personal" class="personal">personal</li>
      <li id="musicians" class="musicians">musicians</li>
      <li id="blogs" class="blogs">blogs</li>
      <li id="businesse" class="businesse">businesse</li>
      <li id="designer" class="designer">designer</li>
      <li id="hotel" class="hotel">hotel</li>
      <li id="photography" class="photography">photography</li>
      <li id="stores" class="stores">stores</li>
      <li id="portfolio" class="portfolio">portfolio</li>
    </ul>
  </div>
</section>
<section id="template-i">
  <div id="templatejs" class="contener box-t-i"></div>
</section>
<div class="clearfix"></div>


@stop


@section('script')
<script src="{{ URL::asset('js/template.js') }}"></script>
<script>
	$(document).ready(function(){
        addingC('.activeapply1','active');
        $('#all').addClass('active');
        $('#all').click(function(){
          $('#templatejs div').removeClass('hide');
          $(this).addClass('active').siblings().removeClass('active');
        })
        $('.box-t-c ul li:not(#all)').click(function(){
          $(this).addClass('active').siblings().removeClass('active');
          $('#templatejs div').addClass('hide');
        })
        var intemplate= $('#templatejs');
        var tstring = '';
        for(a in template){
          var obj = template[a];
          tstring += '<div class="t-i-'+obj.clss+'"><a href="'+obj.hrf+'"><img src="'+obj.imgsrc+'" alt="'+obj.alt+'"><h3>'+obj.title+'</h3></a></div>';
        }
        intemplate.html(tstring);
        $('.box-t-c ul li').click(function(){
          var liid = $(this).attr('id');
          for(b in category){
            var d = category[b];
            if(b==liid){
              for(var c=0; c<d.length; c++){
                $('.t-i-'+d[c]).removeClass('hide');
                console.log('.t-i-'+d[c])
              }
            }
          }
        })
      })
</script>

@stop