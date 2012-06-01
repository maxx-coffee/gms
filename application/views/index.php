<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8" />
  
  <title>GMS</title>
  
  <meta name="description" content="" />
  <meta name="keywords" value="" />
 <meta name="viewport" content="width=device-width,
                                maximum-scale=1.0" />
<link rel="apple-touch-icon" href="/gms//apple-touch-icon-72x72.png"/>
  <link rel="stylesheet" href="/gms/css/styles.css" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="http://cubiq.org/dropbox/iscroll4/src/iscroll.js" type="text/javascript"></script>
  <script type="text/javascript">
  var myScroll;
  
  function loaded() {
  	myScroll = new iScroll('wrapper', {
  		snap: true,
  		momentum: false,
  		hScrollbar: false,
  				onBeforeScrollStart: function (e) {
  					var target = e.target;
  					while (target.nodeType != 1) target = target.parentNode;
  		
  					if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
  						e.preventDefault();
  				}
  	 });
  }
  
  document.addEventListener('DOMContentLoaded', loaded, false);
  </script>
    <script>
  
  	$(function(){
  		$(".rounded .rounded h3").each(function(){
  			var height = $(this).height();
  			var parent_height = $(".rounded .rounded").height()/1.6;
  			$(this).css("top",parent_height - height);
  		});
  		$(".small .rounded h3,.med .rounded h3").each(function(){
  			var height = $(this).height() ;
  			var parent_height = $(".rounded .rounded").height()/2;
  			$(this).css("top",parent_height - height);
  		});
  		var small_height = $(".totals .first").height();
  		$(".height").each(function(){
  			$(this).css("height", small_height);
  		});
  		var count = $("section").size();
  		var wrap_width = count * 1024+300;
  		$("#scroller").css("width", wrap_width);
  		
  		 
  	});
  	function deletechecked()
  	{
  	    var answer = confirm("Delete selected messages ?")
  	    if (answer){
  	        document.messages.submit();
  	    }
  	    
  	    return false;  
  	}
 
  </script>
<meta name="apple-mobile-web-app-capable" content="yes" />
</head>
<body>

  	<section id="landing" style="padding:25px">
  	<div class="rounded" style="margin:25px 25px 0 0 ">
  		<div class="rounded orange" >
  			<span style="padding: 25px 0 0 0;display: block;" class="white_header">New Presentation</span>
  			<br>
 
  		</div>
  		<a class="gray_header" style="font-weight:lighter; font-size:14px ;color: #222222;" href="javascript:this.location ='<?echo site_url("presentation/new_presentation ");?>'">Create a New Presentation</a>
  	</div>
  	 <? 
  	 	if ($query->num_rows() > 0)
  	 	{
  	 	
  	 	   foreach ($query->result() as $row)
  	 	   {
  	 ?>
  		<div class="rounded" style="margin:25px 25px 0 0 ">
  			<div class="rounded green" style="margin:0 0 0 0" >
  				<span style="padding: 25px 0 0 0;display: block;" class="white_header"><?= $row->prepared_for; ?></span>
  				<br>
  				<h4 class="white_header" style="font-size:12px">By:<?= $row->sales_rep; ?></h4>
  			</div>
  			<a class="gray_header" style="font-weight:lighter; font-size:14px ;" href="javascript:this.location = 'presentation/view/<?= $row->id ?>'">View Presentation</a>
  			<a class="gray_header" style="font-weight:lighter;font-size:14px ;" href="javascript:this.location = 'presentation/edit/<?= $row->id ?>'">Edit Presentation</a>
  			<a  style="font-weight:lighter;font-size:14px ;" onclick="return deletechecked('Are you sure you want to delete');" href="javascript:this.location = 'presentation/delete/<?=$row->id?>'" >Delete Presentation</a>
  		</div>
  	 <? 
  	 	}
  	 }
  	  ?>
  	</section>
  	 <!-- end landing section -->
  	 
</body>
</html>
  