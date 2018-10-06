<template>
    <div class="shadow mt-4">
            <div class="font-medium text-lg text-white bg-teal p-3">
                Panel Users
            </div>
            <div class="bg-teal-lightest p-3">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Email Verified</th>
                        <th>Created</th>
                        <th>Last Updated</th>
                    </tr>
                    <tr v-for="user in users.data" :key="user.id">
                            <td>{{ user.id }}</td>
                            <td>{{ user.name }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.email_verified }}</td>
                            <td>{{ user.created_at }}</td>
                            <td>{{ user.updated_at }}</td>
                    </tr>
                </table>
               <pagination :data="users" @pagination-change-page="getUsers"></pagination>
            </div>
        </div>
</template>

<script>
    export default {
        data(){
            return {
                users: {},
            }
        },
        mounted() {
            this.getUsers();
        },
        methods: {
            getUsers(page=1){
                axios.get('/users?page='+page)
                    .then(response => {
                        this.users = response.data
                    })
            }
        }
    }
</script>
