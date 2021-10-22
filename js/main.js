const app = new Vue({
    el: '#root',

    data: {
       albi: null,
       selectedGenre: ""
    },

    methods: {
        filterGenre: function(str) {
            axios.get('http://localhost/php/php-ajax-dischi/api/index.php', {
                params: {
                    genre: str
                }
            })
            .then(response => {
                this.albi = response.data;
            })

            .catch(function (error) {
                console.log(error);
            })
        }
    },

    created() {
        axios.get('http://localhost/php/php-ajax-dischi/api/index.php')
        .then(response => {
            this.albi = response.data;
        })

        .catch(function (error) {
            console.log(error);
        })
    } 
        
});