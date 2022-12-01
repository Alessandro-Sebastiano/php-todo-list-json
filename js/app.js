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
                console.log('get task ok');
            });

        },

        addNewTask() {

            const data = { newTask: this.newTask }

            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                console.log('task add ok');
            });

            this.getTasks();

            this.newTask = '';
        },

        select(i) {

            const data = {
                selectIndex: i,
            };


            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {
                console.log('done ok');
            });

            this.getTasks();
        },

        removeTask(i) {

            const data = {
                removeIndex: i,
            };

            axios.post(this.apiUrl, data, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {

                console.log('remove ok');

            });

            this.getTasks();

        },


    },

    created() {
        this.getTasks();
    }

})


app.mount('#app');


// let data = { setDone: null };
//             let key = { setKey: i };

//             if (this.tasksList[i].done === false) {
//                 data.setDone = true;
//             } else {
//                 data.setDone = false;
//             }

//             axios.post(this.apiUrl, data, key, { headers: { 'Content-Type': 'multipart/form-data' } }).then((response) => {

//             })