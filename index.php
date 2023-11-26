<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="./css/app.css" />
</head>

<body>
    <div id="app">
        <section>
            <div class="container">
                <h1>{{title}}</h1>
            </div>
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