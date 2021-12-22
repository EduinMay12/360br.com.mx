@can('Administrador')
    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ url('users') }}">
                <div class="card" style="background-color: #ccccff">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Usuarios</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon shadow text-center border-radius-md">
                                    <i class="fa fa-user text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ url('roles') }}">
                <div class="card" style="background-color: #ccccff">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Roles</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon shadow text-center border-radius-md">
                                    <i class="fas fa-dice-d20 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <a href="{{ url('header') }}">
                <div class="card" style="background-color: #ccccff">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Sistema 360</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    <!--span class="text-danger text-sm font-weight-bolder">-2%</span-->
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon shadow text-center border-radius-md">
                                    <i class="fa fa-cog text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-12 col-sm-12 mb-xl-1 mb-4">
            <a href="{{ url('header') }}"><br>
                <div class="card" style="background-color: #ccccff">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Pedidos</p>
                                    <h5 class="font-weight-bolder mb-0">
                                    <!--span class="text-danger text-sm font-weight-bolder">-2%</span-->
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon shadow text-center border-radius-md">
                                    <i class="fas fa-file-invoice-dollar text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endcan
