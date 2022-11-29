<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- link bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- link style -->
    <link rel="stylesheet" href="style.css">
    <!-- link axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <main id="app">
        <div class="container">
            <h1 class="text-center">ToDoList</h1>

            <!-- new todo -->
            <input type="text" class="form-control-lg" v-model="newToDo">
            <button class="btn btn-secondary" @click="addNewToDo">Add</button>
            <!-- /new todo -->

            <!-- todolist -->
            <ut class="to-do-list">
                <!-- todo -->
                <li class="d-flex" v-for="(todo, index) in toDoList" :key="index" @click="toggleDone(index)">
                    <div class="name">{{todo.text}}</div>
                </li>
                <!-- todo -->
            </ut>
            <!-- /todolist -->
        </div>

    </main>
    <script src="script.js"></script>
</body>

</html>