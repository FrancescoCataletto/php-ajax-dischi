const app = new Vue({
    el: "#app",
    data:{
        getURL: "http://localhost/PHP-BOOLEAN/php-dischi/php-ajax-dischi/php/api.php",
        array: []
    },

    mounted(){
        this.getAPI()
    },

    methods:{
        getAPI(){
            axios.get(this.getURL)
            .then(res => {
                this.array = res.data
                console.log(res.data)
            })
        }
    }
})