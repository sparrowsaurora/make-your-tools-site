<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Join the waitlist</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Optional Tailwind CDN for quick styling --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 min-h-screen flex items-center justify-center">

<div class="bg-gray-800 p-8 shadow max-w-md w-full rounded-xl">
    <h1 class="text-white text-2xl font-bold mb-4">Join the waitlist</h1>

    <p class="text-gray-400 mb-6">
        Be the first to know when we launch and get 20% off on your first Kit
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
            class="w-full border p-3 rounded mb-3 bg-zinc-200"
        >

        <input
            type="email"
            name="email"
            placeholder="you@example.com"
            required
            class="w-full border p-3 rounded mb-4 bg-zinc-200"
        >

        <input type="hidden" name="source" value="waitlist-page">

        <button
            type="submit"
            class="w-full bg-orange-500 text-white p-3 rounded hover:bg-orange-700"
        >
            Join waitlist
        </button>
    </form>
</div>

</body>
</html>
