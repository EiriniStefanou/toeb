<template>
    <div>
        <form @submit.prevent="CreatePayment" method="POST">
        
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
          <label for="amount">Amount</label>
          <input type="text" v-model="amount" class="form-control" id="amount">
        </div>

        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" v-model="type" class="form-control" id="type">
        </div>

        <div class="form-group">
          <label for="receipt_num">Receipt number</label>
          <input type="text" v-model="receipt_num" class="form-control" id="receipt_num">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</template>

<script>
export default {
    name: 'CreatePayment',

    props: {
        clients: {
            type: Array,
            required: true
        }
    },

    data() {
      return {
        name: "",
        surname: "",
        amount: "",
        type: "",
        receipt_num: "",
        client: ""
      }
    },

    methods: {
      CreatePayment() {
        const payload = {
          name: this.name,
          surname: this.surname,
          amount: this.amount,
          type: this.type,
          receipt_num: this.receipt_num,
          client_id: this.client.id
        }

        axios.post(`/payments/store`, payload).then(res => {
          location.replace(`/payments`);
        })
      }
    },
}
</script>