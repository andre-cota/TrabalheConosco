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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/jquery.mask.js"></script>
    <title>Trabalhe Conosco - JHCG</title>
</head>
<style>
    html {
        font-family: 'Roboto', sans-serif;
    }

    .onlyread {
        width: 99%;
    }
</style>

<body>
    <div class="flex justify-center content-center mx-auto bg-green-700 p-4">
        <div id="alert" class="z-50 bg-red-300 border-t-4 border-red-700 rounded-b text-red-700 px-4 py-3 shadow-md my-2 w-1/4 absolute ml-4 left-0" role="alert" style="display: none;">
            <div class="flex">
                <svg class="h-6 w-6 mr-4 mt-2" fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <div>
                    <p class="font-bold">Erro</p>
                    <p class="text-sm"> Preencha todos os campos</p>
                </div>
            </div>
        </div>
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
                                            <div class="w-0 bg-green-300 py-1 rounded duration-300" id="prog-bar-2" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center duration-400" id="prog-dot-2">
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
                                            <div class="w-0 bg-green-300 py-1 rounded duration-300	" id="prog-bar-3" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                    <div class="w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center duration-400" id="prog-dot-3">
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
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-blue-800" id="btn-1" onclick="nextTwo()">Próximo</button>
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
                                    <option value="1">Juridico</option>
                                    <option value="2">Tecnologia</option>
                                    <option value="3">Administrativo</option>
                                </select>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cargo">
                                    Cargo
                                </label>
                                <select class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cargo">
                                    <option value="">Selecione um Cargo</option>
                                    <option value="clt">Advogado</option>
                                    <option value="estagio">Estagiario</option>
                                    <option value="outros">Outros</option>
                                </select>
                            </div>
                        </div>
                        <div class="-mx-3 md:flex mb-6">
                            <div class="w-full px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="cep">
                                    CEP
                                </label>
                                <input type="text" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="cep" placeholder="12345-678" onkeyup="searchCep(this)">
                            </div>
                        </div>
                        <div class="mb-6 grid grid-cols-1 sm:grid-cols-2">
                            <input type="text" class="appearance-none block bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 onlyread" id="logradouro" name="logradouro" placeholder="Rua" disabled>
                            <input type="text" class="appearance-none block bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 onlyread right-0" id="bairro" name="bairro" placeholder="Bairro" disabled>
                            <input type="text" class="appearance-none block bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 onlyread" placeholder="Cidade" id="cidade" name="cidade" disabled>
                            <input type="text" class="appearance-none block bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 onlyread right-0" placeholder="Estado" id="estado" name="estado" disabled>
                        </div>
                        <div class="w-full flex items-end justify-between">
                            <button class="border-2 rounded border-red-600 bg-red-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-red-800" id="btn-2" onclick="backOne()">Anterior</button>
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-blue-800" id="btn-3" onclick="nextThree()">Proximo</button>
                        </div>
                    </div>
                    <!-- FOMULARIO 3 -->
                    <div id="alertCurso" class="z-50 bg-red-300 border-t-4 border-red-700 rounded-b text-red-700 px-4 py-3 shadow-md my-2 w-1/4 absolute ml-4 left-0" role="alert" style="display: none;">
                        <div class="flex">
                            <svg class="h-6 w-6 mr-4 mt-2" fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <div>
                                <p class="font-bold">Erro</p>
                                <p class="text-sm"> Informe ao menos um curso</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 hidden" id="form-3">
                        <div class="-mx-3 md:flex mb-6 hidden" id="div_oab">
                            <div class="w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="ano-formacao">
                                    OAB
                                </label>
                                <input type="number" min="1" max="10" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="oab_number" placeholder="123456">
                            </div>
                            <div class="w-1/2 -mx-3 md:flex ml-4 hidden" id="div-oab">
                                <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700"> Não Possuo OAB</span>
                                </label>
                            </div>
                        </div>
                        <div class="border p-8 rounded">
                            <div class="-mx-3 md:flex mb-6">
                                <h2 class="underline font-bold">Formacao Academica</h2>
                            </div>
                            <div id="formacao_academica">
                                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-faculdade1">
                                                Instituição
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-faculdade1" type="text" placeholder="Instituto/Centro Educacional/Universidade">
                                        </div>
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-curso1">
                                                Curso
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-curso1" type="text" placeholder="Exp.: Direito">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-ano-inicio1">
                                                Ano de inicio
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="academy-ano-inicio1" type="date">
                                        </div>
                                        <div class="w-1/2 px-3 mb-6 md:mb-0" id="div-periodo">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-nivel1">
                                                Nível
                                            </label>
                                            <select type="number" min="1" max="10" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-nivel1">
                                                <option value="0">Selecione o nivel</option>
                                                <option value="1">Tecnico</option>
                                                <option value="2">Tecnólogo</option>
                                                <option value="3">Bacharelado</option>
                                                <option value="4">Licenciatura</option>
                                                <option value="5">Mestrado</option>
                                                <option value="6">Doutorado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6">

                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="ano-formacao1">
                                                Ano de formação
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="ano-formacao1" type="date">
                                        </div>
                                        <div class="w-1/2 -mx-3 md:flex ml-4 hidden" id="div-oab">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Cursando</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-2 mt-2 hover:bg-blue-800 " id="addAcademy"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="h-4 w-4 svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg></button>
                        </div>
                        <div class="border p-8 my-4 rounded">
                            <div class="-mx-3 md:flex mb-6">
                                <h2 class="underline font-bold">Experiência</h2>
                            </div>
                            <div id="experience">
                                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-empresa1">
                                                Empresa
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="exp-empresa1" type="text" placeholder="Companhia/Empresa">
                                        </div>
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-cargo1">
                                                Cargo
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="exp-cargo1" type="text" placeholder="Exp.: Advogado">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-desc1">
                                                Descrição do Cargo
                                            </label>
                                            <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded p-2 h-32 resize-none" id="exp-desc1"></textarea>
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-inicio1">
                                                Ano de inicio
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="ano-inicio1" type="date">
                                        </div>
                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-saida1">
                                                Ano de saida
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="exp-ano-saida1" type="date">
                                        </div>
                                        <div class="w-1/2 -mx-3 md:flex ml-4 hidden" id="div-oab">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Trabalho Atual</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="border-2 rounded border-blue-600 bg-blue-600 text-white py-2 px-2 mt-2 hover:bg-blue-800 " id="addExperience"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="h-4 w-4 svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path>
                                </svg></button>
                        </div>
                        <div>
                            <label for="image-input" class="flex text-center w-1/2 px-4 my-2">Envie seu curriculo:</label>
                            <input id="image-input" name="image-input" type="file" value="Envie seu curriculo" class="mb-4 border-none">

                        </div>
                        <div class="w-full flex items-end justify-between">
                            <button class="border-2 rounded border-red-600 bg-red-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-red-800" id="btn-2" onclick="backTwo()">Anterior</button>
                            <button class="border-2 rounded border-green-600 bg-green-600 text-white py-2 px-4 mt-2 w-28 right-0 hover:bg-green-800 animate-bounce" onclick="sendForm()">Finalizar</button>
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
    $("#cep").mask("00.000-000");


    function backOne() {
        document.getElementById("form-1").classList.remove("hidden");
        document.getElementById("form-2").classList.add("hidden");
        document.getElementById("prog-bar-2").style.width = "0%";
        document.getElementById("prog-dot-2").className = "w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center";
        document.getElementById("prog-txt-2").className = "text-center text-gray-600 w-full";
    }

    function backTwo() {
        document.getElementById("form-2").classList.remove("hidden");
        document.getElementById("form-3").classList.add("hidden");
        document.getElementById("prog-bar-3").style.width = "0%";
        document.getElementById("prog-dot-3").className = "w-10 h-10 mx-auto bg-white border-2 border-gray-200 rounded-full text-lg text-white flex items-center";
        document.getElementById("prog-txt-3").className = "text-center text-gray-600 w-full";
    }

    function nextTwo() {
        if (document.getElementById("nome-completo").value == "" || document.getElementById("email").value == "" || document.getElementById("data-nasc").value == "") {
            showFailMessage();
        } else {
            document.getElementById("form-2").classList.remove("hidden");
            document.getElementById("form-1").classList.add("hidden");
            document.getElementById("prog-bar-2").style.width = "100%";
            document.getElementById("prog-dot-2").className = "w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center";
            document.getElementById("prog-txt-2").className = "text-center text-white w-full";
        }
    }

    function nextThree() {
        if (document.getElementById("area").value == "" || document.getElementById("cargo").value == "" || document.getElementById("cep").value == "") { 
            showFailMessage();
        } else {            
            if (document.getElementById("area").value == 1) {
                document.getElementById("div_oab").classList.remove("hidden");
            }
            document.getElementById("form-3").classList.remove("hidden");
            document.getElementById("form-2").classList.add("hidden");
            document.getElementById("prog-bar-3").style.width = "100%";
            document.getElementById("prog-dot-3").className = "w-10 h-10 mx-auto bg-green-500 rounded-full text-lg text-white flex items-center";
            document.getElementById("prog-txt-3").className = "text-center text-white w-full";
        }

    }

    function sendForm() {
        if (document.getElementById("academy-faculdade1").value == "" || document.getElementById("academy-curso1").value == "" || document.getElementById("academy-ano-inicio1").value == "" || document.getElementById("academy-nivel1").value == "") { //Verifica se a formação academica esta preenchido
            showFailMessageCurso();
        } else {

        }

    }


    function searchCep(cep) {
        let obj = cep.value.replace('.', '');;
        obj = obj.replace('-', '');;
        fetch("http://viacep.com.br/ws/" + obj + "/json/")
            .then((response) => response.json())
            .then((cep) => {
                setInfo(cep);
            });
    }

    function setInfo(json) {
        document.getElementById("logradouro").value = json.logradouro;
        document.getElementById("bairro").value = json.bairro;
        document.getElementById("estado").value = json.uf;
        document.getElementById("cidade").value = json.localidade;
    }

    var identIdAcademy = 2;
    var identIdExperience = 2;

    document.getElementById("image-input").addEventListener("change", readFile);

    $("#addAcademy").on("click", () => {
        $("#formacao_academica").html($("#formacao_academica").html() + getTemplateAcademy(identIdAcademy));
        identIdAcademy++;
    })

    $("#addExperience").on("click", () => {
        $("#experience").html($("#experience").html() + getTemplateExperience(identIdExperience));
        identIdExperience++;
    })

    function removeAcademy(id) {
        $("#academy" + id).remove();
    }

    function removeExperience(id) {
        $("#experienceDiv" + id).remove();
    }

    $(document).on("load", () => {
        $("#alert").hide();
    })

    function showFailMessage() {
        $("#alert").show();
        $("#alert").delay(4000).hide();
    }

    function showFailMessageCurso() {
        $("#alertCurso").show();
        $("#alertCurso").delay(4000).hide();
    }




    function getTemplateAcademy(id) {
        return `<div class="bg-gray-100 p-4 rounded-lg mb-4" id="academy` + id + `">
                                <div class="-mx-3 md:flex mb-6 ">
                                    <div class="w-full px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-faculdade` + id + `">
                                            Instituição
                                        </label>
                                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-faculdade` + id + `" type="text" placeholder="Instituto/Centro Educacional/Universidade">
                                    </div>
                                    <div class="w-full px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-curso` + id + `">
                                            Curso
                                        </label>
                                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-curso` + id + `" type="text" placeholder="Exp.: Direito">
                                    </div>
                                </div>
                                <div class="-mx-3 md:flex mb-6 ">
                                    <div class="w-1/2 px-3 mb-6 md:mb-0">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-ano-inicio` + id + `">
                                            Ano de Inicio
                                        </label>
                                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="academy-ano-inicio` + id + `" type="date">
                                    </div>
                                    <div class="w-1/2 px-3 mb-6 md:mb-0" id="div-periodo">
                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-nivel` + id + `">
                                            Nível
                                        </label>
                                        <select type="number" min="1" max="10" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="academy-nivel` + id + `">
                                            <option value="0">Selecione o nivel</option>
                                            <option value="1">Tecnico</option>
                                            <option value="2">Tecnólogo</option>
                                            <option value="3">Bacharelado</option>
                                            <option value="4">Licenciatura</option>
                                            <option value="5">Mestrado</option>
                                            <option value="6">Doutorado</option>
                                        </select>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6">

                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="academy-ano-formacao` + id + `">
                                                Ano de formação
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="academy-ano-formacao` + id + `" type="date">
                                        </div>
                                        <div class="w-1/2 -mx-3 md:flex ml-4 hidden" id="div-oab">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Cursando</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button class="border-2 rounded border-red-600 bg-red-600 text-white py-1 px-1 hover:bg-red-800" id="btnTrash" onclick="removeAcademy(` + id + `)"><svg version="1.1" id="Camada_1" class="h-5 w-5"focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve"><path d="M440.4,114.3L334.7,78.9l-3-18.6c-1.3-8.1-7.1-14.9-15.2-17.6L216,8.9c-8-2.7-16.8-0.8-22.6,4.9l-13.6,13L74.1-8.6	C66.4-11.2,58-7.2,55.5,0.3l-9.1,27.1C43.9,34.8,48.2,43,56,45.6l366.2,122.8c7.8,2.6,16.1-1.3,18.6-8.8l9.1-27.1	C452.4,125.1,448.2,116.9,440.4,114.3z M65.4,471.8c1.5,22.6,20.9,40.2,44.5,40.2h228.2c23.5,0,43-17.6,44.5-40.2l19.7-302.6H45.7 L65.4,471.8z"/></svg></button>
                                </div>`;
    }

    function getTemplateExperience(id) {
        return `<div class="bg-gray-100 p-4 rounded-lg mb-4" id="experienceDiv` + id + `">
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-empresa` + id + `">
                                                Empresa
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="exp-empresa` + id + `" type="text" placeholder="Companhia/Empresa">
                                        </div>
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-cargo` + id + `">
                                                Cargo
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="exp-cargo` + id + `" type="text" placeholder="Exp.: Advogado">
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6 ">
                                        <div class="w-full px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-desc` + id + `">
                                                Descrição do Cargo
                                            </label>
                                            <textarea class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded p-2 h-32 resize-none" id="exp-desc` + id + `" ></textarea>
                                        </div>
                                    </div>
                                    <div class="-mx-3 md:flex mb-6">
                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-inicio` + id + `">
                                                Ano de inicio
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="ano-inicio` + id + `" type="date">
                                        </div>
                                        <div class="w-1/2 px-3 mb-6 md:mb-0">
                                            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="exp-ano-saida` + id + `">
                                                Ano de saida
                                            </label>
                                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4" id="exp-ano-saida` + id + `" type="date">
                                        </div>
                                        <div class="w-1/2 -mx-3 md:flex ml-4 hidden" id="div-oab">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600"><span class="ml-2 text-gray-700">Trabalho Atual</span>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="border-2 rounded border-red-600 bg-red-600 text-white py-1 px-1 hover:bg-red-800" id="btnTrash" onclick="removeExperience(` + id + `)"><svg version="1.1" id="Camada_1" class="h-5 w-5"focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve"><path d="M440.4,114.3L334.7,78.9l-3-18.6c-1.3-8.1-7.1-14.9-15.2-17.6L216,8.9c-8-2.7-16.8-0.8-22.6,4.9l-13.6,13L74.1-8.6	C66.4-11.2,58-7.2,55.5,0.3l-9.1,27.1C43.9,34.8,48.2,43,56,45.6l366.2,122.8c7.8,2.6,16.1-1.3,18.6-8.8l9.1-27.1	C452.4,125.1,448.2,116.9,440.4,114.3z M65.4,471.8c1.5,22.6,20.9,40.2,44.5,40.2h228.2c23.5,0,43-17.6,44.5-40.2l19.7-302.6H45.7 L65.4,471.8z"/></svg></button>
                                </div>`;
    }

    $("#btnTrash").hover(function() {
        $(this).html('<svg class="h-5 w-4" version="1.1" id="Camada_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve"><path d="M417.2,111.1L306.9,95.3l-6.3-17.8c-2.7-7.7-9.7-13.4-18.1-14.6l-105.1-15c-8.4-1.2-16.6,2.2-21.4,8.9l-11,15.3L34.8,56.4 c-8.1-1.2-15.6,4.2-16.7,12l-4,28.3c-1.1,7.8,4.6,15.1,12.7,16.2l382.4,54.7c8.1,1.2,15.6-4.2,16.7-12l4-28.3	C431,119.5,425.3,112.2,417.2,111.1z M65.4,471.8c1.5,22.6,20.9,40.2,44.5,40.2h228.2c23.5,0,43-17.6,44.5-40.2l19.7-302.6H45.7	L65.4,471.8z"/></svg>');
    }, function() {
        $(this).html('<svg class="h-5 w-4"focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve"> <path d="M417.1,83.6H305.7L297,66.9c-3.8-7.3-11.5-11.9-20-11.9H170.9c-8.4,0-16.2,4.6-19.9,11.9l-8.7,16.7H30.9 C22.7,83.6,16,90,16,97.8v28.6c0,7.9,6.7,14.3,14.9,14.3h386.3c8.2,0,14.9-6.4,14.9-14.3V97.8C432,90,425.3,83.6,417.1,83.6z M65.4,471.8c1.5,22.6,20.9,40.2,44.5,40.2h228.2c23.5,0,43-17.6,44.5-40.2l19.7-302.6H45.7L65.4,471.8z"/> </svg>');
    });
</script>

</html>