const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'assets/apis/dischi.php',
            data: '',
            classDispNone: 'disp-none',
            isActive: true,
            dataSingleCard: ''
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data;
                });
        },

        closeWindowOnClick() {
            this.isActive = !this.isActive;
        },

        activateWindowOnCllick(index) {

            if (this.data != '') {
                this.isActive = false;
                this.dataSingleCard = this.data[index];
            }

        }

    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')