<!-- Latest compiled and minified JavaScript -->
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<title>Availability</title>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" >
    <div class="navbar-header">
      <a class="navbar-brand" href="#">RaidFinder</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="Availability">Availability</a></li>
      <li class="active"><a href="Characters">Character</a></li>
      <li><a href="Raids">Raids</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="Logout">Logout</a></li>
	</ul>
  </div>
</nav>
<form Style="margin-top:200px;">
	<table>
		<thead>
			<tr>
				<td>
					name
				</td>
				<td>
					Ilvl
				</td>
				<td>
					Spec/Class
				</td>
			</tr>
		</thead>
		<tr>
			<td>
				<input name="Name" type="text"/>
			</td>
			<td>
				<input name="Ilvl" type="number"/>
			</td>
			<td>
				<select name="Class" type="text">
					<option value="Blood-DK">Blood-DK</option>
					<option value="Frost-DK">Frost-DK</option>
					<option value="Unholy-DK">Unholy-DK</option>
					<option value="Havoc-DH">Havoc-DH</option>
					<option value="Vengeance-DH">Vengeance-DH</option>
					<option value="Balance-Druid">Balance-Druid</option>
					<option value="Feral-Druid">Feral-Druid</option>
					<option value="Guardian-Druid">Guardian-Druid</option>
					<option value="Restoration-Druid">Restoration-Druid</option>
					<option value="BM-Hunter">BM-Hunter</option>
					<option value="MM-Hunter">MM-Hunter</option>
					<option value="Survival-Hunter">Survival-Hunter</option>
					<option value="Arcane-Mage">Arcane-Mage</option>
					<option value="Fire-Mage">Fire-Mage</option>
					<option value="Frost-Mage">Frost-Mage</option>
					<option value="Brewmaster-Monk">Brewmaster-Monk</option>
					<option value="Mistweaver-Monk">Mistweaver-Monk</option>
					<option value="Windwalker-Monk">Windwalker-Monk</option>
					<option value="Holy-Paladin">Holy-Paladin</option>
					<option value="Protection-Paladin">Protection-Paladin</option>
					<option value="Retribution-Paladin">Retribution-Paladin</option>
					<option value="Holy-Priest">Holy-Priest</option>
					<option value="Discipline-Priest">Discipline-Priest</option>
					<option value="Shadow-Priest">Shadow-Priest</option>
					<option value="Assassin-Rouge">Assassin.-Rouge</option>
					<option value="Outlaw-Rouge">Outlaw-Rouge</option>
					<option value="Subtlety-Rouge">Subtlety-Rouge</option>
					<option value="Elemental-Shaman">Elemental-Shaman</option>
					<option value="Enchancement-Shaman">Enchancement-Shaman</option>
					<option value="Restoration-Shaman">Restoration-Shaman</option>
					<option value="Affliction-Warclock">Affliction-Warclock</option>
					<option value="Demonology-Warclock">Demonology-Warclock</option>
					<option value="Destruction-Warclock">Destruction-Warclock</option>
					<option value="Arms-Warrior">Arms-Warrior</option>
					<option value="Fury-Warrior">Fury-Warrior</option>
					<option value="Protection-Warrior">Protection-Warrior</option>
				</select>
			</td>
	</table>
	<tr>
		<td>
			<input name="Submit" type="submit" value="Submit"/>
		</td>
	</tr>
</form>
</body>
</html>