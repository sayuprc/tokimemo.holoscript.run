<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <HelloWorld msg="Welcome to Your Vue.js App"/>
		{{ articles }}
  </div>
</template>

<script>
/* eslint-disable no-console */
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue';
import axios from 'axios';

export default {
  name: 'Home',
  components: {
    HelloWorld
  },
	data() {
		return {
			articles: [],
		}
	},
	async mounted() {
		const res = await	axios.get("/api/article/show/1");
		let formated_data = res.data;
/*
		const formated_data = Object.keys(res.data).map(key => {
			return {
				id: res.data[key]['article_id'],
				title: res.data[key]['title'],
			}
		});
*/
		this.articles = formated_data;
	}
}
</script>
