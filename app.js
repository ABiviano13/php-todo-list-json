const { createApp } = Vue

createApp({

    data() {
        return {
            todoList: []
        }
    },
    methods: {
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