<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <x-nav href="/home">Home</x-nav>
        <x-nav href="/about" style="color: green">About</x-nav>
        <x-nav href="/contact">Contact</x-nav>
    </nav>
    <!-- slot -->
    {{ $slot}}
</body>
</html>




<!-- <?php echo $slot; ?> == {{$slot}} -->