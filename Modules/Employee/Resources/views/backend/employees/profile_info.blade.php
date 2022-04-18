@extends('backend.layouts.app')

@section('title')
    {{ 'Profile Info' }}
@endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>Profile Info
        </x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
    <div class="card profile-info">
        <div class="card-body">
            <div class="row border">
                <div class="col-3 text-center p-2">
                    <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg" width="300"
                        height="300" />
                </div>
                <div class="col-9 text-center">
                    <div class="row border-left border-bottom" style="height: 100px;">
                        <div class="col-4 border-right">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                        <div class="col-4 border-right">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                        <div class="col-4 border-right">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                    </div>
                    <div class="row border-left border-bottom" style="height: 100px;">
                        <div class="col-4 border-right">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                        <div class="col-4 border-right">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                        <div class="col-4">
                            <h4>Name:</h4>
                            <p>Tushar</p>
                        </div>
                    </div>
                    <div class="row border-left" style="height: 116px;">
                        <div class="col-12">
                            <h4>Address:</h4>
                            <p>Tushar</p>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.row-->

            <div class="row border-left border-bottom text-center">
                <div class="col-3 border-right">
                    <h4>Name:</h4>
                    <p>Tushar</p>
                </div>
                <div class="col-3 border-right">
                    <h4>Name:</h4>
                    <p>Tushar</p>
                </div>
                <div class="col-3 border-right">
                    <h4>Name:</h4>
                    <p>Tushar</p>
                </div>
                <div class="col-3 border-right">
                    <h4>Name:</h4>
                    <p>Tushar</p>
                </div>
            </div>
            <div class="row border-left border-bottom text-center">
              <div class="col-3 border-right">
                  <h4>Name:</h4>
                  <p>Tushar</p>
              </div>
              <div class="col-3 border-right">
                  <h4>Name:</h4>
                  <p>Tushar</p>
              </div>
              <div class="col-3 border-right">
                  <h4>Name:</h4>
                  <p>Tushar</p>
              </div>
              <div class="col-3 border-right">
                  <h4>Name:</h4>
                  <p>Tushar</p>
              </div>
          </div>
        </div>

    </div>
@endsection
