<template>
    <div>
        <form @submit.prevent="CreateEstate" method="POST">

        <div class="form-group">
                <label for="client">Client</label>
                <select v-model="client" id="client" class="form-control">
                    <option
                        v-for="client in clients"
                        :key="client.id"
                        :value="client">
                        {{ client.name }} {{ client.surname }}
                    </option>
                </select>
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" v-model="type" class="form-control" id="type">
        </div>

        <div class="form-group">
          <label for="size">Size</label>
          <input type="text" v-model="size" class="form-control" id="size">
        </div>

        <div class="form-group">
          <label for="region">Region</label>
          <input type="text" v-model="region" class="form-control" id="region">
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
    name: 'CreateEstate',

    props: {
        clients: {
            type: Array,
            required: true
        }
    },

    data() {
      return {
        type: "",
        size: "",
        region: "",
        notes: "",
        client: ""
      }
    },

    methods: {
      CreateEstate() {
        const payload = {
          type: this.type,
          size: this.size,
          region: this.region,
          notes: this.notes,
          client_id: this.client.id
        }

        axios.post(`/estates/store`, payload).then(res => {
          location.replace(`/estates`);
        })
      }
    },
}
</script>