@extends('layouts.backend.master')


@section('title')
    {{trans('backend/main-sidebar.categories')}}
@endsection


@section('css')

@endsection


@section('content')

    @include('backend.categories.message')

    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">{{trans('backend/main-sidebar.categories')}}</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pe-0 float-start float-sm-end ">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}" class="default-color">{{trans('backend/main-sidebar.Dashboard')}}</a></li>
                    <li class="breadcrumb-item active">{{trans('backend/main-sidebar.categories')}}</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- main body -->
    @if(\Illuminate\Support\Facades\App::getLocale() == 'en')
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="d-block d-md-flex justify-content-between">
                            <div class="d-block">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddCategories">{{trans('backend/categories.add new category')}}</button>
                            </div>

                            @include('backend.categories.create')

                            <div class="d-block d-md-flex clearfix sm-mt-20">

                                <div class="widget-search ml-0 clearfix">
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="form-control" placeholder="{{trans('backend/categories.search')}}">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-15">
                            <table class="table center-aligned-table mb-0">
                                <thead>
                                <tr class="text-dark">
                                    <th>#</th>
                                    <th>{{trans('backend/categories.name')}}</th>
                                    <th>{{trans('backend/categories.notes')}}</th>
                                    <th>{{trans('backend/categories.process')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $categorie)
                                    <tr>
                                        <td>{{$categorie->id}}</td>
                                        <td>{{$categorie->name}}</td>
                                        <td>{{$categorie->note == true ? $categorie->note : trans('backend/categories.no notes') }}</td>
                                        <td>

                                            <button class="btn btn-success btn-sm" title="{{trans('backend/categories.edit')}}" data-bs-toggle="modal" data-bs-target="#Editcategorie{{$categorie->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>



                                            <button class="btn btn-danger btn-sm" title="{{trans('backend/categories.delete')}}" data-bs-toggle="modal" data-bs-target="#Delete{{$categorie->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>

                                    </tr>

                                    {{--                                    note this include recur many times in foreach--}}
                                    @include('backend.categories.edit')
                                    @include('backend.categories.delete')

                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    @else
        <div class="row">
            <div class="col-xl-12 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="d-block d-md-flex justify-content-between">
                            <div class="d-block">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#AddCategories">{{trans('backend/categories.add new category')}}</button>
                            </div>

                            @include('backend.categories.create')

                            <div class="d-block d-md-flex clearfix sm-mt-20">

                                <div class="widget-search ml-0 clearfix">
                                    <i class="fa fa-search"></i>
                                    <input type="search" class="form-control" placeholder="{{trans('backend/categories.search')}}">
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive mt-15">
                            <table class="table center-aligned-table mb-0">
                                <thead>
                                <tr class="text-dark">
                                    <th>#</th>
                                    <th>{{trans('backend/categories.name')}}</th>
                                    <th>{{trans('backend/categories.notes')}}</th>
                                    <th>{{trans('backend/categories.process')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $categorie)
                                    <tr>
                                        <td>{{$categorie->id}}</td>
                                        <td>{{$categorie->name}}</td>
                                        <td>{{$categorie->note == true ? $categorie->note : trans('backend/categories.no notes') }}</td>
                                        <td>

                                            <button class="btn btn-success btn-sm" title="{{trans('backend/categories.edit')}}" data-bs-toggle="modal" data-bs-target="#Editcategorie{{$categorie->id}}">
                                                <i class="fa fa-edit"></i>
                                            </button>



                                            <button class="btn btn-danger btn-sm" title="{{trans('backend/categories.delete')}}" data-bs-toggle="modal" data-bs-target="#Delete{{$categorie->id}}">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>

                                    </tr>

{{--                                    note this include recur many times in foreach--}}
                                    @include('backend.categories.edit')
                                    @include('backend.categories.delete')

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection




@section('js')

@endsection
