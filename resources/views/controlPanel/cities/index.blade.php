@extends('layouts.cpanel')

@section('header')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Control Cities</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Cities</li>
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
                        <h3 class="card-title">Cities Table</h3>

                        <div class="card-tools">

                            <div class="input-group input-group-sm">

                                <a href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                   data-target="#add"><i class="fa fa-plus"></i> New City</a>

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
                                <th></th>
                            </tr>
                            <tr v-for="city in cities">
                                <td>@{{ city.id }}</td>
                                <td>@{{ city.name }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#edit" @click="editCity(city.id)"><i class="fa fa-edit"></i> Edit
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Add new City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" @submit.prevent="addCity">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-2 control-label">City</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="City name" v-model="name">
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
                    <h5 class="modal-title" id="exampleModalCenterTitle">Edit City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" @submit.prevent="updateCity">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-2 control-label">City</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" placeholder="City name" v-model="name">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info">Save</button>
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are sure to <strong>DELETE</strong> this city?
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
                cities: {!! $cities !!},
                id: '',
                name: ''
            },

            methods: {
                getCities() {
                    axios.get('/control-panel/cities').then(response => this.cities = response.data);
                },

                addCity() {
                    axios.post('/control-panel/cities', {
                        name: this.name
                    })
                        .then(response => {
                            window.Alert.success('City Added!');
                            this.cities.push(response.data);
                            $('#add').modal('hide');
                            this.clearForm();
                        })
                        .catch(error => {
                            window.Alert.error('Oops! Something went wrong!');
                        });
                },

                editCity(id) {
                    let city = this.findCity(id);
                    this.id = city.id;
                    this.name = city.name;
                },

                updateCity() {
                    axios.put(`/control-panel/cities/${this.id}`, {
                        name: this.name
                    })
                        .then(response => {
                            this.getCities();
                            $('#edit').modal('hide');
                            window.Alert.success('City Updated!');
                            this.clearForm();
                        })
                        .catch(error => {
                            window.Alert.error('Oops! Something went wrong!')
                        });
                },

                findCity(id) {
                    return this.cities.find((city) => city.id === id);
                },

                clearForm() {
                    this.name = "";
                }
            }
        });

    </script>

@endsection
