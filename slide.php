<div id="wrapper">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider"> 
			<img src="nivo-slider/demo/images/image1.jpg" data-thumb="nivo-slider/demo/images/image1.jpg" alt="" /> 
			<img src="nivo-slider/demo/images/image2.jpg" data-thumb="nivo-slider/demo/images/image2.jpg" alt="" title="#htmlcaption2" />
			<img src="nivo-slider/demo/images/image3.jpg" data-thumb="nivo-slider/demo/images/image3.jpg" alt="" data-transition="slideInLeft" title="#htmlcaption3" /> 
			<img src="nivo-slider/demo/images/image4.jpg" data-thumb="nivo-slider/demo/images/image4.jpg" alt="" title="#htmlcaption4" /> 
		</div>
		<div id="htmlcaption1" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
		<div id="htmlcaption2" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
		<div id="htmlcaption3" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
		<div id="htmlcaption4" class="nivo-html-caption"> <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. </div>
	</div>
</div>

<script type="text/javascript" src="nivo-slider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script> 