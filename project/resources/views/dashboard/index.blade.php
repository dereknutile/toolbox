@extends('_layouts/app')

@section('content')
    <section>
        <div class="container-fluid">
            @include('dashboard/_includes/stats')
        </div>
        <!-- /.container-fluid -->
    </section>
    <section>
        <div class="dashboard-tiles container-fluid is-subtle">
            <div class="col-md-8 padless">
                <div class="col-md-6 padless">
                    @include('dashboard/_includes/alerts')
                </div>
                <div class="col-md-6 padless">
                    @include('dashboard/_includes/messages')
                </div>
                <div class="col-md-12 padless">
                    @include('dashboard/_includes/wos')
                </div>
            </div>
            <div class="col-md-4 paddless">
                @include('dashboard/_includes/inoutboard')
            </div>
        </div>
    </section>
@stop
