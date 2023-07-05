const {createApp} = Vue;
createApp ({
    data () {
        return{
            dischi: []
        }
    },

    created () {
        
    },

    mounted() {
        this.axiosCall();
    },

    methods: {
        axiosCall () {
            axios.get(`./server.php`)
            .then((response) => {
                // handle success
                response.data.forEach((element) => {
                    this.dischi.push(element);
                });
                console.log(this.dischi);
            })
            .catch((error) => {
                // handle error
                console.log(error);
            })
        }
    },
}).mount ("#app");