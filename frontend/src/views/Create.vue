<template>
  <div class="create">
		<form action="/api/article/create" method="post">
			<mavon-editor language="ja"></mavon-editor>
			<input type="submit" value="下書き保存">
			<input type="submit" value="投稿する">
		</form>
  </div>
</template>

<script>
/* eslint-disable no-console */
// import axios from 'axios';

export default {
  name: 'Create',
}
</script>
