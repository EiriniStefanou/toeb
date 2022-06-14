<template>
    <table class="table">
        <thead>
            <tr>
                <th>ID Client</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Amount</th>
                <th>Type</th>
                <th>Receipt num</th>
                <th>Payment Date</th>
            </tr>
        </thead>
        
        <tbody>
            <tr v-for="item in payments" :key="item.id">
                <td>{{ item.client.id }}</td>
                <td>{{ item.client.name }}</td>
                <td>{{ item.client.surname }}</td>
                <td>{{ item.amount }}</td>
                <td>{{ item.type }}</td>
                <td>{{ item.receipt_num }}</td>
                <td>{{ item.payment_date }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: 'PaymentsList',

    props: ['payments'],
}
</script>