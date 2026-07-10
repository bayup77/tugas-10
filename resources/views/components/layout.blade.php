<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">

    <x-navbar />

    <main style="padding: 20px; min-height: 400px;">
        {{ $slot }}
    </main>

    <x-footer />

</body>
</html>