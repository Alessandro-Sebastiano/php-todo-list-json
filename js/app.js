const { createApp } = Vue;

const app = createApp({

    data() {
        return {
            tasksList: [],
            apiUrl: './php/results.php',
            newTask: '',
        }
    },


    methods: {
        getTasks() {

            axios.get(this.apiUrl).then((response) => {
                this.tasksList = response.data;
                console.log(this.tasksList);
            });

        },

        addNewTask() {

            const data = { newTask: this.newTask }

            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                console.log('passed');
            })

            this.getTasks();

            this.newTask = '';
        }
    },

    created() {
        this.getTasks();
    }

})


app.mount('#app');