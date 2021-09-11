<!DOCTYPE html>
<html>
<head>
    <title>PHP arrays</title>
    <style>
        .row {
            margin: 5px 0;
	        padding: 5px 0;
        }
    </style>
</head>
<body>
<?php
$name = 'Oleksandra';
$surname = 'Anisimova';
$address = 'Kyiv, Ukraine';
$tel = '+380677581995';
$email = 'krollzilla@gmail.com';
$languages = ['UA','EN','RU'];
?>
<div id="app">
    <form action="GET">
        <div class="row">
	        <label for="name">Name</label>
	        <input type="text" id="name" value="<?=$name?>">
        </div>
	    <div class="row">
	        <label for="surname">Surname</label>
	        <input type="text" id="surname" value="<?=$surname?>">
	    </div>
	    <div class="row">
	        <label for="address">Address</label>
	        <input type="text" id="address" value="<?=$address?>">
	    </div>
	    <div class="row">
	        <label for="tel">Telephone </label>
	        <input type="text" id="tel" value="<?=$tel?>">
		</div>
	    <div class="row">
	        <label for="email">Email</label>
	        <input type="text" id="email" value="<?=$email?>">
        </div>
	    <div class="row">
		    <label for="language">Language</label>
		    <select id="language">
			    <option><?=$languages[0]?></option>
			    <option><?=$languages[1]?></option>
			    <option><?=$languages[2]?></option>
		    </select>
	    </div>
    </form>
</div>
</body>
</html>

