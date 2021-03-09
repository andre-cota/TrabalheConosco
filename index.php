<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://app.jhcgadvocacia.com.br/jhnet/images/jhnet_logo_fav.png">
    <link rel="icon" type="image/png" href="https://app.jhcgadvocacia.com.br/jhnet/images/jhnet_logo_fav.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,300,400,700,900" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Trabalhe Conosco - JHCG</title>
</head>

<body>
    <div class="flex justify-center content-center mx-auto bg-green-700 h-screen p-4">
        <div class="shadow-lg rounded-lg w-3/4 bg-white">
            <div class="mt-20 text-center ">
                <h1 class="font-serif text-4xl">TRABALHE CONOSCO</h1>
            </div>
            <div class="my-10" id="progress">
                <div class="mx-20 mt-3 sm:mt-0 sm:ml4">
                    <div class="w-full py-6">
                        <div class="flex">
                            <div class="w-1/3">
                                <div class="relative mb-2">
                                    <div class="w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center">
                                        <span class="text-center text-white w-full">
                                            1
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                            <div class="w-0 bg-green-300 py-1 rounded" id="prog-bar-2" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center" id="prog-dot-2">
                                        <span class="text-center text-gray-600 w-full" id="prog-txt-2">
                                            2
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/3" id="prog-3">
                                <div class="relative mb-2">
                                    <div class="absolute flex align-center items-center align-middle content-center" style="width: calc(100% - 2.5rem - 1rem); top: 50%; transform: translate(-50%, -50%)">
                                        <div class="w-full bg-gray-200 rounded items-center align-middle align-center flex-1">
                                            <div class="w-0 py-1 rounded" id="prog-bar-3" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center" id="prog-dot-3">
                                        <span class="text-center text-gray-600 w-full" id="prog-txt-3">
                                            3
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nome-completo">
                                    Nome Completo
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nome-completo" type="text" placeholder="Fulano Jose da Silva">
                                <p class="text-red text-xs italic">*Campo necessário</p>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                                   E-mail
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="email" type="text" placeholder="Fulano@silva.com">
                                <p class="text-red text-xs italic">*Campo necessário</p>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-city">
                                    Data de nascimento
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="grid-city" type="date" placeholder="Albuquerque">
                            </div>
                        </div>
                        </div>
                        <button class="items-end border-2 rounded border-green-900 bg-green-600 text-white py-2 px-4 mt-2">Próximo</button>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>