const { createApp } = Vue;

const app = createApp({

    data() {
        return {
            tasksList: [],
            apiUrl: './php/results.php',
        }
    },


    methods: {
        getTasks() {

            axios.get(this.apiUrl).then((response) => {
                this.tasksList = response.data;
                console.log(this.tasksList);
            });

        },
    },

    created() {
        this.getTasks();
    }

})


app.mount('#app');