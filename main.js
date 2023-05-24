const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'assets/apis/dischi.php',
            data: '',
            nuovoDato: ''
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data;
                });
        },
        aggiungiDato() {
            this.data.push(
                {
                    "typo": this.nuovoDato
                }
            )
        }
    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')