<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> KAISOKU ONI ORE WA NARU</h1>
{{$firstname .' '. $lastname .' '. $statut }}


<h1>
@if ($weekEnd) 
{{ 'Ca va GEEKER'}}
@else 
{{ 'Ca va CODER'}}
@endif
</h1>

</body>
</html>