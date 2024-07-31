@extends('admin.layouts.create_or_edit')

@section('page-title')
    Create new Project
@endsection

@section('form-action')
    {{ route('admin.projects.store') }}
@endsection

@section('form-method')
    @method("POST")
@endsection

