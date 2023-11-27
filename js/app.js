const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'Lista della spesa',
            list: [],
            newItem: '',

        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                console.log(res.data)
                this.list = res.data.results
            })
        },

        storeItem() {
            console.log('this.newItem', this.newItem)
        }
    },
    created() {
        this.fetchData()
    }
}).mount('#app')