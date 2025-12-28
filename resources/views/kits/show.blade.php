<!DOCTYPE html>
<html>
<head>
    <title>{{ $kit->name }}</title>
</head>
<body>

<h1>{{ $kit->name }}</h1>

<p>{{ $kit->description }}</p>

<p>
    Price: ${{ number_format($kit->price_cents / 100, 2) }}
</p>

<a href="/kits">← Back to kits</a>

</body>
</html>
