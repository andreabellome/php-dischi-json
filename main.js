const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'assets/apis/dischi.php',
            data: '',
            classDispNone: 'disp-none',
            isActive: true,
            dataSingleCard: '',
            idxactive: 0,
            haveChecked: 0
        }
    },
    methods: {
        chiamataApi() {
            axios.get(this.apiUrl)
                .then((res) => {
                    this.data = res.data;
                });
        },

        /* start: at click on cross, the disc info disappears */
        closeWindowOnClick() {
            this.isActive = !this.isActive;
            this.idxactive = 0;
            this.haveChecked = 0;
        },
        /* end: at click on cross, the disc info disappears */

        /* start: at click outside the black box, the disc info disappears */
        closeWindowOnClickMain() {

            if (this.dataSingleCard != '') {
                console.log(this.idxactive)
                this.idxactive = this.idxactive + 1;

                if (this.idxactive == 2 && this.haveChecked == 1) {
                    this.isActive = !this.isActive;
                    console.log(this.idxactive)
                    this.idxactive = 0;
                    this.haveChecked = 0;
                }



            }

        },
        /* end: at click outside the black box, the disc info disappears */

        /* start: at click on disc car, the disc info appears */
        activateWindowOnCllick(index) {
            if (this.data != '') {
                this.isActive = false;
                this.dataSingleCard = this.data[index];
            }
            this.idxactive = 0;
            this.haveChecked = 1;
        }
        /* end: at click on disc car, the disc info appears */

    },
    mounted() {
        this.chiamataApi();
    }
}).mount('#app')