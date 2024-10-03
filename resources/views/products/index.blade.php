<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Management</title>
    <style>
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: white;
            background-color: #4CAF50;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        /* Fancy table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        table th, table td {
            padding: 12px 15px;
        }

        table th {
            background-color: #4CAF50;
            color: #ffffff;
        }

        table tr {
            border-bottom: 1px solid #dddddd;
        }

        table tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        table td a {
            color: #4CAF50;
            text-decoration: none;
        }

        table td a:hover {
            text-decoration: underline;
        }

        table td form {
            margin: 0;
        }

        table input[type="submit"] {
            background-color: #f44336;
            color: white;
            border: none;
            padding: 6px 12px;
            border-radius: 3px;
            cursor: pointer;
        }

        table input[type="submit"]:hover {
            background-color: #e53935;
        }

        table input[type="submit"]:active {
            background-color: #d32f2f;
        }

        /* Center align content styling */
        .content {
            display: flex;
            justify-content: center; /* Aligns items to the center */
            margin: 20px; /* Adds margin around the content */
        }
    </style>
</head>
<body>

    <h1>Product</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>
   <div>

    <div class="content">
        <a href="{{ route('product.create') }}" class="btn">Create a Product</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="{{ route('product.edit', ['product' => $product]) }}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.destroy', ['product' => $product]) }}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
