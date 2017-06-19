<style type="text/css">

/*.preloader:before{
    background-image: url('<?#php IMAGE('preloader_center.png') ?>');
    background-position: center;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    z-index: -1;
    opacity: 0.4;
}
.preloader:after{
    background-image: url('<?#php IMAGE('preloader_pattern.png') ?>');
    background-position: center;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: -1;
    opacity: 0.4;
}*/
.preloader:before{
    background-image: url('<?php IMAGE('preloader_pattern2.png') ?>');
        background-position: bottom right;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    z-index: -1;
    opacity: 0.15;
    -ms-transform: rotate(180deg); /* IE 9 */
    -webkit-transform: rotate(180deg); /* Chrome, Safari, Opera */
    transform: rotate(180deg);
}
.preloader:after{
    background-image: url('<?php IMAGE('preloader_pattern2.png') ?>');
    background-position: bottom right;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    z-index: -1;
    opacity: 0.15;
}
	.vertical-centered-box {
	  position: absolute;
	  width: 100%;
	  height: 100%;
	  text-align: center;
		top: 0px;
		left: 0;
	}
	.vertical-centered-box:after {
	  content: '';
	  display: inline-block;
	  height: 100%;
	  vertical-align: middle;
	  margin-right: -0.25em;
	}
	.vertical-centered-box .content {
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  display: inline-block;
	  vertical-align: middle;
	  text-align: left;
	  font-size: 0;
	}
	.loader-circle {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  width: 120px;
	  height: 120px;
	  border-radius: 50%;
	  box-shadow: inset 0 0 0 1px rgba(255, 255, 255, 0.1);
	  margin-left: -60px;
	  margin-top: -60px;
	  background-color: #fff;
	}
	.loader-line-mask {
	  position: absolute;
	  left: 50%;
	  top: 50%;
	  width: 60px;
	  height: 120px;
	  margin-left: -60px;
	  margin-top: -60px;
	  overflow: hidden;
	  -webkit-transform-origin: 60px 60px;
	  -moz-transform-origin: 60px 60px;
	  -ms-transform-origin: 60px 60px;
	  -o-transform-origin: 60px 60px;
	  transform-origin: 60px 60px;
	  -webkit-mask-image: -webkit-linear-gradient(top, #000000, rgba(0, 0, 0, 0));
	  -webkit-animation: rotate 1.2s infinite linear;
	  -moz-animation: rotate 1.2s infinite linear;
	  -o-animation: rotate 1.2s infinite linear;
	  animation: rotate 1.2s infinite linear;
	}
	.loader-line-mask .loader-line {
	  width: 120px;
	  height: 120px;
	  border-radius: 50%;
	  box-shadow: inset 0 0 0 1px rgba(237, 28, 36, 0.5);
	}
	#particles-background,
	#particles-foreground {
	  left: -51%;
	  top: -51%;
	  width: 202%;
	  height: 202%;
	  -webkit-transform: scale3d(0.5, 0.5, 1);
	  -moz-transform: scale3d(0.5, 0.5, 1);
	  -ms-transform: scale3d(0.5, 0.5, 1);
	  -o-transform: scale3d(0.5, 0.5, 1);
	  transform: scale3d(0.5, 0.5, 1);
	}
	#particles-background {
	  background: #2c2d44;
	  background-image: -moz-linear-gradient(45deg, #eee 2%, #ffffff 100%);
	  background-image: -webkit-linear-gradient(45deg, #eee 2%, #ffffff 100%);
	  background-image: linear-gradient(45deg, #eee 2%, #ffffff 100%);
	}
	lesshat-selector {
	  -lh-property: 0; } 
	@-webkit-keyframes rotate{ 0% { -webkit-transform: rotate(0deg);} 100% { -webkit-transform: rotate(360deg);}}
	@-moz-keyframes rotate{ 0% { -moz-transform: rotate(0deg);} 100% { -moz-transform: rotate(360deg);}}
	@-o-keyframes rotate{ 0% { -o-transform: rotate(0deg);} 100% { -o-transform: rotate(360deg);}}
	@keyframes rotate{ 0% {-webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);-ms-transform: rotate(0deg);transform: rotate(0deg);} 100% {-webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);-ms-transform: rotate(360deg);transform: rotate(360deg);}}
	[not-existing] {
	  zoom: 1;
	}
	lesshat-selector {
	  -lh-property: 0; } 
	@-webkit-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
	@-moz-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
	@-o-keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
	@keyframes fade{ 0% { opacity: 1;} 50% { opacity: 0.25;}}
	[not-existing] {
	  zoom: 1;
	}
	lesshat-selector {
	  -lh-property: 0; } 
	@-webkit-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
	@-moz-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
	@-o-keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
	@keyframes fade-in{ 0% { opacity: 0;} 100% { opacity: 1;}}
	[not-existing] {
	  zoom: 1;
	}
</style>
<div class="preloader">

	<div class="vertical-centered-box">
	  <div class="content">
	    <div class="loader-circle"></div>
	    <div class="loader-line-mask">
	      <div class="loader-line"></div>
	    </div>
		<svg style="width: 70px;    position: relative;" id="prism-logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.83 142.28"><defs><style>.cls-1{fill:#ED1C24;}</style></defs><title>near-logo-white</title><path class="cls-1" d="M147.51,75.74C147.51,36.47,115,4.65,75,4.65S2.69,36.47,2.69,75.74,35.08,146.93,75,146.93H125.5c23,0,22-22.74,22-22.74Zm-117.11,0c0-24.24,20-43.83,44.63-43.83s44.59,19.59,44.59,43.83-20,43.79-44.59,43.79S30.41,100,30.41,75.75" transform="translate(-2.69 -4.65)"/></svg>
	  </div>
	</div>
</div>