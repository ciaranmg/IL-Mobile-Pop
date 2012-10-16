<!-- IL Mobile Entry Pop  		entry_pop.view -->
<style>
	
	#slideUp {
		display: none;
		position: fixed;
		top: 20%;
		left: 0;
		width: 100%;
		z-index: 99999;
	}

	#slideUp > div{
		position: relative;
		margin-left: auto;
		margin-right: auto;
		width: 80%;
		border: 5px solid #FFC600;
		padding: 10px;
		-webkit-box-shadow:  0px 0px 3px 3px #666666;
		box-shadow:  0px 0px 3px 3px #666666;
		color: #333333;
		background-color: #EDE9E4;
	}

	#slideUp > div .close{
		background-image: url("<?=WP_PLUGIN_URL;?>/il-mobile_pop/img/close.png");
		cursor: pointer;
		height: 35px;
		position: absolute;
		right: -20px;
		top: -20px;
		width: 35px;
	}

	#slideUp input.signupButton {
		border: 1px solid #545454;
		-moz-border-radius: 3px;
		-webkit-border-radius: 3px;
		padding: 8px;
		margin: 8px;
		font-weight: bold;
		font-size: 100%;
	}

	#slideUp input.emailBox{
		width: 40%;
		padding: 12px;
		
	}

	#slideUp label{
		font-weight: bold;
	}

	#header-inside{
		background: #001854 url('http://dev.internationalliving.com/wp-content/themes/international-living/img/background/header-gradient.gif') repeat-x bottom;
	}

 
	/* Landscape phones and down */
	@media only screen and (min-width: 300px) and (max-width: 600px) {
		#slideUp > div {
			font-size: 200%;
		}

		#slideUp input.emailBox{
			font-size: 120%;	
		}


		#slideUp > div .close{
			background-image: url("<?=WP_PLUGIN_URL;?>/il-mobile_pop/img/hidpi-close.png");
			cursor: pointer;
			height: 100px;
			position: absolute;
			right: -50px;
			top: -50px;
			width: 100px;
		}
	}


</style>
<script type="text/javascript">
	jQuery(document).ready(function(){
		
		jQuery('#slideUp').delay(<?=$delay * 1000;?>).slideDown();
		
		var repeat = <?=$repeat;?>;
		if(repeat !== 0){
			jQuery.cookie('il-mobile_pop', 'true', { expires: repeat });
		}

		jQuery('#slideUp .close').click(function(){
			jQuery('#slideUp').slideUp();
			return false;
		});
	});
</script>

<div id="slideUp">
	<div>
		<a class="close"></a>
		<?=$ad_code;?>
	</div>
</div>