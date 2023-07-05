const {createApp} = Vue;
createApp ({
    data () {
        return{

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
                console.log(response.data);
            })
            .catch((error) => {
                // handle error
                console.log(error);
            })
        }
    },
}).mount ("#app");