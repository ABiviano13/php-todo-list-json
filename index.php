<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <title>Todolist Stack</title>
</head>
<body>

    <div id="app">

        <section class="todolist">
            <div class="container">
                <h1 class="title">
                    Todo List
                </h1>

                <input class="form-control" type="text" name="new_task" placeholder="New Task" @keyup.enter="saveNewTask" v-model="newTask">

                <ol class="list-group list-group-numbered mt-2">
                    <li class="list-group-item" 
                    v-for="item in todoList"
                    >
                        {{item.text}}
                    </li>
                </ol>

            </div>
        </section>

    </div>

    <script src="./app.js"></script>
    
</body>
</html>