<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Realtime Message</div>

                    <!--div class="panel-body" v-for="user in users">
                        <li>{{ user.name }}</li>
                    </div-->
                    <div class="panel-body">
                        <p>{{ data }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default
    {
        data(){
            return {
                data: ""
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        sockets: {
            message(data){
                console.log(data);
                //let users = JSON.parse(data);
                //this.users = users;
                let msj = JSON.parse(data);
                this.data = msj.data.data;
            }
        }
    }
</script>
