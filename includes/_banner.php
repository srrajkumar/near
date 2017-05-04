<div id="particles-js" class="col-lg-12 brj k" style="background-image:url('<?php IMAGE('banner.jpg'); ?>'); ">
<!--tyle="background-image:url('<?#php IMAGE('anim-imag1.png'); ?>"-->
	<div class="anim-imag">
		<div>
			<video id="video" style="display:none" autoplay="" data-video="0">
				<source src="<?php VIDEO('banner/near.mp4'); ?>" type="video/mp4; codecs=&quot;avc1.42E01E&quot;">
			</video>
			<canvas width="1280" height="2560" id="buffer"></canvas>
			<canvas width="1280" height="1280" id="output"></canvas>
		</div>
	</div>
		<div class="banner-space container"></div>
		<div class="container banner-content">
		<div><span>The platform processing</span></div>
		<div><span class="red">Massive Data</span></div>
		<div><span>to understand consumers</span></div>
		<div><span>in Smart Environments</span></div>
		<div class="line_break"></div>
			<span class="line-2">"Location as a Single Identifier to combine <br class="add">
            <div id="typed-strings" class="type">
                <span>Wifi</span>
                <span>Location</span>
                <span>Ambient Intelligence Platform</span>
            </div>
            <span id="typed" style="white-space:pre;"></span>"</span>
            <div style="clear: both"></div>
			<a href="#" class=" hp-cta-video " style="margin-top: 20px;">Play Video</a>
		</div>
		<div class="mouse"></div>
	</div>
<style type="text/css">
	#buffer{
		display: none;
	}
</style>
	<script type="text/javascript">
(function(){
      var outputCanvas = document.getElementById('output'),
        output = outputCanvas.getContext('2d'),
        bufferCanvas = document.getElementById('buffer'),
        buffer = bufferCanvas.getContext('2d'),
        video = document.getElementById('video'),
        width = outputCanvas.width,
        height = outputCanvas.height,
        interval;
        
      function processFrame() {
        buffer.drawImage(video, 0, 0);
        
        // this can be done without alphaData, except in Firefox which doesn't like it when image is bigger than the canvas
        var image = buffer.getImageData(0, 0, width, height),
          imageData = image.data,
          alphaData = buffer.getImageData(0, height, width, height).data;
        
        for (var i = 3, len = imageData.length; i < len; i = i + 4) {
          imageData[i] = alphaData[i-1];
        }
        
        output.putImageData(image, 0, 0, 0, 0, width, height);
      }
      
      video.addEventListener('play', function() {
        clearInterval(interval);
        interval = setInterval(processFrame, 40)
      }, false);
      
      // Firefox doesn't support looping video, so we emulate it this way
      video.addEventListener('ended', function() {
        video.play();
      }, false);
    })();
	</script>