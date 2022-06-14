<template>
    <div>
        <form @submit.prevent="CreateClient" method="POST">
        
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" v-model="name" class="form-control" id="name">
        </div>

        <div class="form-group">
          <label for="surname">Surame</label>
          <input type="text" v-model="surname" class="form-control" id="surname">
        </div>

        <div class="form-group">
          <label for="afm">Afm</label>
          <input type="text" v-model="afm" class="form-control" id="afm">
        </div>

        <div class="form-group">
          <label for="doy">Doy</label>
          <input type="text" v-model="doy" class="form-control" id="doy">
        </div>

        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" v-model="address" class="form-control" id="address">
        </div>

        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" v-model="phone" class="form-control" id="phone">
        </div>

        <div class="form-group">
          <label for="at">AT</label>
          <input type="text" v-model="at" class="form-control" id="at">
        </div>

        <div class="form-group">
          <label for="protocol_num">Protocol Number</label>
          <input type="text" v-model="protocol_num" class="form-control" id="protocol_num">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
export default {
    name: 'CreateClient',

    data() {
      return {
        name: "",
        surname: "",
        afm: "",
        doy: "",
        address: "",
        phone: "",
        at: "",
        protocol_num: ""
      }
    },

    methods: {
      CreateClient() {
        const payload = {
          name: this.name,
          surname: this.surname,
          afm: this.afm,
          doy: this.doy,
          address: this.address,
          phone: this.phone,
          at: this.at,
          protocol_num: this.protocol_num
        }

        axios.post(`/clients/store`, payload).then(res => {
          location.replace(`/clients`);
        })
      }
    },
}
</script>