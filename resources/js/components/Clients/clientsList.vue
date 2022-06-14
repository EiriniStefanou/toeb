<template>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>AT</th>
                <th>Address</th>
                <th>Phone</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            <tr v-for="item in clients" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                <td>{{ item.surname }}</td>
                <td>{{ item.at }}</td>
                <td>{{ item.address }}</td>
                <td>{{ item.phone }}</td>

            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: 'ClientsList',

    props: ['clients'],
}
</script>