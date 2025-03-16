<!DOCTYPE html>
<html>
<head>
    <title>Add book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            display: inline-block;
            margin-top: 20px;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin: 5px 0;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Add a new book</h1>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Title" required>
    <input type="text" name="author" placeholder="Author" required>
    <input type="number" name="rating" placeholder="Rating" min="1" max="10" required>
    <button type="submit">Add book</button>
</form>
<a href="{{ route('welcome') }}">Back to the book list</a>
</body>
</html>
