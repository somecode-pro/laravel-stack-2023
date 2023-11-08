<template>
	<div class="container col-6">
		<div class="row justify-content-center p-4">
			<Link
				:href="`/posts/${post.id}`"
				class="card mb-3"
				v-for="post in posts"
				:key="post.id"
			>
				<div class="card-body">
					<h5 class="card-title">{{ post.title }}</h5>
					<p class="card-text">
						{{ post.content }}
					</p>
				</div>
			</Link>
		</div>
	</div>
</template>

<script lang="ts">
	import { defineComponent, PropType } from 'vue';
	import { Link } from '@inertiajs/vue3';
	import PostData = App.Data.PostData;

	export default defineComponent({
		components: { Link },
		props: {
			posts: Array as PropType<PostData[]>,
		},
		setup() {
			return {};
		},
	});
</script>

<style lang="scss" scoped></style>
