<template>
	<div class="container col-6">
		<div class="row justify-content-center p-4">
			<div class="mb-3">
				<label
					for="title"
					class="form-label"
					>Заголовок</label
				>
				<input
					type="text"
					class="form-control"
					v-model="form.title"
					:class="{ 'is-invalid': form.errors.title }"
					id="title"
				/>
				<div class="invalid-feedback">{{ form.errors.title }}</div>
			</div>
			<div class="mb-3">
				<label
					for="content"
					class="form-label"
					>Содержимое</label
				>
				<textarea
					class="form-control"
					:class="{ 'is-invalid': form.errors.content }"
					v-model="form.content"
					id="content"
					rows="3"
				></textarea>
				<div class="invalid-feedback">{{ form.errors.content }}</div>
			</div>
			<div class="mb-3">
				<button
					class="btn btn-primary"
					@click="form.post('/posts')"
					:disabled="form.processing"
				>
					Добавить
				</button>
			</div>
		</div>
	</div>
</template>

<script lang="ts">
	import { defineComponent } from 'vue';
	import { useForm } from '@inertiajs/vue3';

	export default defineComponent({
		setup() {
			const form = useForm({
				title: '',
				content: '',
			});

			return { form };
		},
	});
</script>

<style lang="scss" scoped></style>
