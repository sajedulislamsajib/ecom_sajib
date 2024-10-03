<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create a Product</title>
    <style>
        /* Form styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus {
            border-color: #4CAF50;
            outline: none;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="submit"]:active {
            background-color: #3e8e41;
            transform: translateY(2px);
        }

        /* Error styling */
        ul {
            list-style-type: none;
            padding: 0;
            color: red;
            margin-bottom: 15px;
        }

        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Create a Product</h1>

        <div>
            @if($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <form method="post" action="{{ route('product.store') }}">
            @csrf
            @method('post')
            <div>
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Product Name">
            </div>
            <div>
                <label for="qty">Qty</label>
                <input type="text" name="qty" id="qty" placeholder="Qty">
            </div>
            <div>
                <label for="price">Price</label>
                <input type="text" name="price" id="price" placeholder="Price">
            </div>
            <div>
                <label for="description">Description</label>
                <input type="text" name="description" id="description" placeholder="Description">
            </div>
            <div>
                <input type="submit" value="Save a New Product">
            </div>
        </form>
    </div>

</body>
</html>
