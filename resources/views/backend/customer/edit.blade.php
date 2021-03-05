@extends('backend.master')
@section('title', 'Sửa khách hàng')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <h3 class="title1">Edit Customer</h3>
            <form method="post" action="{{ route('customer.update', $customer->id) }}">
                @csrf
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $customer->name }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('name') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" value="{{ $customer->phone }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('phone') }}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="{{ $customer->address }}">
                    @if($errors->any())
                        <p class="alert-danger my-sm-4">{{ $errors->first('address') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>

@endsection
