<template>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Notes</th>
                <th>Status</th>
                <th>Amount</th>
            </tr>
        </thead>
        
        <tbody>
            <tr v-for="item in chargetypes" :key="item.id">
                <td>{{ item.name }}</td>
                <td>{{ item.notes }}</td>

                <td>
                    <span v-if="item.status === 1" class="bg-success px-2 py-1 fs-6 text-white rounded-3">
                        Active
                    </span>
                    
                    <span v-else class="bg-danger px-2 py-1 fs-6 text-white rounded-3">
                        Inactive
                    </span>
                </td>

                <td>{{ item.amount }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: 'ChargeTypesList',

    props: ['chargetypes'],
}
</script>