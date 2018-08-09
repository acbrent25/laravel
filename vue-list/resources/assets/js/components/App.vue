<template>

  <div class="app-component">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Task Title</th>
          <th scope="col">Priority</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tr>
          <td>
            <input v-model="task.title" type="text" id="task" class="form-control">
          </td>
          
          <td>
            <select v-model="task.priority" name="select" id="select" class="form-control">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </td>

          <td> <button @click="store" class="btn btn-primary">Add</button> </td>
        </tr>
      <tbody>
        <TaskComponent v-for="task in tasks" :key="task.id" :task="task"></TaskComponent>
      </tbody>
    </table>


  </div>

</template>

<script>

import TaskComponent from './Task.vue';

  export default {
        data() {
          return{
            tasks: [],
            task: {
              title: '',
              priority: ''
            }
          }
        },

        methods: {

          getTasks(){
            window.axios.get('api/tasks').then(({data})=>{
              data.forEach(task=>{
                this.tasks.push(task)
              });
            });
          },

          store(){
            console.log(this.task.priority)
          }
          
        },

        created(){
          this.getTasks();
        },

        components: {
          TaskComponent
        }
      
  }

</script>

<style>

</style>


