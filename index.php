<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP - TodoList</title>
</head>

<body>

    <div id="app">
        <div class="container">
            <div class="app-box">
                <h1>Todo List</h1>
                <div class="tasks-box">
                    <div class="task">
                        <p>test</p>
                        <button>Delete</button>
                    </div>
                </div>
                <div class="input-task">
                    <input type="text" name=newtask placeholder="New Task">
                    <button>Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/app.js"></script>

</body>

</html>