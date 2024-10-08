@extends('admin.layouts.template')
@section('page_title')
    Edit Category - Single Ecom
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Halaman/</span> Edit Kategori Makanan</h4>
        <div class="col-xxl">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Edit Kategori Makanan</h5>
                    <small class="text-muted float-end">Input Informasi</small>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('updatefoodtype') }}" method="POST">
                        @csrf

                        <input type="hidden" name="id" value="{{$category_info->id}}" id="id">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Induk Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="parent_id" name="parent_id"
                                    aria-label="Default select example">
                                    <option value="{{ $parent_title->id ?? '0' }}" selected>
                                        {{ $parent_title->title ?? 'ROOT' }}</option>
                                    @foreach ($typeid as $type)
                                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $category_info->title }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="basic-default-name">Deskripsi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $category_info->description }}" />
                            </div>
                        </div>

                        <div class="row mb-3">
                            {{-- <label class="col-sm-2 col-form-label" for="basic-default-name">Order</label> --}}
                            <div class="col-sm-10">
                                <input type="hidden" class="form-control" id="order" name="order"
                                    value="{{ $category_info->order }}" />
                            </div>
                        </div>

                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update Kategori</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
