<template>
    <form @submit="submitForm" class="search flex-wrap flex-md-nowrap">
        <input type="text" class="form-control" v-model="title" name="title"
               placeholder="Product Name..."
               required>
        <select name="category_id" id="category_id"
                class="form-control">
            <option :value="record.id" v-for="record in records">{{record.category.replace('.', '')}}</option>
        </select>
        <input type="text" class="form-control" id="price" name="price"
               placeholder="Price"
               required>
        <button type="submit" style="background-color: #ff64a8" class="btn  btn-warning  addProduct btn-rounded">Add Product</button>
    </form>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "AddProduct",
        data() {
          return {
              records: [],
              title: '',
          }
        },
        methods: {
            submitForm() {
                const category_id = document.getElementById('category_id').value;
                const price = document.getElementById('price').value;
                const self = this;

                axios.post(this.api_link + '/product_store', {
                    'title':  self.title,
                    'price': price,
                    'category_id': category_id
                }).then(function() {
                    location.reload();
                });
            }
        },
        props: {
            api_link: {
                type: String
            }
        },
        mounted() {
            const self = this;

            axios.get(this.api_link + '/categories').then(function (Response) {
                self.records = Response.data.data;
            });
        }
    }
</script>

<style scoped>

</style>