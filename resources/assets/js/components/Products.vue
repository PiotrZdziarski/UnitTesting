<template>
    <table id="recordsListView">
        <thead>
        <tr>
            <th>ID</th>
            <th class="not-sortable">Image</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Created Date</th>
            <th>Status</th>
            <th class="not-sortable">Actions</th>
        </tr>
        </thead>
        <tbody>
            <tr v-for="record in records">
                <td><a href="#" class="btn-link">#{{record.id}}</a></td>
                <td><a href="#" class="btn-link"> <img src="img/products/thumb-80x60.jpg"
                                                       alt="">
                </a></td>
                <td><a href="#" class="btn-link">Baby Dress</a></td>
                <td><a href="#" class="btn-link">Baby Products</a></td>
                <td>$12.00</td>
                <td>1</td>
                <td>12 June 2017</td>
                <td><span class="label label-success">Approved</span></td>
                <td>
                    <div class="dropleft"><a href="#" class="btn-link" data-toggle="dropdown"><i
                            class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Edit</a> <a href="#"
                                                                                                 class="dropdown-item">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "productsList",
        data() {
            return {
                records: []
            }
        },
        props: {
            api_link: {
                type: String
            }
        },
        mounted() {
            const self = this;
            axios.get(this.api_link.toString()).then(function (Response) {
                self.records = Response.data.data;
            });
        }
    }
</script>

<style scoped>

</style>