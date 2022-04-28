<template>
  <h1>Bag Details</h1>
  <hr>
  <div class="row">
      <div class="col-md-4">
          <table class="table table-striped">
              <tr>
                    <th>Id</th>
                    <td>{{bag.id}}</td>
                </tr>
              <tr>
                  <th>Bag Name</th>
                  <td>{{bag.bag_name}}</td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td>{{bag.brand}}</td>
                </tr>
                <tr>
                    <th>Owner</th>
                    <td>{{bag.owner}}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{bag.price}}</td>
                </tr>
          </table>
      </div>
  </div>
</template>

<script>
export default {
    props: ['id'],
    data() {
        return {
            bag: {}
        }
    },
    mounted() {
        fetch('http://127.0.0.1:8000/api/bags/' + this.id)
        .then(res=>res.json())
        .then(data=>this.bag = data)
        .catch(err=>console.log(err))
    },
}
</script>

<style>

</style>