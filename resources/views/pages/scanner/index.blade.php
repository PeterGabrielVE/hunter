@extends('layouts.app')

@section('content')
@include('layouts.header')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Captura de Datos</a></li>
        </ol>
        </nav>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
        <div class="card card-statistics">
        <div class="card-body">
            <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
                <i class="mdi mdi-laptop text-info icon-lg"></i>
                <div class="fluid-container">
                <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
                Captura de Datos</p>
                <h3 class="font-weight-medium text-left mb-0">Escaneo de Pasaportes</h3>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 grid-margin stretch-card">
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-revenue">
            <div class="card-body d-flex align-items-center">
            <div class="d-flex flex-grow">
                <div class="mr-auto">
                <i class="mdi mdi-calendar icon-lg"></i>
                <h4 class="text-white"> Calendario </h4>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-revenue">
            <div class="card-body d-flex align-items-center">
            <div class="d-flex flex-grow">
                <div class="mr-auto">
                <i class="mdi mdi-history icon-lg"></i>
                <h4 class="text-white"> Historial </h4>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-revenue">
            <div class="card-body d-flex align-items-center">
            <div class="d-flex flex-grow">
                <div class="mr-auto">
                <i class="mdi mdi-help-circle icon-lg"></i>
                <h4 class="text-white"> Ayuda </h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Pasaporte</h4>
        <section class="bg-diffrent">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <form method="POST" action="{{ route('scanner_post') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="file-upload-contain">
                                <input data="multiplefileupload" name="file" type="file" accept=".jpg,.jpeg,.gif,.png" />
                            </div>
                            <div class="text-right">
                                <button class="btn btn-success" type="submit">Escanear</button>
                                <button class="btn btn-danger">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>

@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush
