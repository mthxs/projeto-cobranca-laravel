<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Bem-vindo</title>
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="omeoakeosae">
</head>
<body class="bg-[url('/public/Images/fundo.png')] md:bg-fixed">
  
<script src="https://unpkg.com/@heroicons/vue@2.0.16/24/solid/star.js"></script>
<div class="bg-grey-blue/80 w-40 h-screen fixed rounded-r-lg hidden lg:flex flex-col items-center justify-center">
    <div class="flex flex-col gap-10 items-center">
        <button class="bg-primary hover:bg-sky-700 focus:outline-2 focus:outline-offset-5 focus:outline-sky-700 active:bg-sky-700 w-32 h-12 rounded-full drop-shadow-xl/50 text-white font-bold">Início</button>
        <button class="bg-primary hover:bg-sky-700 focus:outline-2 focus:outline-offset-5 focus:outline-sky-700 active:bg-sky-700 w-32 h-12 rounded-full drop-shadow-xl/50 text-white font-bold">Botão 2</button>
        <button class="bg-primary hover:bg-sky-700 focus:outline-2 focus:outline-offset-5 focus:outline-sky-700 active:bg-sky-700 w-32 h-12 rounded-full drop-shadow-xl/50 text-white font-bold">Botão 3</button>
        <button class="bg-primary hover:bg-sky-700 focus:outline-2 focus:outline-offset-5 focus:outline-sky-700 active:bg-sky-700 w-32 h-12 rounded-full drop-shadow-xl/50 text-white font-bold">Botão 4</button>
    </div>
</div>
<div class="lg:ml-40 h-auto overflow-y-auto flex flex-col min-w-200 sn:100 md:flex justify-center items-center ">
    <div class="md:flex justify-center h-full">  
        <div class="bg-gradient-to-r from-[#7ed957]/70 to-[#007e50] backdrop-blur-[5px] rounded-lg mx-5 my-20 p-5 w-150 h-300 max-w-150 lg:mx-0 lg:my-30 lg:p-8 lg:max-w-250 lg:w-250 lg:h-140">
      </div>
    </div>
</div>

<buttom id="menuBtn" class="lg:hidden fixed top-4 left-4 ">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-18 h-18">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
    </svg>
</buttom>

</body>
</html>