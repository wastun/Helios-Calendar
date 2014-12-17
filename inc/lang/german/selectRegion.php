<?php
	$state = (isset($state)) ? $state : '';
?>
<select <?php if(isset($stateDisabled)){echo 'disabled="disabled"';}?> name="locState" id="locState">
	<option value=""><?php echo (isset($regSelect)) ? $regSelect : '';?></option>
	<option <?php echo ($state=="BW") ? 'selected="selected"' : '';?> value="AL">Baden-Württemberg</option>
	<option <?php echo ($state=="BY") ? 'selected="selected"' : '';?> value="AK">Bayern</option>
	<option <?php echo ($state=="BE") ? 'selected="selected"' : '';?> value="AZ">Berlin</option>
	<option <?php echo ($state=="BB") ? 'selected="selected"' : '';?> value="AR">Brandenburg</option>
	<option <?php echo ($state=="HB") ? 'selected="selected"' : '';?> value="CA">Bremen</option>
	<option <?php echo ($state=="HH") ? 'selected="selected"' : '';?> value="CO">Hamburg</option>
	<option <?php echo ($state=="HE") ? 'selected="selected"' : '';?> value="CT">Hessen</option>
	<option <?php echo ($state=="MV") ? 'selected="selected"' : '';?> value="DE">Mecklenburg-Vorpommern</option>
	<option <?php echo ($state=="NI") ? 'selected="selected"' : '';?> value="DC">Niedersachsen</option>
	<option <?php echo ($state=="NW") ? 'selected="selected"' : '';?> value="FL">Nordrhein-Westfalen</option>
	<option <?php echo ($state=="RP") ? 'selected="selected"' : '';?> value="GA">Rheinland-Pfalz</option>
	<option <?php echo ($state=="SL") ? 'selected="selected"' : '';?> value="HI">Saarland</option>
	<option <?php echo ($state=="SN") ? 'selected="selected"' : '';?> value="ID">Sachsen</option>
	<option <?php echo ($state=="ST") ? 'selected="selected"' : '';?> value="IL">Sachsen-Anhalt</option>
	<option <?php echo ($state=="SH") ? 'selected="selected"' : '';?> value="IN">Schleswig-Holstein</option>
	<option <?php echo ($state=="TH") ? 'selected="selected"' : '';?> value="IA">Thüringen</option>
</select>