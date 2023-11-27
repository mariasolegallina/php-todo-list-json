<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <link rel="stylesheet" href="./css/app.css" />
    <link rel="stylesheet" href="./css/app.css" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <div id="app">
        <section>
            <div class="container">
                <h1>{{title}}</h1>
            </div>
        </section>
        <section>
            <div class="container">
                <ul>
                    <li v-for="(item, i) in list" :key='i'>{{ item }}</li>
                </ul>
            </div>
        </section>
    </div>

    <script src="./js/app.js"></script>
</body>
</html>