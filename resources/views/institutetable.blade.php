    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">


                        <div class="card-header">
                            <h3 class="card-title">Tabla de mantenimiento</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <!-- DataTables -->
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <th class="sorting">ID</th>
                                    <th class="sorting">Description</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($institutes as $institute)
                                        <tr>
                                            <td>{{ $institute->id }}</td>
                                            <td>{{ $institute->description }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="instituteEdit('{{ $institute->id }}'); instituteUp();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="instituteDestroy('{{ $institute->id }}'); return false"></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                                <!-- /.content -->
                                {{ $institutes->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        datatableResponsive();

        function datatableResponsive() {
            $("#example1").DataTable({
                "info": false,
                "responsive": false,
                "autoWidth": false,
                "paging": false,
                "searching": true,
                "ordering": false
            });
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": false,
            });
        }

    </script>