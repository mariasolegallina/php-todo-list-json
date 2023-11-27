const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'Lista della spesa',
            list: [],

        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                console.log(res.data.results)
            })
        },
    },
    created() {
        this.fetchData()
    }
}).mount('#app')