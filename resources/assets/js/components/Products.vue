<template>
    <div>
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
                <td><a href="#" class="btn-link">{{record.title}}</a></td>
                <td><a href="#" class="btn-link">{{record.category}}</a></td>
                <td>${{record.price}}</td>
                <td>1</td>
                <td>{{record.date}}</td>
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
        <div v-if="this.loading === true" style="width: 100%; height: 150px; display: flex; justify-content: center; align-items: center">
            <!--<div v-if="this.loading === true" class="lds-dual-ring"></div>-->
            <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';

    export default {
        name: "productsList",
        data() {
            return {
                records: [],
                loading: true
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
                self.loading = false;
            });
        }
    }
</script>

<style scoped>
    .lds-ring {
        display: inline-block;
        position: relative;
        width: 90px;
        height: 64px;
    }
    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 70px;
        height: 70px;
        margin: 6px;
        border: 8px solid lightgray;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: lightgray transparent transparent transparent;
    }
    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }
    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }
    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }
    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

</style>