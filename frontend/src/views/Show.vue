<template>
  <div class="show">
		<h3>{{ article.title }}</h3>
		<div>
			{{ article.content }}
		</div>
  </div>
</template>

<script>
/* eslint-disable no-console */
import axios from 'axios';

export default {
  name: 'Show',
	props: {
		id: Number,
	},
	data() {
		return {
			article: [],
		}
	},
	async mounted() {
		const res = await	axios.get("/api/article/show/" + this.id);
		this.article = res.data;
	}
}
</script>
