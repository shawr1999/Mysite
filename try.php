<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>how to get country list in javascript - www.pakainfo.com</title>
<script>
var stateObject = {
"India": { "Gujrat": ["Surat", "Rajkot"],
"Kerala": ["Kozhikode", "Malappuram"],
"Goa": ["East Goa 1", "west Goa 2"],
},
"Australia": {
"South Australia": ["Adelaide", "Whyalla"],
"Victoria": ["Bendigo", "Melton"]
}, "Canada": {
"Alberta": ["Edmonton", "Beaumont"],
"Columbia": ["Anza", "Campamento"]
},
}
window.onload = function () {
	var selectCountyList = document.getElementById("selectCountyList"),
	selectStateList = document.getElementById("selectStateList"),
	selectCityList = document.getElementById("selectCityList");
	for (var country in stateObject) {
		selectCountyList.options[selectCountyList.options.length] = new Option(country, country);
	}
	selectCountyList.onchange = function () {
		selectStateList.length = 1; 
		selectCityList.length = 1; 
		if (this.selectedIndex < 1) return; 
		for (var state in stateObject[this.value]) {
			selectStateList.options[selectStateList.options.length] = new Option(state, state);
		}
	}
	selectCountyList.onchange();
	selectStateList.onchange = function () {
		selectCityList.length = 1; 
		if (this.selectedIndex < 1) return; 
		var city = stateObject[selectCountyList.value][this.value];
		for (var i = 0; i < city.length; i++) {
			selectCityList.options[selectCityList.options.length] = new Option(city[i], city[i]);
		}
	}
}
</script>
</head>
<body>
<form name="bookMyHome" id="bookMyHome">
Choose Your Country: <select name="state" id="selectCountyList" size="1">
<option value="" selected="selected">Select Your Country</option>
</select>
<br>
<br>
Choose Your State: <select name="countrya" id="selectStateList" size="1">
<option value="" selected="selected">Please Select Your Country</option>
</select>
<br>
<br>
Choose Your City: <select name="city" id="selectCityList" size="1">
<option value="" selected="selected">Please Select Your State</option>
</select><br>
<input type="submit">
</form>
</body>
</html>