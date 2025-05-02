<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>
<body>
    <!-- Navbar -->
     <x-navbar>
     </x-navbar>
    
<div class="container-fluid min-vh-100 bg-custom">
    {{  $slot  }}
</div>

</body>
</html>