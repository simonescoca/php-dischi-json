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
            <!-- Vue.js App -->
        </div>

        <script src="./script/main.js">
            // script.js custom
        </script>
    </body>
</html>