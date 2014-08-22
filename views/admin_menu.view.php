<div class="wrap">
	<div class="icon32" id="icon-tools"></div>
	<h2>Entry Popup Options</h2>
	<form method="POST" action="<?php echo esc_attr($_SERVER['REQUEST_URI']); ?>">
		<table class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="ad_code">Copy or Code for your Entry Popup: </label>
				</th>
				<td>
					<textarea name="ad_code" id="ad_code" cols="60" rows="5"><?php echo esc_textarea(get_option('il-mobile_pop_' .'ad_code')); ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="repeat">Repeat: </label>
				</th>
				<td>
					<select name="repeat" id="repeat">
						<option value="0" <?php echo ($repeat == 0 ) ? 'selected="selected"' : '';?> >Always</option>
						<option value="1"<?php echo ($repeat == 1 ) ? 'selected="selected"' : '';?> >Daily</option>
						<option value="7"<?php echo ($repeat == 7 ) ? 'selected="selected"' : '';?> >Weekly</option>
						<option value="30"<?php echo ($repeat == 30) ? 'selected="selected"' : '';?> >Monthly</option>
					</select>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="delay">Delay: </label>
				</th>
				<td>
					<select name="delay" id="delay">
						<option value="1" <?php echo ($delay == 1 )? 'selected="selected"' : '';?>>1 Second</option>
						<option value="2" <?php echo ($delay == 2 )? 'selected="selected"' : '';?>>2 Seconds</option>
						<option value="3" <?php echo ($delay == 3 )? 'selected="selected"' : '';?>>3 Seconds</option>
						<option value="4" <?php echo ($delay == 4 )? 'selected="selected"' : '';?>>4 Seconds</option>
						<option value="5" <?php echo ($delay == 5 )? 'selected="selected"' : '';?>>5 Seconds</option>
						<option value="6" <?php echo ($delay == 6 )? 'selected="selected"' : '';?>>6 Seconds</option>
						<option value="7" <?php echo ($delay == 7 )? 'selected="selected"' : '';?>>7 Seconds</option>
						<option value="8" <?php echo ($delay == 8 )? 'selected="selected"' : '';?>>8 Seconds</option>
						<option value="9" <?php echo ($delay == 9 )? 'selected="selected"' : '';?>>9 Seconds</option>
						<option value="10" <?php echo ($delay == 10) ? 'selected="selected"' : '';?>>10 Seconds</option>

					</select>
				</td>
			</tr>
			<tr valign="top">
				<td colspan="2">
					<input type="submit" class="button-primary" value="submit">
					<input type="hidden" name="save" value="save">
				</td>
			</tr>
		</table>
	</form>
</div>