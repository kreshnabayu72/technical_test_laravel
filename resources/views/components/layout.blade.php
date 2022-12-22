<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="/employee"><h1>Employee</h1></a>
        <a href="/job"><h1>Job</h1></a>
        <a href="/contract"><h1>Contract</h1></a>
    </nav>
    <main>
        {{$slot}}
    </main>
</body>
</html>