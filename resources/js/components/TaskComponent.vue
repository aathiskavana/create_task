<template>
    <div>
<<<<<<< HEAD

         <button @click="createModal" class="btn btn-primary btn-block">Add New Task</button>
         <table class="table" v-if="tasks">
=======
        <button @click="createModal" class="btn btn-primary btn-block">Add New Task</button>

        <table class="table" v-if="tasks">
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
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
<<<<<<< HEAD
         </table>

         <!-- Create Modal -->
=======
        </table>

        <!-- Create Modal -->
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
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
        
<<<<<<< HEAD
        <div class="form-group">
            <label for="name">Name</label>
            <input v-model="task.name" type="text" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input v-model="task.body" type="text" id="description" class="form-control">
        </div>
=======
          <div class="form-group">
              <label for="name">Name</label>
              <input v-model="task.name" type="text" id="name" class="form-control">
          </div>

          <div class="form-group">
              <label for="description">Description</label>
              <input v-model="task.body" type="text" id="description" class="form-control">
          </div>
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<<<<<<< HEAD
        <button @click="createTask" type="button" class="btn btn-primary">Save changes</button>
=======
        
        <button @click="tasks.push({name: task.name, body: task.body}), createTask" type="button" class="btn btn-primary">Save changes</button>
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
      </div>
    </div>
  </div>
</div>
<<<<<<< HEAD

=======
                
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
    </div>
</template>

<script>
    export default {

        data(){
            return{
                task:{
                    name: '',
                    body: ''
<<<<<<< HEAD
                },

                tasks: [],

                uri: 'http://localhost/tasks/public/tasks/'
=======

                },

                tasks: [],
                uri: 'http://localhost/nama_projectmu/public/tasks'
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
            }
        },

        methods: {

            createModal(){
                $("#create-modal").modal("show");
            },
<<<<<<< HEAD

            createTask(){
                axios.post(this.uri, {name:this.task.name, body:this.task.body}).then(response=>{
                    this.tasks.push(response.data.task);
                    $("#create-modal").modal("show");
                }).catch(error=>{
                    console.log(error);
                });
=======
            
            createTask(){ 
                axios.post(this.uri, {name: this.task.name, body:this.task.body}).then(response=>{
                    this.tasks.push(response.data.task);
                    $("#create-modal").modal("hide");
                }).catch(error=>{
                    console.log(error);
                });
  
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
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
