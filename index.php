<?php
    /*
        Dobbiamo creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.

        Stack:
            Html, CSS, VueJS (importato tramite CDN), axios, PHP

        Consigli:
            Nello svolgere l’esercizio seguite un approccio graduale.
            Prima assicuratevi che la vostra pagina index.php (il vostro front-end) riesca a comunicare
            correttamente con il vostro script PHP (le vostre “API”).
            Solo a questo punto sarà utile passare alla lettura della lista da un file JSON.

        Bonus:
            Al click su un disco, recuperare e mostrare i dati del disco selezionato.
    */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./styles/style.css">
        <title>Dischi</title>
    </head>
    <body>
        <script src="https://unpkg.com/vue@3/dist/vue.global.js">
            // Vue.js CDN
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js">
            // Axios Library CDN
        </script>

        <div id="app">

            <header class="d-flex align-items-center px-5 py-3 m-0">
                <i class="fa-brands fa-spotify"></i>
            </header>

            <main class="pt-5">
                <div class="d-flex container">
                    <div class="d-flex flex-wrap justify-content-between m-auto my_dischi-container">
                        <!-- SINGLE CARD -->
                            <div class="card text-center mb-5" v-for="disco in dischi">
                                <img :src="disco.poster" class="card-img-top" :alt="disco.title">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ disco.title }}
                                    </h5>
                                    <p class="card-text my_author">
                                        {{ disco.author }}
                                    </p>
                                    <p class="card-text my_year">
                                        {{ disco.year }}
                                    </p>
                                </div>
                            </div>
                        <!-- /SINGLE CARD -->
                    </div>
                </div>
            </main>
        </div>

        <script src="./script/main.js">
            // script.js custom
        </script>
    </body>
</html>