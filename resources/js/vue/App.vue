<template>
    <div>
        VueJS 3 and Laravel 8
    </div>
</template>

<script>
export default {
    name: "App",
    data: () => {
        return {
            books: null,
        }
    },

    methods: {
        getBooks() {
            axios.get("http://demo.test/api/books")
                .then(function (response) {
                    // handle success
                    console.log(response)
                })
        }
    },

    mounted() {
        this.getBooks();
    }
}
</script>

<style scoped>

</style>
