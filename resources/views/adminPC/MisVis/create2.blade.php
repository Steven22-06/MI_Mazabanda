<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ingresas Mision y Vision</h2>
    <form action="/store" method="POST" enctype= "multipart/form-data">
        @csrf
        @method('POST')

        <label for="name">Nombre</label>
        <input type="text" name="name" id="name">
        <label for="image"> Imagen</label>
        <input type="file" name="image" id="image">

        <button type="submit">GUARDAR</button>
<!--
        <label for="name">Vision</label>
        <input type="text" name="name" id="name">
        <label for="image"> Imagen</label>
        <input type="file" name="image" id="image">
    </form>
-->
</body>
</html>