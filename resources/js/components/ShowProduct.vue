<template>
    <div>
        <h2 class="text-center">Product Detail</h2>

        <p>ID: {{ product.id }}</p>
        <p>Name: {{ product.name }}</p>
        <p>Detail: {{ product.detail }}</p>

    </div>
</template>
 
<script>
    export default {
        data() {
            return {
                product: {}
            }
        },
        created() {
            this.axios
                .get(`http://localhost:8000/api/products/${this.$route.params.id}`)
                .then((res) => {
                    this.product = res.data;
                });
        }
    }
</script>