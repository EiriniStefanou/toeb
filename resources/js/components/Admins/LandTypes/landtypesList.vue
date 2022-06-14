<template>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Notes</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            <tr v-for="item in landtypes" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.name }}</td>
                
                <td>
                    <span v-if="item.status === 1" class="bg-success px-2 py-1 fs-6 text-white rounded-3">
                        Active
                    </span>
                    
                    <span v-else class="bg-danger px-2 py-1 fs-6 text-white rounded-3">
                        Inactive
                    </span>
                </td>

                <td>{{ item.notes }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
export default {
    name: 'LandTypesList',

    props: ['landtypes'],
}
</script>