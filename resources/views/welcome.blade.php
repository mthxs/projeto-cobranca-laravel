<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="omeoakeosae">
</head>
<body>
   <!-- Adicione isso no <head> do seu HTML se estiver usando Heroicons via CDN -->
<script src="https://unpkg.com/@heroicons/vue@2.0.16/24/solid/star.js"></script>

<!-- Card de Filme com ícone de estrela -->
<div class="max-w-sm rounded overflow-hidden shadow-lg bg-white hover:shadow-xl transition-shadow duration-300">
  <img class="w-full h-64 object-cover" src="https://image.tmdb.org/t/p/original/4VtkIaj76TpQNfhDHXQDdT9uBN5.jpg" alt="Poster do Filme">
  <div class="px-6 py-4">
    <div class="font-bold text-xl mb-2">O Grande Filme</div>
    <p class="text-gray-700 text-base">
      Aventura • Ficção Científica • 2025
    </p>
  </div>
  <div class="px-6 pt-2 pb-4 flex items-center justify-between">
    <div class="flex items-center space-x-1 text-yellow-500">
      <!-- Ícone de estrela -->
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 fill-current" viewBox="0 0 20 20">
        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.37 2.448a1 1 0 00-.364 1.118l1.286 3.957c.3.921-.755 1.688-1.538 1.118l-3.37-2.448a1 1 0 00-1.175 0l-3.37 2.448c-.783.57-1.838-.197-1.538-1.118l1.286-3.957a1 1 0 00-.364-1.118L2.075 9.384c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69l1.286-3.957z" />
      </svg>
      <span class="font-semibold text-sm">4.8/5</span>
    </div>
    <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
      Ver Detalhes
    </button>
  </div>
</div>
 </body>
</html>