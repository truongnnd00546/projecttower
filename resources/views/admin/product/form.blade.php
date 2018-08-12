@extends('layout.master')
@section('main')
    <div class="card">
        <div class="card-body">
            <div class="float-left">
                <h2 class="card-title">
                    Create new product</h2>
                <h6 class="card-subtitle mb-2 text-muted">Please enter the information below</h6>
            </div>
            <div class="clearfix"></div>
            <div class="card-body">
                <form action="/product" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>
                            Name : </label>
                        <input type="text" name="name" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <label>Image :</label>
                        <input type="text" name="image" class="form-control w-50">
                    </div>
                    <div class="form-group">
                        <label>Price :</label>
                        <input type="" name="unitprice" class="form-control w-25">
                    </div>
                    <div class="form-group">
                        <label>Sale :</label>
                        <input type="" name="promotionprice" class="form-control w-25">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="btn btn-outline-primary">
                        <input type="reset" value="Reset" class="btn btn-outline-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection