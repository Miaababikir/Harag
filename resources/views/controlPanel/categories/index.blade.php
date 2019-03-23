@extends('layouts.cpanel')

@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Control Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories Table</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm">

                                <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                   data-target="#add"><i class="fa fa-plus"></i> New Category</a>

                                <input type="text" name="table_search" class="form-control float-right"
                                       placeholder="Search">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Icon</th>
                                <th></th>
                            </tr>
                            <tr v-for="category in categories">
                                <td>@{{ category.id }}</td>
                                <td>@{{ category.name }}</td>
                                <td>@{{ category.icon }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit" @click="editCategory(category.id)"><i
                                            class="fa fa-edit"></i> Edit
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#delete"><i class="fa fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add new Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" @submit.prevent="addCategory">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-2 control-label">Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Category name" v-model="name"
                                       required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-2 control-label">Icon</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Paste your icon name here"
                                       v-model="icon" required>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" @submit.prevent="updateCategory">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-2 control-label">Category</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Category name" v-model="name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-2 control-label">Category icon</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="Paste your icon name here"
                                       v-model="icon">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are sure to <strong>DELETE</strong> this Category?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        new Vue({
            el: '#app',
            data: {
                categories: {!! $categories !!},
                id: '',
                name: '',
                icon: ''
            },
            methods: {

                getCategories() {
                    axios.get('/control-panel/categories')
                        .then(response => {
                            this.categories = response.data;
                        });
                },

                addCategory() {
                    axios.post('/control-panel/categories', {
                        name: this.name,
                        icon: this.icon
                    })
                        .then(response => {
                            window.Alert.success('Category Added!');
                            this.categories.push(response.data);
                            $('#add').modal('hide');
                            this.clearForm();
                        })
                        .catch(error => {
                            window.Alert.error('Oops! Something went wrong!');
                        });
                },

                editCategory(id) {
                    let category = this.findCategory(id);

                    this.name = category.name;
                    this.icon = category.icon;
                    this.id = category.id;
                },

                updateCategory() {
                    axios.put(`/control-panel/categories/${this.id}`, {
                        name: this.name,
                        icon: this.icon
                    })
                        .then(response => {
                            this.getCategories();
                            $('#edit').modal('hide');
                            window.Alert.success('Category Updated!');
                            this.clearForm();
                        })
                        .catch(error => {
                            console.log(error);
                            window.Alert.error('Oops! Something went wrong!')
                        });
                },

                findCategory(id) {
                    return this.categories.find((category) => category.id === id);
                },

                clearForm() {
                    this.name = "";
                    this.icon = "";
                }
            },
        });

    </script>
@endsection
