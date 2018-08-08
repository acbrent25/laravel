<template>

  <div class="app-component">
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Task Title</th>
          <th scope="col">Priority</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
        <tr>
          <td>
            <input type="text" id="task" class="form-control">
          </td>
          
          <td>
            <select name="select" id="select" class="form-control">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
            </select>
          </td>

          <td> <button class="btn btn-primary">Add</button> </td>
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
            tasks: [
              { id:1, title: 'Task 1', priority: 'High'},
              { id:2, title: 'Task 2', priority: 'Medium'},
              { id:3, title: 'Task 3', priority: 'High'},
              { id:4, title: 'Task 4', priority: 'Low'}
            ],
            message: 'HELLO FROM HERE'
          }
        },
        components: {TaskComponent}
  }
</script>

<style>

</style>


