<?php 
    require_once ('./config/config.php');
     $data = new db;
     $data->connect();
?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <link rel="stylesheet" href="style.css">
  <script src="./js/main.js" defer></script>
</head>
<body>
  <div class="md:container md:mx-auto">
             <div class="grid p-3 text-zinc-50">
             <div class="max-w-md mx-auto mt-4">
             <form class="bg-inherit  rounded px-8 pt-6 pb-8 mb-4" id='form' action="./php/getdata.php" method="POST"> 
               <div class="mb-4">
                 <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                   Nombre
                 </label>
                 <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" type="text" placeholder="Ingrese su nombre">
               </div>
               <div class="mb-4">
                 <label class="block text-gray-700 text-sm font-bold mb-2" for="contrasena">
                   Contraseña
                 </label>
                 <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="contrasena" type="password" placeholder="Ingrese su contraseña">
               </div>
               <div class="mb-4">
                 <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                   email
                 </label>
                 <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Ingrese su email">
               </div>
               <div class="mb-4">
                 <label class="block text-gray-700 text-sm font-bold mb-2" for="productos">
                   Productos
                 </label>
                 <div class="mb-4">
                   <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="producto-nombre" type="text" placeholder="Nombre del producto">
                 </div>
                 <div class="mb-4">
                   <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="producto-nombre" type="text" placeholder="Nombre del producto">
                 </div>
               </div>
               <div class="flex items-center justify-between">
                 <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" name="submit" type="submit">
                   Enviar
                 </button>
                 <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="reset">
                   Cancelar
                 </button>
               </div>
             </form>
           </div>
    </div>
  </div>
</body>
</html>