<template>
    <div>
        <form @submit.prevent="CreateLandType" method="POST">
        
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
                <label>Type of Charge</label>
                <select v-model="charge_type" class="form-control">
                    <option
                        v-for="chargetype in chargetypes"
                        :key="chargetype.id"
                        :value="chargetype">
                        {{ chargetype.name }} 
                    </option>
                </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
export default {
    name: 'CreateLandType',

    props: {
        chargetypes: {
            type: Array,
            required: true
        }
    },

    data() {
      return {
        name: "",
        status: "",
        notes: "",
        charge_type: ""
      }
    },

    methods: {
      CreateLandType() {
        const payload = {
          name: this.name,
          status: this.status,
          notes: this.notes,
          charge_type_id: this.charge_type.id
        }

        axios.post(`/land/types/store`, payload).then(res => {
          location.replace(`/land/types`);
        })
      }
    },
}
</script>