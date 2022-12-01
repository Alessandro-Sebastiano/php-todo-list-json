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
                    <div v-for="(todo, index) in tasksList" class="task">
                        <p @click="select(index)" :class="todo.done ? 'done' : ''">{{todo.text}}</p>
                        <button @click="removeTask(index)">Delete</button>
                    </div>
                </div>
                <div class="input-task">
                    <input type="text" name=newTask placeholder="New Task" v-model="newTask">
                    <button @click="addNewTask()">Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/app.js"></script>

</body>

</html>