<template>
<form class="p-4 flex flex-col">
    <div id="userCreateErrors"></div>
    <input class="flex-grow h-8 px-2 border rounded border-grey-light mb-2" type="name" v-model="name" placeholder="Name">
    <input class="flex-grow h-8 px-2 border rounded border-grey-light mb-2" type="email" v-model="email" placeholder="Email">
    <input class="flex-grow h-8 px-2 border rounded border-grey-light mb-2" type="password" v-model="password" placeholder="Password">
    <button @click="createAdmin" class="bg-black text-white text-sm font-semibold py-2 px-4 rounded hover:bg-grey hover:border hover:border-black" type="submit">Create User</button>
</form>
</template>

<script>
    import izitoast from 'izitoast';
    export default {
        data(){
            return {
                email: '',
                name: '',
                password: '',
                url: '/users/manage/create',
            }
        },
        methods: {
            createAdmin(e){
                e.preventDefault();
                axios.post(this.url, {
                        email: this.email,
                        password: this.password,
                        name: this.name,
                    })
                    .then(response => {
                        return izitoast.success({
                            title: "User Created",
                            message: "Added user " + response.data.name + " successfully!",
                            position: "bottomRight",
                        });
                    }).catch(err => {
                        return izitoast.error({
                            title: "Whoops!",
                            message: err.response.data.message,
                            position: "bottomRight",
                        });
                    })
            }
        }
    }
</script>
