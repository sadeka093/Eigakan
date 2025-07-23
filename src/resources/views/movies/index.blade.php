<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movie List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-4">Movie List</h1>

        <table class="min-w-full border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2 text-left">Title</th>
                    <th class="border px-4 py-2 text-left">IMDB Rating</th>
                    <th class="border px-4 py-2 text-left">Language</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($movies as $movie)
                    <tr>
                        <td class="border px-4 py-2">{{ $movie->title }}</td>
                        <td class="border px-4 py-2">{{ $movie->imdb_rating }}</td>
                        <td class="border px-4 py-2">{{ $movie->language }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="border px-4 py-2 text-center text-gray-500">No movies found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
