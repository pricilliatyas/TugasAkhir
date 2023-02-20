<!-- slide -->
    <link href="demo/css/shCore.css" rel="stylesheet" type="text/css" />
  <link href="demo/css/shThemeDefault.css" rel="stylesheet" type="text/css" />
  <!-- Demo CSS -->
	<link rel="stylesheet" href="demo/css/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="demo/js/modernizr.js"></script>
<div style="margin-top:0px;">  <?php
	$data=mysqli_fetch_array(mysqli_query($GLOBALS["___mysqli_ston"],"SELECT*FROM slide"));
?>

<div style="margin-top:120px;">
     <section class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li>
  	    	    <img src="<?php echo"gambar/$data[s1]"; ?>" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo"gambar/$data[s2]"; ?>" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo"gambar/$data[s3]"; ?>" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo"gambar/$data[s4]"; ?>" />
  	    		</li>
          </ul>
        </div>
      </section>
</div>	  
 <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="demo/js/libs/jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>


  <!-- Syntax Highlighter -->
  <script type="text/javascript" src="demo/js/shCore.js"></script>
  <script type="text/javascript" src="demo/js/shBrushXml.js"></script>
  <script type="text/javascript" src="demojs/shBrushJScript.js"></script>

  <!-- Optional FlexSlider Additions -->
  <script src="demo/js/jquery.easing.js"></script>
  <script src="demo/js/jquery.mousewheel.js"></script>
  <script defer src="demo/js/demo.js"></script>
