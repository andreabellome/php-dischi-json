const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'assets/apis/dischi.php',
            data: '',
            classDispNone: 'disp-none',
            isActive: true,
            dataSingleCard: '',
            idxactive: 0
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

        closeWindowOnClickMain() {

            this.idxactive = this.idxactive + 1;

            if (this.idxactive == 2) {
                this.isActive = !this.isActive;
            }




        },

        activateWindowOnCllick(index) {


            if (this.data != '') {
                this.isActive = false;
                this.dataSingleCard = this.data[index];
            }
            this.idxactive = 0;


        }

    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')