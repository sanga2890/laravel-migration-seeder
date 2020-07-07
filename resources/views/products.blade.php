<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Products</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products_list as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>{{ $product->name}}</td>
                        <td>{{ $product->type}}</td>
                        <td>{{ $product->price}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>
