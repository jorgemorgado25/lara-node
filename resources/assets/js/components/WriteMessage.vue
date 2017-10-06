<template>
	<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Send Message</div>

                    <div class="panel-body">
                    	<h2>{{ message }}</h2>
                    	<input type="text" class="form-control" v-model="message">
                    	<br>
                        <button class="btn btn-primary" :disabled='!message || waiting' v-on:click="sendMessage()" >Send Message</button>
                    </div>                    
                </div>
                <error-message :error=error></error-message>            
                <success-message :message=infoMessage></success-message>  

                <waiting-icon :waiting=waiting></waiting-icon>          
            </div>
        </div>
    </div>
</template>

<script>
    import ErrorMessage from './partials/ErrorMessage.vue';
    import SuccessMessage from './partials/SuccessMessage.vue';
    import WaitingIcon from './partials/WaitingIcon.vue';
    export default {
        props: ['defaultmessage'],
        data(){
            return {
                message: this.defaultmessage,
                error: '',
                infoMessage: '',
                waiting: false
            }
        },
        mounted() {
            console.log('Component mounted.');
        },
        components: {ErrorMessage, SuccessMessage, WaitingIcon},
        methods: {
        	sendMessage: function(){
        		this.$http.post('/sendmessage', {data: this.message});
                this.error = "";
                this.infoMessage = "";
                this.waiting = !this.waiting;
                var self = this;
                axios.post('/sendmessage', 
                    {data: this.message})
                    .then(function (response){
                        console.log(response.data);
                        console.log(response.status);
                        self.infoMessage = response;
                        self.waiting = !self.waiting;
                        //setControlsAfterSend();
                    })
                    .catch(function (error){
                        parent.error = error;
                        console.log(error.response.data);
                        console.log(error.response.status);
                        self.error = error;
                        self.waiting = !self.waiting;
                        //setControlsAfterSend();
                    }
                );
        	},
            setControlsAfterSend: function(){
                //var self = this;
                //self.waiting = !self.waiting;
                console.log("call functrion");
            }
        }
    }
</script>