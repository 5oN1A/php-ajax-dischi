new Vue({
    el: "#root",
    data: {
        albumsList: [],
    },

    mounted() {
        axios.get("http://localhost/php-ajax-dischi/milestone_2/api/albumsApi.php")
            .then((resp) => {
                this.albumsList = resp.data;

            });
    }

});



