{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>It Works Again</h1>
<p>It sounds like you want to hear more about {{$topic}}</p>
</body>
</html> --}}
@component('mail::message')
# A Heading

Try send email with markdown

- A list
- goes
- here
@component('mail::button',['url'=>'https://aliwildan99.it.student.pens.ac.id'])
    Visit WIldan
@endcomponent
@endcomponent
