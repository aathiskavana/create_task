<template>
    <div>

         <button @click="createModal" class="btn btn-primary btn-block">Add New Task</button>
         <table class="table" v-if="tasks">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Body</th>
            </thead>
            <tbody>
                <tr v-for="(task, index) in tasks" :key="index">
                    <td>{{index + 1}}</td>
                    <td>{{task.name}}</td>
                    <td>{{task.body}}</td>
                    <td><button class="btn btn-info">Edit</button></td>
                    <td><button class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
         </table>

         <!-- Create Modal -->
<div class="modal fade" id="create-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="task.name" type="text" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input v-model="task.body" type="text" id="description" class="form-control">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button @click="createTask" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    </div>
</template>

<script>
    export default {

        data(){
            return{
                task:{
                    name: '',
                    body: ''
                },

                tasks: [],

                uri: 'http://localhost/tasks/public/tasks/'
            }
        },

        methods: {

            createModal(){
                $("#create-modal").modal("show");
            },

            createTask(){
                axios.post(this.uri, {name:this.task.name, body:this.task.body}).then(response=>{
                    this.tasks.push(response.data.task);
                    $("#create-modal").modal("show");
                }).catch(error=>{
                    console.log(error);
                });
            },

            loadTasks(){
                axios.get(this.uri).then(response=>{
                    this.tasks = response.data.tasks
                });
            }
        },

        mounted() {
            this.loadTasks();
        }
    }
</script>
