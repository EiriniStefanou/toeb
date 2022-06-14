<template>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Size</th>
                <th>Region</th>
                <th>Type</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            <tr v-for="item in estates" :key="item.id">
                <td>{{ item.client.name }}</td>
                <td>{{ item.client.surname }}</td>
                <td>{{ item.size }}</td>
                <td>{{ item.region }}</td>
                <td>{{ item.type }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: 'EstatesList',

    props: ['estates'],
}
</script>