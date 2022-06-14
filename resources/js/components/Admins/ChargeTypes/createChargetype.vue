<template>
    <div>
        <form @submit.prevent="CreateChargeType" method="POST">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="name" class="form-control" id="name">
        </div>


        <div class="form-group">
          <label for="notes">Notes</label>
          <input type="text" v-model="notes" class="form-control" id="notes">
        </div>

        <div class="form-group">
                <label for="status">Status</label>

                <select v-model="status" id="status" class="form-control">

                    <option value="0">Inactive</option>
            
                    <option value="1">Active</option>
                    
                </select>
        </div>

        <div class="form-group">
          <label for="amount">Amount</label>
          <input type="double" v-model="amount" class="form-control" id="amount">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
export default {
    name: 'CreateChargeType',

    data() {
      return {
        name: "",
        status: "",
        notes: "",
        amount: ""
      }
    },

    methods: {
      CreateChargeType() {
        const payload = {
          name: this.name,
          status: this.status,
          notes: this.notes,
          amount: this.amount
        }

        axios.post(`/charge/types/store`, payload).then(res => {
          location.replace(`/charge/types`);
        })
      }
    },
}
</script>