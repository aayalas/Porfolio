<?php include 'sentMail.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Referencia de la hoja de estilo de Css -->
        <!-- <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/title.css">
        <link rel="stylesheet" href="./css/about.css">
        <link rel="stylesheet" href="./css/skills.css">
        <link rel="stylesheet" href="./css/hobbies.css">
        <link rel="stylesheet" href="./css/academic.css">
        <link rel="stylesheet" href="./css/experience.css">        
        <link rel="stylesheet" href="./css/footer.css"> -->
        <link rel="stylesheet" href="./css/formcontato.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css"/>
        <link rel=”stylesheet” href=”./dist/output.css”>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- Fonte del Proyecto Raleway -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
        <link href="http://fonts.cdnfonts.com/css/neuropol-2" rel="stylesheet">               
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
        <title> My Portfolio</title>
    </head>
    <body>
        <!-- Sección del Menú  -->

            <section class="menu">

                <nav class="bg-white border-gray-200 dark:bg-gray-900">
                    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="/" class="flex items-center">
                        <img src="./assets/simple.svg" class="h-8 mr-3" alt="Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                    </a>
                    <div class="flex md:order-2">
                        <button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                          <span class="sr-only">Open main menu</span>
                          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                      </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
                      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#sobre-mi" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About me</a>
                        </li>
                        <li>
                            <a href="#skills" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Skills</a>
                        </li>
                        <!-- <li>
                            <a href="#hobbies" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Hobbies</a>
                        </li> -->
                        <li>
                            <a href="#formacion" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Education</a>
                        </li>
                        <li>
                            <a href="#xp" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Projects</a>
                        </li>
                        <li>
                            <a href="#contacto" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">alex.ayalas@gmail.com</a>
                        </li>
                      </ul>
                    </div>
                    </div>
                </nav>
                  

                <!-- <header class="menu__header">
                    <img src="./assets/coding.svg" width="44px">
                    <h3 class="menu__title">Alejandro Ayala Schmitt</h3> 
                </header>       
                    <nav>
                        <ul class="menu__list">
                            <li class="menu__list__item"><a href="#sobre-mi">Sobre mi</a></li>
                            <li class="menu__list__item"><a href="#skills">Skills</a></li>
                            <li class="menu__list__item"><a href="#hobbies">Hobbies</a></li>
                            <li class="menu__list__item"><a href="#formacion">Formación</a></li>
                            <li class="menu__list__item"><a href="#xp">Proyectos</a></li>
                            <li class="menu__list__item"><a href="#contacto">alex.ayalas@gmail.com</a></li>
                        </ul>
                        <li class="menu__list__item__contato"><a href="#contacto">alex.ayalas@gmail.com</a></li>
                    </nav> -->
   
            </section>

            <!-- Sección del Header/Title/Hero -->
                <section class="bg-white dark:bg-gray-900">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                        <div class="mr-auto place-self-center lg:col-span-7">
                            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Hi !, my name is Alejandro, an enthusiast Programmer / Coder / Web Developer.</h1>
                            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">I have participated and concluded the training at Oracle ONE Project and Alura Latam. ALUMNI 2022.</p>
                            <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-slate-700 rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:text-white dark:focus:ring-slate-900">
                                Learn more
                                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </a>
                            <a href="#sobre-mi" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-center text-gray-900 border border-blue-700 rounded-lg hover:bg-blue-700 hover:text-white focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-blue-700 dark:focus:ring-gray-800">
                                About me
                            </a> 
                        </div>
                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img style="border-radius: 100%" src="./assets/profile.jpeg" alt="mockup">
                        </div>
               
                    </div>
                    <div class="px-4 mx-auto text-center md:max-w-screen-md lg:max-w-screen-lg lg:px-36">
                        <!-- <span class="font-semibold text-gray-400">Follow me at:</span> -->
                        <div class="flex flex-wrap justify-center items-center mt-8 text-gray-500 sm:justify-between">
                            <a href="https://github.com/aayalas" target="_blank" class="mr-5 mb-20 pb-10 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                                <i class="fa-brands fa-github fa-2xl"></i>                        
                            </a>
                            <a href="https://www.linkedin.com/in/alejandroayalas" target="_blank" class="mr-5 mb-20 pb-10 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                                <i class="fa-brands fa-linkedin fa-2xl"></i>
                            </a>
                            <a href="https://instagram.com/alexayalaschmitt" target="_blank" class="mr-5 mb-20 pb-10 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                                <i class="fa-brands fa-instagram fa-2xl"></i>                                                  
                            </a>
                            <a href="./assets/Curriculum Actual.pdf" target="_blank" class="mr-5 mb-20 pb-10 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                                <i class="fa-regular fa-file-pdf fa-2xl"></i>                                         
                            </a>
                            <a href="./assets/Current Resume.pdf" target="_blank" class="mr-5 mb-20 pb-10 lg:mb-0 hover:text-gray-800 dark:hover:text-gray-400">
                                <i class="fa-regular fa-file-pdf fa-2xl"></i>                   
                            </a>           
                        </div>
                    </div>  
                </section>


                <!-- <div class="title__div">
                    <img class="title__profile" src="./assets/profile.jpeg" width="368px">
                    <div class="title__container">
                        <h2 class="title__bio">Hola, mi nombre es Alejandro Ayala y construyo paginas web</h2>
                        <h3 class="title__subsection">Actualmente estoy participando del proyecto Oracle ONE en Alura Latam.</h3>
                        <ul class="title__network"> -->
                            <!-- Pon los enlaces de tus redes sociales favoritas -->
                            <!-- <li class="title__network__item"><a href="https://github.com/aayalas" target="_blank">Github <img src="assets\arrow.png"> </a></li>
                            <li class="title__network__item"><a href="https://www.linkedin.com/in/alejandroayalas" target="_blank">Linkedin <img src="assets\arrow.png"></a></li>
                            <li class="title__network__item"><a href="https://instagram.com/alexayalaschmitt" target="_blank">Instagram <img src="assets\arrow.png"></a></li>
                            <li class="title__network__item"><a href="./assets/Curriculum Actual.pdf" target="_blank">CV<img src="assets\arrow.png"></a></li>
                            <li class="title__network__item"><a href="./assets/Current Resume.pdf" target="_blank">Resume<img src="assets\arrow.png"></a></li>
                        </ul>
                    </div>
                </div> -->

        
            <!-- Sección sobre mi -->

            <section id="sobre-mi" class="bg-white dark:bg-gray-900">
                    <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
                        <figure class="max-w-screen-md mx-auto">
                            <h3 class="max-w-2xl mt-10 mb-4 text-2xl font-extrabold tracking-tight leading-none md:text-2xl xl:text-3xl dark:text-white">About me</h3>
                            <svg class="h-12 mx-auto mb-3 text-gray-400 dark:text-gray-600" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/>
                            </svg> 
                            <blockquote>
                                <p class="text-2xl mb-8 font-medium text-gray-900 dark:text-white">"I have extensive experience as a Systems Administrator | IT Manager | Help Desk Support | Troubleshooting | Hardware Corrective and Preventive Maintenance | Data Backup and Recovery | Web Administrator."</p>
                                <p class="text-2xl mb-8 font-medium text-gray-900 dark:text-white">"I have participated and concluded the training at Oracle ONE (Oracle Next Education) Program and Alura LATAM | ALUMIN 2022, Front End Jr - Studied: HTML5 | CSS3 | JavaScript | JAVA  | Python | Flutter  | PHP."</p>
                                <p class="text-2xl mb-8 font-medium text-gray-900 dark:text-white">"I'm looking to get more experience as a developer with React.js frameworks like Next.js, Python Django + React.js, and mobile development like Flutter, among others."</p>
                            </blockquote>
                            <figcaption class="flex items-center justify-center mt-6 space-x-3">
                                <!-- <img class="w-6 h-6 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="profile picture" -->
                                <div class="flex items-center divide-x-2 divide-gray-500 dark:divide-gray-700">
                                    <div class="pr-3 font-medium text-gray-900 dark:text-white">Alejandro Ayala Schmitt.</div>
                                    <!-- <div class="pl-3 text-sm font-light text-gray-500 dark:text-gray-400">CEO at Google</div> -->
                                </div>
                            </figcaption>
                        </figure>
                    </div>
            </section>    
                <!-- <div class="about__container">
                    <h3 class="about__title">Sobre mi</h3>
                    <p class="about__paragraph">Tengo amplia experiencia como Administrador de Sistemas | Gerente de TI | Soporte técnico | Solución de problemas | Mantenimiento Correctivo y Preventivo de Hardware | Copia de seguridad y recuperación de datos | Administrador web |</p>
                    <p class="about__paragraph">Actualmente estoy en el Programa Alura LATAM + Oracle ONE (Oracle Next Education) | Desarrollador Front End Jr en Entrenamiento - Estudiando | HTML5 - 90% | CSS3 - 90% | JavaScript - 50% | JAVA - 10% | Python - 10% | Flutter - 50% | PHP - 20% </p>
                    <p class="about__paragraph">Estoy buscando obtener más experiencia como desarrollador Frontend Jr con React.js frameworks como Next.js, Python Django + React.js y desarrollo móvil como Flutter.</p> -->
                    <!-- Si quieres, pon tú firma acá! -->
                    <!--img src="assets\signature.png" -->
                <!-- </div>
            </section> -->

            <!-- Sección de Skills -->
            <section id="skills" class="bg-white dark:bg-gray-900">                
                <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                    <div class="max-w-2xl mx-auto text-center">
                      <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Skills
                      </h2>
                      <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                        <!-- Crafted with skill and care to help our clients grow their business! -->
                      </p>
                    </div>
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex justify-between mt-12 text-center sm:mt-16 gap-x-20 gap-y-12">
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\html.png" alt="HTML">
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\css_icon.png" alt="CSS3">
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\js_icon.png" alt="Javascript">
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\nodejs_icon.png" alt="NodeJS">
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\php_icon.png" alt="PHP">
                                </div>
                            </div>
                            <div class="p-4 md:w-1/3">
                                <div>
                                  <img src="assets\python_icon.png" alt="Python | Django">
                                </div>
                            </div>      
                        </div>
                    </div> 
                </div>




                    <!-- <div class="skills__line">
                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"><img src="assets\htlm.png"></li>
                                <li class="skills__name"> HTML 5</li>
                            </ul>
                        </div>

                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"> <img src="assets\js_icon.png" alt=""></li>
                                <li class="skills__name">Javascript</li>
                            </ul>
                        </div>

                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"> <img src="assets\php_icon.png" alt=""></li>
                                <li class="skills__name">PHP</li>
                            </ul>
                        </div>

                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"><img src="assets\nodejs_icon.png" alt=""></li>
                                <li class="skills__name">Node JS</li>
                            </ul>
                        </div>

                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"> <img src="assets\react_icon.png" alt=""> </li>
                                <li class="skills__name">React</li>
                            </ul>
                        </div>

                        <div class="skills__box">
                            <ul>
                                <li class="skills__img"> <img src="assets\css_icon.png" alt=""> </li>
                                <li class="skills__name">CSS</li>
                            </ul>
                        </div> -->
                <!-- </div> -->
            </section>

            <!-- Sección de Hobbies -->
            <!-- <section class="hobbies" id="hobbies">
                <h3 class="hobbies__title">Hobbies</h3>
                    <div class="hobbies__line"> -->
                        <!--div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"><img src="assets\skate_icon.png"></li>
                                <li class="hobbies__name"> Patinaje</li>
                            </ul>
                        </div -->

                        <!-- div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"> <img src="assets\guitar_icon.png" alt=""></li>
                                <li class="hobbies__name">Tocar bajo</li>
                            </ul>
                        </div -->

                        <!-- <div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"> <img src="assets\headphones_icon.png" alt=""></li>
                                <li class="hobbies__name">Oir música</li>
                            </ul>
                        </div>

                        <div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"><img src="assets\tv_icon.png" alt=""></li>
                                <li class="hobbies__name">Ver séries</li>
                            </ul>
                        </div>

                        <div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"> <img src="assets\forkspoon_icon.png" alt=""> </li>
                                <li class="hobbies__name">Cocinar</li>
                            </ul>
                        </div>

                        <div class="hobbies__box">
                            <ul>
                                <li class="hobbies__img"> <img src="assets\camera_icon.png" alt=""> </li>
                                <li class="hobbies__name">Tomar fotos</li>
                            </ul>
                        </div>
                </div>
            </section> -->

            <!-- Sección de Formación académica -->
              <section class="bg-white dark:bg-gray-900 antialiased" id="formacion">
                  <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                    <div class="max-w-2xl mx-auto text-center">
                      <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Education
                      </h2>
                      <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">

                      </p>
                    </div> 
                    <div class="container px-5 py-24 mx-auto">
                      <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="p-4 md:w-1/3">
                          <div>
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="./assets/tecnm_logo.png" alt="">
                            <div class="p-6">
                              <!-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2> -->
                              <h1 class="title-font text-lg font-medium mb-3 text-slate-800 dark:text-white"">Information Technology</h1>
                                <p class="leading-relaxed mb-3 text-slate-800 dark:text-white">2001 - TECNM at Chihuahua, Mexico</p>
                              <div class="flex items-center flex-wrap ">
                                <!-- <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a> -->
                                <!-- <span class="text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                  </svg>1.2K
                                </span>
                                <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                  </svg>6
                                </span> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                          <div>
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="./assets/ttcollege_logo.png" alt="">
                            <div class="p-6">
                              <!-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2> -->
                              <h1 class="title-font text-lg font-medium mb-3 text-slate-800 dark:text-white"">CompTIA A+ Tech Training | Certification</h1>
                              <p class="leading-relaxed mb-3 text-slate-800 dark:text-white">2008 - TTC at Salt Lake City, Utah</p>
                              <div class="flex items-center flex-wrap">
                                <!-- <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a> -->
                                <!-- <span class="text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                  </svg>1.2K
                                </span>
                                <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                  </svg>6
                                </span> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="p-4 md:w-1/3">
                          <div>
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="./assets/OracleONE.png" alt="Oracle ONE Education Program | Alura LATAM">
                            <div class="p-6">
                              <!-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-500 mb-1">CATEGORY</h2> -->
                              <h1 class="title-font text-lg font-medium mb-3 text-slate-800 dark:text-white"">Oracle ONE (Oracle Next Education) Program + Alura LATAM Training</h1>
                              <p class="leading-relaxed mb-3 text-slate-800 dark:text-white">ALUMNI 2022 - Online Training Course at ALURA</p>
                              <div class="flex items-center flex-wrap ">
                                <!-- <a class="text-indigo-400 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                  </svg>
                                </a> -->
                                <!-- <span class="text-gray-500 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-800">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                  </svg>1.2K
                                </span>
                                <span class="text-gray-500 inline-flex items-center leading-none text-sm">
                                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                  </svg>6
                                </span> -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>   
            </section>

                <!-- <h2 class="academic__title" >Formación académica</h2>
                <div class="academic__courses">
                    <div class="academic__courses__box">
                        <ul class="academic__courses__list"> -->
                            <!-- Pon el logotipo de la institución de formación -->
                            <!-- <li class="academic__courses__item__img"><img src="./assets/tecnm_logo.png"></li>
                            <li class="academic__courses__item__title"><h4>Sistemas</h4></li>
                            <li class="academic__courses__item__subtitle"><p>2001 - TECNM</p></li>
                        </ul>
                    </div>
                    <div class="academic__courses__box">
                        <ul class="academic__courses__list"> -->
                            <!--Pon el logotipo de la institución de formación -->
                            <!-- <li class="academic__courses__item__img"><img src="./assets/ttcollege_logo.png"></li>
                            <li class="academic__courses__item__title"><h4>Formación en A+ Tech</h4></li>
                            <li class="academic__courses__item__subtitle"><p>2008 - TTC</p></li>
                        </ul>
                    </div>
                    <div class="academic__courses__box">
                        <ul class="academic__courses__list"> -->
                            <!-- Pon el logotipo de la institución de formación -->
                            <!-- <li class="academic__courses__item__img"><img src="./assets/alura_logo.png"></li>
                            <li class="academic__courses__item__title"><h4>Formación en Front-End Jr</h4></li>
                            <li class="academic__courses__item__subtitle"><p>2022 - En curso - Alura</p></li>
                        </ul>
                    </div>
                </div> -->


            <!-- Sección de Experiencia Profesional/Proyectos-->
            <section class="bg-white dark:bg-gray-900 antialiased" id="xp">
                    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                      <div class="max-w-2xl mx-auto text-center">
                        <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                          Projects
                        </h2>
                        <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                          Crafted with skill and care to help our clients grow their business!
                        </p>
                      </div>                  
                      <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                        <div class="space-y-4">
                          <span
                            class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            Alphabet Inc.
                          </span>
                          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                            Official website
                          </h3>
                          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                            Flowbite helps you connect with friends, family and communities of people who share your interests.
                          </p>
                          <a href="#" title=""
                            class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button">
                            View case study
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                            </svg>
                          </a>
                        </div>
                  
                        <div class="space-y-4">
                          <span
                            class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            Microsoft Corp.
                          </span>
                          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                            Management system
                          </h3>
                          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                            Flowbite helps you connect with friends, family and communities of people who share your interests.
                          </p>
                          <a href="#" title=""
                            class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button">
                            View case study
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                            </svg>
                          </a>
                        </div>
                  
                        <div class="space-y-4">
                          <span
                            class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                            Adobe Inc.
                          </span>
                          <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                            Logo design
                          </h3>
                          <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                            Flowbite helps you connect with friends, family and communities of people who share your interests.
                          </p>
                          <a href="#" title=""
                            class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center  focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                            role="button">
                            View case study
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                              fill="currentColor">
                              <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                            </svg>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>
                <!-- <h2 class="experience__section__title" >Experiencia Profissional</h2>
                <div class="experience__box"> -->
                    <!-- Pon el logotipo/captura de pantalla de tu proyecto -->
                    <!-- <img class="experience__img" src="assets\decod_print.png">
                    <div class="experience__info">
                        <h2 class="experience__title">Encriptador de texto</h2>
                        <h3 class="experience__text">Challenge Alura Codificador</h3>
                            <div class="experience__description"> -->
                                <!-- Pon el enlace del proyecto en Github o GithubPages -->
                                    <!-- <span class="experience__repo"><a href="https://github.com/alura-challenges/challenge-one-encriptador-latam"><button class="experiencia__boton--repo">Repositório</button></a></span>
                                    <span class="experience__demo"><a href="https://github.com/aayalas/Encriptador-de-Texto"><button class="experience__boton--demo">Ver demo</button></a></span>
                            </div>
                    </div>
                </div>  

                <div class="experiences__box"> -->
                    <!-- Pon el logotipo/captura de pantalla de tu proyecto -->
                    <!-- <img class="experience__img" src="assets\forca_print.png">
                    <div class="experience__info">
                        <h2 class="experience__title">Juego creado con HTML y <br>JavaScript</h2>
                        <h3 class="experience__text">Challenge Oracle </h3>
                            <div class="experience__description"> -->
                                <!-- Pon el enlace del proyecto en Github o GithubPages -->
                                    <!-- <span class="experience__repo"><a href="https://github.com/alura-challenges/challenge-one-juego-ahorcado"><button class="experiencia__boton--repo">Repositório</button></a></span>
                                    <span class="experience__demo"><a href="#"><button class="experience__boton--demo">Ver demo</button></a></span>
                            </div>
                    </div>
                </div>   -->

                <!-- <div class="experience__box"> -->
                    <!-- Pon el logotipo/captura de pantalla de tu proyecto -->
                    <!-- <img class="experience__img" src="assets\secretcode_print.png">
                    <div class="experience__info">
                        <h2 class="experience__title">Encriptador de texto</h2>
                        <h3 class="experience__text">Challenge Oracle </h3>
                            <div class="experience__description"> -->
                                    <!-- Pon el enlace del proyecto en Github o GithubPages -->
                                    <!-- <span class="experience__repo"><a href="https://github.com/alura-challenges/challenge-one-encriptador-latam"><button class="experiencia__boton--repo">Repositório</button></a></span>
                                    <span class="experience__demo"><a href="https://aayalas.github.io/Encriptador-de-Texto/"><button class="experience__boton--demo">Ver demo</button></a></span>
                            </div>
                    </div>
                </div>  

                <div class="experiences__box">
                    <img class="experience__img" src="assets\forca2_print.png">
                    <div class="experience__info">
                    <h2 class="experience__title">Juego creado con HTML, CSS y <br>JavaScript</h2>
                        <h3 class="experience__text">Challenge Oracle </h3>
                            <div class="experience__description"> -->
                                    <!-- Pon el enlace del proyecto en Github o GithubPages -->
                                    <!-- <span class="experience__repo"><a href="https://github.com/alura-challenges/challenge-one-juego-ahorcado"><button class="experiencia__boton--repo">Repositório</button></a></span>
                                    <span class="experience__demo"><a href="#"><button class="experience__boton--demo">Ver demo</button></a></span>
                            </div>
                </div>
                </div>   -->
            <!-- </section>  -->

            <!-- Sección de Contacto -->
            <section class="bg-white dark:bg-gray-900" id="contacto">
                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact</h2>
                        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue or some questions? Want to send a feedback? Need details? Let me know.</p>
                        <form class="space-y-8" novalidate id="contactform" name="form" action="" method="POST">
                            <div class="dark:text-white" id="errors">
                                <p  id="error-txt" style="display:none;">Your form submission contains errors.</p>
                            </div>
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your name *</label>
                                <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Name *" value="" required>
                            </div>
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email *</label>
                                <input type="email" id="mail" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@example.com *" required>
                            </div>
                            <div>
                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject *</label>
                                <input type="text" id="subject" name="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let me know how I can help you *" required>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message *</label>
                                <textarea id="message" name="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment... *"></textarea>
                            </div>
                            <!-- <div>
                              <p class="bg-white text-gray-800 dark:bg-gray-900 dark:text-white"></p> <?php echo $success;  ?>
                              <p class="bg-white text-gray-800 dark:bg-gray-900 dark:text-white"></p> <?php echo $failed;  ?>
                            </div> -->
                            <button type="submit" name="submit" id="contact-submit" data-submit="...Sending" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                            <button type="reset" name="reset" id="reset" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Clear</button>
                        </form>
                        <!-- <div id="response"></div> -->
                    </div>
                  </section>
                <!-- <div  class="formcontato__contacto">
                    <div class="formcontato--izquirda">
                        <img class="formcontato__img" src="assets\contact_image.png">
                    </div>
                    <div class="formcontato__text">
                        <h2 class="formcontato__title">Contacto</h2>
                        <h3 class="formcontato__subtext">¿Quieres contactarme?</h3>
                        <h3 class="formcontato__subtext">Complete el siguiente formulario y me pondré en contacto con usted lo antes posible. </h3>
                        <form novalidate class="formcontato__form" id="contactform" name="form" action="" method="post">
                            <div id="errors">
                                <p id="error-txt" style="display:none;">Your form submission contains errors.</p>
                            </div>
                            <input class="formcontato__input" type="text" name="name" placeholder="Nombre *" value="">
                            <input class="formcontato__input__e"  id="mail" type="email" name="email" placeholder="E-mail *" value="">
                            <input class="formcontato__input"  type="text" name="subject" placeholder="Asunto *">
                            <textarea class="formcontato__textarea"  rows="5" cols="40" id="message" name="message" placeholder="Mensaje *"></textarea>
                            <button type="submit" class="formcontato__boton" value="submit">Enviar mensaje</button>
                        </form>
                    </div>
                </div> -->
            </section>

            <!-- Sección de Footer -->
            <section>
                <footer class="footer footer-center w-full p-4 bg-white text-gray-800 dark:bg-gray-900 dark:text-white">
                    <div class="text-center">
                    <p>
                        Copyright © 2023 - Made with <i style="color: red"class="fa-solid fa-heart"></i> by
                        <a class="font-semibold" href="mailto:alex.ayalas@gmail.com">Alejandro Ayala</a>
                    </p>
                    </div>
                </footer>
            </section>
    <!-- Script del documento JavaScript -->
    <!-- <script src="./node_modules/flowbite/dist/flowbite.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    <script>
        var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        
        // Change the icons inside the button based on previous settings
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }
        
        var themeToggleBtn = document.getElementById('theme-toggle');
        
        themeToggleBtn.addEventListener('click', function() {
        
            // toggle icons inside button
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');
        
            // if set via local storage previously
            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
        
            // if NOT set via local storage previously
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
            
        });
    </script>
    <script>
        $(document).ready(function () {

            $('#contactform').validate({
                errorElement: 'span',
                rules: {
                    name: {
                        required: true,
                        minlength: [2],
                    },
                email:"required",
                subject: {
                        required: true, 
                        minlength: [5],
                    },
                message: {
                        required: true, 
                        minlength: [25],
                    },
                },
                messages: {
                    name:"Enter you Name, field required *",
                    email:"Enter a valid email, field required *",
                    subject: "Enter a subject, field required *",
                    message:"Enter a message, field required *",
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element)
                    error.appendTo("div#errors");
                    $(element).parent().next('span').html(error);
                    $(element).addClass('invalid');
                }

            });


            if ($('#errors span').length) {
            $('#error-txt').show();
            }

        });
    </script>
    <!-- <script>
        function sendEmail() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let subject = document.getElementById("subject").value;
            let message = document.getElementById("message").value;
            let finalmessage = `Name : ${name} <br>  Email : ${email} <br> Subject : ${subject} <br>  Message : ${message} <br>`;
            Email.send({
                To : 'alex.ayalas@gmail.com',
                From : "you@isp.com",
                Subject : "You've got a new submission",
                Body : finalmessage
            }).then(
              message => alert(message)
            );
        }
    </script>  -->
    </script>
    </body>
</html>