<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- media query -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="./assets/css/library.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css'
        integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=='
        crossorigin='anonymous' />

    <!-- title -->
    <title>Dischi PHP VueJS</title>
</head>

<body>

    <div id="app" class="debug container-web-app" style="height: 100vh; position: relative">

        <!-- start: header -->
        <div class="debug" style="height: 100px;">
            include header here
        </div>
        <!-- end: header -->


        <!-- start: main -->
        <div class="debug flex padd-10" style="height: calc(100% - 100px); ">

            <!-- start: div witht the cards -->
            <div class="debug width-60 margin-auto flex flex-dir-row just-cont-evenly flex-wrap">

                <!-- start: single card (cycled with for) -->
                <div v-for="(disco, index) in data" :key="index" class="card mb-3 text-center card-disco"
                    style="width: calc(100% / 3 - 1%);">

                    <img :src="disco.poster" class=" margin-auto width-70" :alt="disco.title">
                    <div class="card-body">

                        <h5 class="card-title text-bold">
                            {{ disco.title}}
                        </h5>

                        <span>
                            {{ disco.author }}
                        </span> <br>

                        <span class="text-bold">
                            {{ disco.year }}
                        </span>

                    </div>
                </div>
                <!-- end: single card (cycled with for) -->

            </div>
            <!-- start: div witht the cards -->

            <!-- start: div in position relative with disc info -->
            <div class="debug col-white info-disco">

                <div class="debug flex flex-dir-col just-cont-center padd-10 col-white"
                    style="height: 80px; align-items: flex-end;">
                    <i class="fa-regular fa-rectangle-xmark col-white fa-2x"></i>
                </div>

                <div class="debug flex flex-dir-col align-it-center just-cont-center"
                    style="height: calc(100% - 80px );">
                    <div class="card text-center margin-auto" style="width: calc(100% / 3 - 1%);">

                        <img src="https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg"
                            class=" margin-auto width-70" alt="New Jersey">
                        <div class="card-body">

                            <h5 class="card-title text-bold">
                                New Jersey
                            </h5>

                            <span>
                                Bon Jovi
                            </span> <br>

                            <span class="text-bold">
                                1988
                            </span>

                        </div>
                    </div>
                </div>

            </div>
            <!-- end: div in position relative with disc info -->

        </div>
        <!-- end: main -->

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