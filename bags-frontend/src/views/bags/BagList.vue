<template>
  <div>
      <h1>List of Designer Bags</h1>
      <hr>
      <div class="row">
          <div class="col-md-3">
              <h4>Bag Entry</h4>
              <form @submit.prevent="addBag()">
                  <div class="mb-3">
                      <label for="bag_name">Bag Name</label>
                      <input type="text" v-model="bag.bag_name" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="brand">Brand</label>
                      <input type="text" v-model="bag.brand" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="owner">Owner</label>
                      <input type="text" v-model="bag.owner" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="price">Price</label>
                      <input type="number" v-model="bag.price" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary">Save Bag</button>
              </form>
          </div>
          <div class="col-md-9">
              <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Bag Name</th>
                        <th>Brand</th>
                        <th>Owner</th>
                        <th>Price</th>
                        <th>...</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="bg in bags" :key="bg.id">
                        <td>{{bg.bag_name}}</td>
                        <td>{{bg.brand}}</td>
                        <td>{{bg.owner}}</td>
                        <td>{{bg.price}}</td>
                        <td>
                            <router-link :to="{name: 'BagView', params: {id: bg.id}}" class="btn btn-secondary btn-sm"> Open</router-link>
                        </td>
                    </tr>
                </tbody>
            </table>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            bag: {
                id:null,
                bag_name: '',
                brand: '',
                owner: '',
                price: '',
            },
           bags:[]
        }
    },
    methods: {
        addBag() {
        },
        getData(){
            fetch('http://127.0.0.1:8000/api/bags')
            .then(res=>res.json())
            .then(data=>this.bags = data)
            .catch(err=>console.log(err))
        }
    },
    mounted() {
        this.getData()
    },
}
</script>

<style>

</style>