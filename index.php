
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Składowe witryny</title>
  <link href="https://unpkg.com/tailwindcss@1.8.10/dist/tailwind.css" rel="stylesheet">
</head>
<body>
<div class="bg-gray-300">
  <div class="bg-purple-100 w-3/12 border border-blue-700 text-red-700 px-5  rounded p-5 mr-auto ml-auto">
    <form method="get" action= "src/potwierdzenieGET.php">
      <div class="text-gray-500">Formularz z metodą GET</div>
        <div>
        <label for="imie">Imie</label>
        <input type="text" name="imie" class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <div>
        <label for="nazwisko">Nazwisko</label>
        <input type="text" name="nazwisko" class="border border-gray-300 px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="text" name="email" class="border border-gray-300 px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      </br>
      <button class="bg-blue-500 text-white font-bold py-1 px-4 rounded" type="submit" value="Wyślij" name="wyslij">
      Wyślij</br>
      </button>
    </form>
  </div>
  <?php 
    foreach($_GET as $key => $val) {
      print("$key: $val<br>");
    } 
  ?> 
  <div class="bg-purple-100 w-3/12 border border-blue-700 text-red-700 px-5  rounded pt-5  my-5 p-5 mr-auto ml-auto">
    <form method="POST" action= "src/potwierdzeniePOST.php">
      <div class="text-gray-500">Formularz z metodą POST</div>
      <div>
        <label for="imie">Imie</label>
        <input type="text" name="imie"class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <div>
        <label for="nazwisko">Nazwisko</label>
        <input type="text" name="nazwisko"class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <div>
        <label for="email">Email</label>
        <input type="text" name="email"class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <button class="bg-blue-500 text-white font-bold py-1 px-4 rounded" type="submit" value="Wyślij" name="wyslij">
      Wyślij</br>
      </button>
    </form>
    </br>
  </div>
  <div class="bg-purple-100 w-3/12 border border-blue-700 text-red-700 px-5  rounded pt-5  my-5 p-5 mr-auto ml-auto">
    <form method="POST" action= "src/ciasteczkoPOST.php">
      </br>
      <div class="text-gray-500">Formularz z metodą POST dla ciastka</div>
      <div>
        <label for="imieciastka">Imie</label>
        <input type="text" name="imieciastka"class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
      </div>
      <button class="bg-blue-500 text-white font-bold py-1 px-4 rounded" type="submit" value="Wyślij" name="wyslij1">
      Wyślij</br>
      </button>
    </form>
    </br>
  </div>
  <div class="bg-purple-100 w-3/12 border border-blue-700 text-red-700 px-5  rounded pt-5  my-5 p-5 mr-auto ml-auto">
    <form method="POST" action= "src/sesjaPOST.php">
    </br>
    <div class="text-gray-500">Formularz z metodą POST dla sesji</div>
    <div>
      <label for="nazwisko">Nazwisko</label>
      <input type="text" name="nazwisko"class="border border-gray-300  px-3 py-1 rounded-lg shadow-sm mb-3"></br>
    </div>
    <button class="bg-blue-500 text-white font-bold py-1 px-4 rounded" type="submit" value="Wyślij" name="wyslij">
    Wyślij</br>
    </button>
    </form>
    </br>
  </div>
  <?php
  include "src/ciasteczko.php";
  include "src/sesja.php";
  ?>
</div>
</body>
</html>