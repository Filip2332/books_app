<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body{
            background-color: #718096;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #333;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            font-family: "Noto Serif", serif;
        }
        .button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 20px 0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">List of books</h1>
<table>
    <thead>
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Rating</th>
        <th>Actions</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->rating }}</td>
            <td><a href="{{ route('books.edit',$book->id) }}"class="button">Edit</a></td>
            <td>
                <form action="{{ route('book.delete', $book->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button delete-button">Delete</button>
                </form>
            </td>K
        </tr>
    @endforeach
    <div style="text-align: center;">
        <a href="{{ route('books.create') }}" class="button">Add book</a>
    </div>
    </tbody>
</table>
</body>
</html>
