<template>

  <div class="app-component">
    <loading :active.sync="isLoading">
    </loading>
    
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
        <TaskComponent v-for="task in tasks" :key="task.id" :task="task" @delete="remove"></TaskComponent>
      </tbody>
    </table>


  </div>

</template>

<script>

import TaskComponent from './Task.vue';
// Import component
import Loading from 'vue-loading-overlay';
// Import stylesheet
import 'vue-loading-overlay/dist/vue-loading.min.css';

  export default {
        data() {
          return{
            isLoading: false,
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
            // Validate
            if(this.checkInputs()){

              this.isLoading = true;
              window.axios.post('/api/tasks', this.task).then(savedTask => {
                // push data into array
                this.tasks.push(savedTask.data);
                // empty title after save
                this.task.title = '';
                this.task.priority = '';
                this.isLoading = false;
              });

            }

          },

          checkInputs(){
            if(this.task.title && this.task.priority) return true;
          },

          remove(id){
            this.isLoading = true;
            window.axios.delete(`/api/tasks/${id}`).then(() =>{
              let index = this.tasks.findIndex(task => task.id === id);
              this.tasks.splice(index, 1);
              this.isLoading = false;
            });
          }

        },

        created(){
          this.getTasks();
        },

        components: {
          TaskComponent,
          Loading
        }
      
  }

</script>

<style>

</style>


