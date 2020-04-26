<template>
<div>
	<h1>ユーザ詳細</h1>
	
	<p>User Id: {{ $route.params.id }}</p>
    <p>Task: {{ task.name }}</p>
</div>
</template>

<script>
export default {
    data(){
        return {
            id: this.$route.params.id,
            task: ''
        }
    },
    created(){
        axios.get('/api/tasks/' + this.id)
        .then(response => this.task = response.data.task)
        .catch(erorr => console.log(error));
    }
}
</script>