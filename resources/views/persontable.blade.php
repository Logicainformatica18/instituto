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
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>

                                    <th>Código</th>
                                    <th>Dni</th>
                                    <th>Paterno</th>
                                    <th>Materno</th>
                                    <th>Nombres</th>
                                    <th>Celular</th>
                                    <th>Foto</th>
                                    <th>Cargo</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($persons as $person)
                                        <tr>
                                            <td>{{ $person->id }}</td>
                                            <td>{{ $person->dni }}</td>
                                            <td>{{ $person->firstname }}</td>
                                            <td>{{ $person->lastname }}</td>
                                            <td>{{ $person->names }}</td>
                                            <td>{{ $person->cellphone }}</td>
                                            <td>{{ $person->photo }}</td>
                                            <td>{{ $person->positionid }}</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-success note-icon-pencil"
                                                    data-toggle="modal" data-target="#exampleModal"
                                                    onclick="personEdit('{{ $person->id }}'); Up();  return false"></button>

                                                <!-- <button class="note-icon-pencil" ></button> -->
                                                <button class="btn btn-danger note-icon-trash" onclick="personDestroy('{{ $person->id }}'); return false"></button>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                                <!-- /.content -->
                                {{ $persons->onEachSide(1)->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

