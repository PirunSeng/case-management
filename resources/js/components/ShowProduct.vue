<template>
    <div>
        <h2 class="text-center">Product Detail</h2>

        <p>ID: {{ product.id }}</p>
        <p>Name: {{ product.name }}</p>
        <p>Detail: {{ product.detail }}</p>
        <p>
            <router-link :to="{name: 'product_edit', params: { id: product.id }}" class="btn btn-primary mr-2 rounded">Edit</router-link>
        </p>

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
            console.log('params: ', this.$route.params)
            this.axios
                .get(`http://localhost:8000/api/products/${this.$route.params.id}`)
                .then((res) => {
                    this.product = res.data;
                });
        }
    }
</script>