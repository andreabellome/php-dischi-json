<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- media query -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/library.css">

    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />

    <!-- title -->
    <title>Dischi PHP VueJS</title>
</head>

<body>

    <div id="app" class="debug">
        <h1>Lista spesa</h1>

        <div v-for="(elem, index) in data" :key="index">
            {{ elem.title }}
        </div>

        <!-- <div>
            <ul>
                <li v-for="(elem,index) in data" :key="index">
                    {{ elem.typo }}
                </li>
            </ul>
        </div>

        <input type="text" v-model="nuovoDato" @keyUp.enter="aggiungiDato"> -->

    </div>


    <!-- VueJS with CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios with CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- bootstrap -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'
        integrity='sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=='
        crossorigin='anonymous'></script>

    <!-- JS files -->
    <script src="main.js"></script>

</body>

</html>