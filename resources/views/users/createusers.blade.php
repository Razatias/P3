<!DOCTYPE html>
<html>
<head>

	<meta charset='utf-8'>
	<title>	User Generator</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
<div class='container'>
	<a href='/'>Back</a>
	<h1>User Generator</h1>
	<form method="POST" action='/usergenerator'>
    {{ csrf_field() }}
		<label for="users">How many users?</label>
    <input maxlength="2" name="users" type="text" value="8" id="users"> (Max: 99)
		<br>
    <input type="submit" value="Generate!">
    </form>

    @if(count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

	<?php echo $names?>
</div>
</body>
</html>
