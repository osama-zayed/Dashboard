@extends('layouts.master')

@section('title')
    البرامج
@endsection

@section('page-header')
    البرامج
@endsection

@section('sub-page-header')
    عرض البرامج
@endsection

@section('PageTitle')
    البرامج
@endsection

<!-- breadcrumb -->
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <a href="{{ route('programs.create') }}" type="button" class="btn btn-primary btn-sm text-light" role="button" data-toggle="modal"
                        data-target="#create" aria-pressed="true" title="اضافة برنامج جديد">
                        <i class="ti-plus"></i>
                        اضافة برنامج
                    </a>
                    <br><br>
                    @include('page.programs.create')

                    <div class="table-responsive">
                        <table id="datatable" class="table table-hover table-sm table-bordered p-0" data-page-length="50"
                            style="text-align: center">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم المشروع</th>
                                    <th>وصف المشروع</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($programs as $program)
                                    <tr>
                                        <td>{{ $program['id'] }}</td>
                                        <td>{{ $program['name'] }}</td>
                                        <td>{{ $program['description'] }}</td>
                                        <td>
                                            <a href="{{ route('programs.edit', $program['id']) }}"
                                                class="btn btn-info btn-sm" role="button" aria-pressed="true"
                                                title="تعديل"><i class="fa fa-edit"></i></a>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#delete_programs{{ $program['id'] }}" title="حذف"><i
                                                    class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @include('page.programs.destroy', ['program' => $program])
                                @empty
                                    <tr>
                                        <td colspan="4">لا توجد بيانات</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

