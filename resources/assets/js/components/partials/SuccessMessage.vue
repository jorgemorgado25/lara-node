<template>	
	<div v-if="message" class="alert alert-success text-center">
		{{ message.data }}
	</div>	
</template>

<script>
    export default {
        props: ['message']
    }
</script>