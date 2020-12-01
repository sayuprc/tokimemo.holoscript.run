<template>
  <div class="index">
		<div :key="article.id" v-for="article in articles">
			<h3>{{ article.title }}</h3>
			<div>
				{{ article.content }}
			</div>
		</div>
  </div>
</template>

<script>
/* eslint-disable no-console */
import axios from 'axios';

export default {
  name: 'Index',
	data() {
		return {
			articles: [],
		}
	},
	async mounted() {
		const res = await	axios.get("/api/articles");
		const formated_data = Object.keys(res.data).map(key => {
			return {
				id: res.data[key]['article_id'],
				title: res.data[key]['title'],
				content: res.data[key]['content'],
			}
		});

		this.articles = formated_data;
	}
}
</script>
