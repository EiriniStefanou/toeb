<template>
    <div>
        <form @submit.prevent="CreateRegion" method="POST">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="name" class="form-control" id="name">
        </div>

        <div class="form-group">
                <label for="active">Status</label>

                <select v-model="active" id="active" class="form-control">

                    <option value="0">Inactive</option>
            
                    <option value="1">Active</option>
                    
                </select>
        </div>

        <div class="form-group">
          <label for="notes">Notes</label>
          <input type="text" v-model="notes" class="form-control" id="notes">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
export default {
    name: 'CreateRegion',

    data() {
      return {
        name: "",
        active: "",
        notes: "",
      }
    },

    methods: {
      CreateRegion() {
        const payload = {
          name: this.name,
          active: this.active,
          notes: this.notes,
        }

        axios.post(`/regions/store`, payload).then(res => {
          location.replace(`/regions`);
        })
      }
    },
}
</script>