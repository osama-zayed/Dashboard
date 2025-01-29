@extends('layouts.master')

@section('css')
    <div style="display: none">
        @toastr_css
    </div>
@endsection

@section('title')
    تعديل برنامج {{ $program->name }}
@endsection

@section('page-header')
    المراكز
@endsection

@section('sub-page-header')
    تعديل برنامج {{ $program->name }}
@endsection

@section('PageTitle')
    تعديل برنامج {{ $program->name }}
@endsection

<!-- breadcrumb -->
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <br>
                            <form action="{{ route('programs.update', $program->id) }}" method="post" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="name">اسم البرنامج:
                                            <span class="text-danger">* @error('name')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>
                                        <input type="text" name="name"
                                            value="{{ old('name', $program->name) }}"
                                            class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="description">وصف البرنامج:
                                            <span class="text-danger">* @error('description')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </label>
                                        <textarea name="description" class="form-control">{{ old('description', $program->description) }}</textarea>
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit"
                                    title="تعديل"> تعديل البيانات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

