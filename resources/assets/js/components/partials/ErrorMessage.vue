<template>	
	<div v-if="error" class="alert alert-danger text-center">
		{{ error.response.data }}
	</div>
</template>

<script>
    export default {
        props: ['error']
    }
</script>