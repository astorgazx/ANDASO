<html>
<head>
    <title>Productos</title>    
</head>
<body>
    <h1>Productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->categoria_id }}</td>
                <td>{{ $producto->imagen }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
