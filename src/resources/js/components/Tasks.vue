<template>
  <div>
    <div>
      <strong>Task一覧</strong>
      
      <form @submit.prevent="createTask">
		<label for="name">Name:</label>
		<input v-model="new_task.name">
		<button type="submit">作成</button>
	</form>

      <ul>
        <li v-for="(task,index) in tasks" v-bind:key="task.id" >
          {{ task.name }}
          <router-link :to="`/tasks/${task.id}`">詳細</router-link>
          <router-link :to="`/tasks/${task.id}/edit`">編集</router-link>
          <button @click="removeTask(index, task.id)" class="btn btn-sm btn-danger">削除</button>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
    created(){
        axios.get('/api/tasks')
            .then(response=>{
                this.tasks = response.data.tasks;
            })
            .catch(error => {
                console.log(error)
            });
    },
    data() {
        return {
        tasks: [],
        name: '',
        showAlert: false,
        alertMessage: '',
        new_task:{name: ''}
        }
    },
    methods:{
        removeTask(index, id){
            axios.delete('/api/tasks/' + id)
                .then(response => {
                this.tasks.splice(index, 1)
                })
                .catch(error => console.log(error));
        },
        createTask(){
				axios.post('/api/tasks',{
					new_task: this.new_task
				})
				.then(response => {
					this.tasks = response.data.tasks;
                    this.new_task = {name: ''}
				})
				.catch(error => console.log(error));
		},
    }
}
</script>