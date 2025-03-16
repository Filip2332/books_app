<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
<!DOCTYPE html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            padding: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin: 10px 0;
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
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
<h1>Edit Book</h1>

<form action="{{ route('books.update', $book->id) }}" method="POST">
    @csrf
    @method('PUT')


    <label>Title:</label>
    <input type="text" name="title" value="{{ $book->title }}" required>
    <br>

    <label>Author:</label>
    <input type="text" name="author" value="{{ $book->author }}" required>
    <br>

    <label>Rating:</label>
    <input type="number" name="rating" value="{{ $book->rating }}" min="1" max="10" required>
    <br>

    <button type="submit">Update Book</button>
</form>

<a href="{{ route('welcome') }}">Back to Book List</a>
</body>
</html>
