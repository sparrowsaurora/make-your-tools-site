<!DOCTYPE html>
<html>
<head>
    <title>Kits</title>
</head>
<body>

<h1>Kits</h1>

<ul>
    @foreach ($kits as $kit)
        <li>
            <a href="/kits/{{ $kit->slug }}">
                {{ $kit->name }}
            </a>
            — ${{ number_format($kit->price_cents / 100, 2) }}
        </li>
    @endforeach
</ul>

</body>
</html>
