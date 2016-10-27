<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<title>	Lorem Ipsum Generator</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css">
</head>
<body>
<div class="container">
<a href='/'>back</a>

<h1>Lorem Ipsum Generator</h1>

<form method='POST'action='/lorem'>
  {{ csrf_field() }}
  <label for="paragraphsNumber">How many paragraphs do you want to create?</label>
  <input maxlength="2" name="paragraphsNumber" type="text" value="6" id="paragraphsNumber"> (Max: 99)
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

<br>
	<?php echo $paragraphs ?>
</div>
</body>
</html>
