<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="robots" content="noindex">
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="https://app.jhcgadvocacia.com.br/jhnet/images/jhnet_logo_fav.png">
    <link rel="icon" type="image/png" href="https://app.jhcgadvocacia.com.br/jhnet/images/jhnet_logo_fav.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Trabalhe Conosco - JHCG</title>
</head>

<body>
    <div class="flex justify-center content-center mx-auto bg-green-700 p-4">
        <div class="shadow-lg rounded-lg w-3/4 bg-white min-h-screen">
            <div class="mt-20 text-center ">
                <h1 class="text-4xl">TRABALHE CONOSCO</h1>
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

                    <!-- FOMULARIO 1 -->
                    <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2" id="form-1">
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="nome-completo">
                                    Nome Completo
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="nome-completo" type="text" placeholder="Fulano Jose da Silva">
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="email">
                                    E-mail
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="email" type="text" placeholder="Fulano@silva.com">
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="data-nasc">
                                    Data de nascimento
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="data-nasc" type="date">
                            </div>
                        </div>
                        <div class="w-full flex items-end justify-end">
                            <button class="border-2 rounded border-green-600 bg-green-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-green-800" id="btn-1" onclick="nextTwo()">Próximo</button>
                        </div>
                    </div>

                    <!-- FOMULARIO 2 -->
                    <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 hidden" id="form-2">
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="area">
                                    Área
                                </label>
                                <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="area">
                                    <option value="">Selecione Área</option>
                                    <option value="1">Cível</option>
                                    <option value="2">TI</option>
                                    <option value="3">Administrativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cargo">
                                    CARGO
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cargo" type="text" placeholder="Fulano@silva.com">
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cep">
                                    CEP
                                </label>
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cep" placeholder="12345-678">

                            </div>
                        </div>
                        <div class="mb-6 grid grid-cols-2 ml-2">
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 mr-2" placeholder="Rua de Carros" disabled>
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Bairro de Casas" disabled>
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 mr-2" placeholder="Cidade de Bairros" disabled>
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" placeholder="Estado do Brasil" disabled>
                        </div>
                        <div class="w-full flex items-end justify-between">
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-blue-800" id="btn-2" onclick="backOne()">Anterior</button>
                            <button class="border-2 rounded border-green-600 bg-green-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-green-800" id="btn-2" onclick="nextThree()">Proximo</button>
                        </div>
                    </div>

                    <!-- FOMULARIO 3 -->
                    <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 hidden" id="form-3">

                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="faculdade">
                                    Faculdade
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="faculdade" type="text" placeholder="Instituto/Centro Educacional/Universidade">
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6 ">
                            <div class="w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="ano-formacao">
                                    Ano de formação
                                </label>
                                <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="ano-formacao" type="date">
                            </div>
                            <div class="w-1/2 -mx-3 md:flex ml-4 pt-10 hidden" id="div-oab">
                                <input type="radio" class="form-radio h-5 w-5 text-gray-600" id="oab">
                                <label class="flex uppercase tracking-wide text-grey-darker text-xs font-bold ml-2 pt-1" for="oab">
                                    NAO POSSUO OAB
                                </label>
                            </div>
                            <div class="w-1/2 px-3 mb-6 md:mb-0" id="div-periodo" >
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="periodo-atual">
                                    Periodo Atual
                                </label>
                                <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="periodo-atual">
                                    <option value="0">Selecione Área</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="3">4</option>
                                    <option value="3">5</option>
                                    <option value="3">6</option>
                                    <option value="3">7</option>
                                    <option value="3">8</option>
                                    <option value="3">9</option>
                                    <option value="3">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cep">
                                    Experiências
                                </label>
                                <div class="flex">
                                    <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cep" placeholder="Exp.: 1 Ano como estagiario de advocacia">

                                </div>
                            </div>
                        </div>
                        <div class="w-full flex items-end justify-between">
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-blue-800" id="btn-2" onclick="backTwo()">Anterior</button>
                            <button class="border-2 rounded border-green-600 bg-green-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-green-800">ALTERAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>

        </div>
    </div>
    </div>
</body>
<script>
    function backOne() {
        document.getElementById("form-1").classList.remove("hidden");
        document.getElementById("form-2").classList.add("hidden");
    }

    function backTwo() {
        document.getElementById("form-2").classList.remove("hidden");
        document.getElementById("form-3").classList.add("hidden");
    }

    function nextTwo() {
        document.getElementById("form-2").classList.remove("hidden");
        document.getElementById("form-1").classList.add("hidden");
    }

    function nextThree() {
        document.getElementById("form-3").classList.remove("hidden");
        document.getElementById("form-2").classList.add("hidden");

    }
</script>

</html>