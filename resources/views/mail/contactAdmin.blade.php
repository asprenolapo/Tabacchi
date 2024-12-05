<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tabaccheria 195 - Mail</h1>
    <div>
        <h2>Ci ha contattati: {{$userData['name']}}</h2>
        <p>mail: {{$userData['email']}}</p>
        <p>messaggio: <br>{{$userData['body']}}</p>
    </div>
</body>
</html>