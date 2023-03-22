const { createApp } = Vue

createApp({

    data() {
        return {
            todoList: [],
            newTask: ''
        }
    },
    methods: {
        saveNewTask() {
            // console.log(newTask);
            $data = {
                task: this.newTask
            },

            axios
                .post('./items.php', $data, {
                    headers: {
                        'Content-Type' : 'multipart/form-data'
                    } 
                })

        },
        fetchList(){
            axios
                .get('./items.php')
                .then((res) => {
                    console.log(res.data);
                    this.todoList = res.data;
                }).catch((error) => {
                    console.log(error);
                    this.todoList = [];
                })
        }
    },
    mounted() {
        this.fetchList();
    }

}).mount('#app')