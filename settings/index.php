
<div class="w3-row-padding">
<div class="w3-threequarter w3-padding-large w3-border w3-white">
<h3 class="w3-text-light-green w3-hover-text-red">Network Configuration</h3>
<form action="" method="post">
 <input type="hidden" name="list" value="Network Settings Form">
    <label for="interface">Network Interface:</label>
	<p><select id="interface" name="interface" required>
	<option>Select Interface Name</option>
	<option>Ethernet 1</option>
	<option>Ethernet 2</option>
	<option>Ethernet 3</option>
	<option>Ethernet 4</option>
	<option>Ethernet 5</option>
	<option>Ethernet 6</option>
	</select></p>
      
    <label for="ip">Static IP Address:</label>
    <input type="text" id="ip" name="ip" placeholder="192.168.0.x" required>

    <label for="netmask">Netmask:</label>
    <input type="text" id="netmask" name="netmask" placeholder="255.255.255.0" required>

    <label for="gateway">Gateway:</label>
    <input type="text" id="gateway" name="gateway" placeholder="192.168.0.1" required>

    <label for="dns">DNS Servers (comma-separated):</label>
    <input type="text" id="dns" name="dns" placeholder="8.8.8.8" required>

 <p align="center"><button type="submit" name="submit" class="login-btn w3-light-green w3-hover-green" style="border-radius:50%" onmouseover title="Login"><i class="fa fa-check w3-text-white"></i></button><button type="reset" name="cancel" class="login-btn w3-hover-black w3-red" style="border-radius:50%" onmouseover title="Reset"><i class="fa fa-close w3-text-white"></i></button></p>

</form>
</div>
<div class="w3-quarter">
<p class="w3-padding-medium w3-yellow">Warning! </p>
<p class="w3-padding-medium" style="font-size:14px">Please ensure you check the correct network interface name from your <b>server</b> using the <b>command</b> prompt before selecting an interface name from the dropdown</p>
</div>
</div>
