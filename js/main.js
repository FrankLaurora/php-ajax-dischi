const app = new Vue({
    el: '#root',

    data: {
       albi: null,
       genres: [],
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

            console.log(this.albi);

            this.albi.forEach(element => {
                if(!this.genres.includes(element.genre)) {
                    this.genres.push(element.genre);
                }

                console.log(this.genres);
            });
        })
        .catch(function (error) {
            console.log(error);
        })
    }
});