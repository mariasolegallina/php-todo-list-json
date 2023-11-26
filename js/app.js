const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'Lista della spesa',
            list: ['pane', 'latte', 'mele', 'insalata', 'cioccolata'],
        }
    }
}).mount('#app')