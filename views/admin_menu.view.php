<div class="wrap">
	<div class="icon32" id="icon-tools"></div>
	<h2>Entry Popup Options</h2>
	<form method="POST" action="<?=$_SERVER['REQUEST_URI']; ?>">
		<table class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="ad_code">Copy or Code for your Entry Popup: </label>
				</th>
				<td>
					<textarea name="ad_code" id="ad_code" cols="60" rows="5"><?= get_option('il-mobile_pop_' .'ad_code'); ?></textarea>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row">
					<label for="repeat">Repeat: </label>
				</th>
				<td>
					<select name="repeat" id="repeat">
						<option value="0" <?=($repeat == 0 ) ? 'selected="selected"' : '';?> >Always</option>
						<option value="1"<?=($repeat == 1 ) ? 'selected="selected"' : '';?> >Daily</option>
						<option value="7"<?=($repeat == 7 ) ? 'selected="selected"' : '';?> >Weekly</option>
						<option value="30"<?=($repeat == 30) ? 'selected="selected"' : '';?> >Monthly</option>
					</select>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="delay">Delay: </label>
				</th>
				<td>
					<select name="delay" id="delay">
						<option value="1" <?=($delay == 1 )? 'selected="selected"' : '';?>>1 Second</option>
						<option value="2" <?=($delay == 2 )? 'selected="selected"' : '';?>>2 Seconds</option>
						<option value="3" <?=($delay == 3 )? 'selected="selected"' : '';?>>3 Seconds</option>
						<option value="4" <?=($delay == 4 )? 'selected="selected"' : '';?>>4 Seconds</option>
						<option value="5" <?=($delay == 5 )? 'selected="selected"' : '';?>>5 Seconds</option>
						<option value="6" <?=($delay == 6 )? 'selected="selected"' : '';?>>6 Seconds</option>
						<option value="7" <?=($delay == 7 )? 'selected="selected"' : '';?>>7 Seconds</option>
						<option value="8" <?=($delay == 8 )? 'selected="selected"' : '';?>>8 Seconds</option>
						<option value="9" <?=($delay == 9 )? 'selected="selected"' : '';?>>9 Seconds</option>
						<option value="10" <?=($delay == 10) ? 'selected="selected"' : '';?>>10 Seconds</option>

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