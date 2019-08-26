<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       body {
            margin: 0;
            text-align: center;
        }
    </style>
</head>
<body>
   <div class="image">
   @php $image = $pictures[array_rand($pictures)] @endphp
    <img src='{{ asset("puppies/$image") }}'
            alt='{{ substr($image,0, -4) }}'
            width='{{ $width }}' 
            height='{{ $height }}' />
   </div>
    
</body>
</html>