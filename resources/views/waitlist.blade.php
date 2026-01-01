<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join the waitlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Optional Tailwind CDN for quick styling --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded shadow max-w-md w-full">
    <h1 class="text-2xl font-bold mb-4">Join the waitlist</h1>

    <p class="text-gray-600 mb-6">
        Be the first to know when we launch and get 20% off on our first Kit
    </p>
    {{--  could possibly make this 33%   --}}


    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('waitlist.store') }}">
        @csrf

        <input
            type="text"
            name="first_name"
            placeholder="First name"
            required
            class="w-full border p-3 rounded mb-3"
        >

        <input
            type="email"
            name="email"
            placeholder="you@example.com"
            required
            class="w-full border p-3 rounded mb-4"
        >

        <input type="hidden" name="source" value="waitlist-page">

        <button
            type="submit"
            class="w-full bg-black text-white p-3 rounded hover:bg-gray-800"
        >
            Join waitlist
        </button>
    </form>
</div>

</body>
</html>
