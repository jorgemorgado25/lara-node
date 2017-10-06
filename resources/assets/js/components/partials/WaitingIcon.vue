<template>
	<div class="text-center" v-if="waiting">
		<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>
	</div>
</template>

<script>
    export default {
        props: ['waiting']
    }
</script>