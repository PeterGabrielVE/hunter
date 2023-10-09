@extends('layouts.app')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
@include('layouts.header')
<div class="row">
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home')}}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('scanner')}}" >Captura de Datos</a></li>
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
              Datos Estadísticos</p>
              <h3 class="font-weight-medium text-left mb-0">Dashboard</h3>
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
  
  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 grid-margin stretch-card">
    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-hotel icon-lg"></i>
            </div>
          </div>
          <h3 class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          Hoteles </h3>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-note-text icon-lg"></i>
            </div>
          </div>
          <h3 class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          Registros </h3>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-database icon-lg"></i>
            </div>
          </div>
          <h3 class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          Alertas </h3>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-cube-outline icon-lg"></i>
            </div>
          </div>
          <h3 class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          Eventos </h3>
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Visitantes Totales</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Visitantes</p>
            </div>
           
          </div>
        </div>
        <div class="chart-container">
          <canvas id="dashboard-area-chart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-12 col-md-12 col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-md-4 d-flex align-items-center">
            <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
          </div>
          <div class="col-md-4 d-flex align-items-center">
            <canvas id="UsersDoughnutChart2" class="400x160 mb-4 mb-md-0" height="200"></canvas>
          </div>
          <div class="col-md-4 d-flex align-items-center">
            <canvas id="UsersDoughnutChart3" class="400x160 mb-4 mb-md-0" height="200"></canvas>
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
        <h4 class="card-title">Seguimiento</h4>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Procedencia</h5>
        <div class="fluid-container">
  
        </div>
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
