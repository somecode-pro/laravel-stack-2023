<template>
	<div class="container col-6">
		<div class="row justify-content-center p-4">
			<div
				href="#"
				class="card mb-3"
			>
				<div class="card-body">
					<h5 class="card-title">{{ post.title }}</h5>
					<p class="card-text">{{ post.content }}</p>
				</div>
			</div>
		</div>
	</div>
</template>

<script lang="ts">
	import { defineComponent, PropType } from 'vue';
	import PostData = App.Data.PostData;

	export default defineComponent({
		props: {
			post: Object as PropType<PostData>,
		},
	});
</script>

<style lang="scss" scoped></style>
