@extends('users.master')
@section('title', 'Division - Dashboard Management')

@section('content')
<div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-home"></i>
                </span> Division </h3>
            </div>           

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body text-info">
                  <h5>Nama Divisi: {{ $division->name }}</h5>
                  <h5>Kepala Divisi: {{ $division->headof }}</h5>
                  <h5>Status Divisi: {{ $division->status }}</h5>
                  <h5>Last Updated: {{ $division->updated_at }}</h5><br>
                <form class="" action="{{ route('division.edit',$division->id) }}" method="POST">
                @csrf
                @method("DELETE")
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>

                  </div>
                </div>
              </div>
            </div>

@endsection;            