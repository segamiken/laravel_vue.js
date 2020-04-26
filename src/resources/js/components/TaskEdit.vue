<template>
<div>
	<div>
	<h1>Task更新</h1>
	<p>Task Id: {{ task.id }}</p>
	<form @submit.prevent="updateTask">
		<div class="form-group">
			<label for="name">Task:</label>
			<input v-model="task.name">
		</div>
		<button type="submit">更新</button>
	</form>
	</div>
</div>
</template>

<script>
	export default {
		data(){
			return {
				id: this.$route.params.id,
				task:{
					id:'',
					name: '',
				}
			}
		},
		methods:{
			updateTask(){
				axios.patch('/api/tasks/' + this.task.id,{
					task: this.task
				})
				.then(response => {
					this.task = response.data.task;
					this.$router.push({ name: 'task_details' ,params :{ id: this.$route.params.id }})
				})
				.catch(error => console.log(error));
			},
		},
		created(){
			axios.get('/api/tasks/' + this.id)
			.then(response => this.task = response.data.task)
			.catch(erorr => console.log(error));
		}

	}
</script>