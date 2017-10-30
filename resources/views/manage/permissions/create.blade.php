@extends ('layouts.app')
<head>
  <title>MSS | Create Permission</title>
</head>
@section ('content')

    <div class="row  m-t-10">
      <div class="pull-right">
        {{ Breadcrumbs::render('permissions') }}
      </div>
      <div class="col-md-6 col-offset-2">
        <h1>Create Permission</h1>
      </div>
      <hr class="m-t-0">
    </div>

    <div class="row">
      <div class="col">
        <form action="{{route('permissions.store')}}" method="POST">
          {{csrf_field()}}

          <div class="form-group">
            <label class="radio">
              <input type="radio" name="permission_type" id="radio1" value="basic" v-model="permissionType"> Basic Permission
            </label>
            <label class="radio">
              <input type="radio" name="permission_type" id="radio2" value="crud" v-model="permissionType"> CRUD Permission
            </label>
          </div>



          <div class="form-group" v-if="permissionType == 'basic'" >
            <label for="display_name" class="control-label">Name (Display Name)</label>
              <input type="text" class="form-control" name="display_name" id="display_name" >
          </div>

            <div class="form-group" v-if="permissionType == 'basic'">
              <label for="name" class="control-label" >Slug</label>
                <input type="text" class="form-control" name="name" id="name"/>
            </div>


            <div class="form-group" v-if="permissionType == 'basic'">
              <label for="description" class="control-label">Description</label>
                <input type="text" class="form-control" name="description"
                id="description" placeholder="Describe what this permission does">
            </div>


              <div class="form-group"  v-if="permissionType == 'crud'">
                <label for="resource" class="control-label">Resource</label>
                  <input type="text" class="form-control" name="resource" id="resource" v-model="resource"
                   placeholder="The name of the resource">
              </div>



          <div class="row">
            <div class="col-md-3">
                <div class="form-group" v-if="permissionType == 'crud'">
                  <input type="checkbox"  value="create" v-model="crudSelected">Create</input>
                  <input type="checkbox"  value="read" v-model="crudSelected">Read</input >
                  <input type="checkbox"  value="update" v-model="crudSelected">Update</input >
                  <input type="checkbox"  value="delete" v-model="crudSelected">Delete</input >
              </div>
            </div> <!-- end of .column -->

            <input type="hidden" name="crud_selected" :value="crudSelected">

            <div class="col-md-6">
              <table class="table" v-if="resource.length >= 3">
                <thead>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  <tr v-for="item in crudSelected">
                    <td v-text="crudName(item)"></td>
                    <td v-text="crudSlug(item)"></td>
                    <td v-text="crudDescription(item)"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <hr />
          <button class="btn btn-success">Create Permission</button>
        </form>
      </div>

    </div>


  @endsection

  @section('scripts')
    <script>
      var app = new Vue({
        el: '#app',
        data: {
          permissionType: 'basic',
          resource: '',
          crudSelected: ['create', 'read', 'update', 'delete']
        },
        methods: {
          crudName: function(item) {
            return item.substr(0,1).toUpperCase() + item.substr(1) + " " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
          },
          crudSlug: function(item) {
            return item.toLowerCase() + "-" + app.resource.toLowerCase();
        },
          crudDescription: function(item) {
          return "Allow a User to " + item.toUpperCase() + " a " + app.resource.substr(0,1).toUpperCase() + app.resource.substr(1);
          }
        }
      });
    </script>
  @endsection
