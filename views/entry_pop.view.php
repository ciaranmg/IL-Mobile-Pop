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
		width: 90%;
		border: 3px solid #FFC600;
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