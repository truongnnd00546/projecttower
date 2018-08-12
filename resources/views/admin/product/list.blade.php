@extends('layout.master')
@section('main')
    <div class="container-fluid">
        <div class="row">
        </div>
        <table class="table">
            <thead>
            <tr class="row">
                <th class="col-md-1"></th>
                <th class="col-md-1">ID</th>
                <th class="col-md-1">IMAGE</th>
                <th class="col-md-1">NAME</th>
                <th class="col-md-1">DESCRIPTION</th>
                <th class="col-md-2">PRICE</th>
                <th class="col-md-2 ">SALE</th>
                <th class="col-md-3 ">ACTION</th>
            </tr>
            </thead>
            <tbody>
            <tr class="row">
                @foreach($obj as $item)
                    <td class="col-md-1"></td>
                    <td class="col-md-1">{{$item ->id}}</td>
                    <td class="col-md-1"><div class="card" style="width: 80px;height: 70px;background-image: url('{{$item->image}}'); background-size: cover">
                        </div></td>
                    <td class="col-md-1">{{$item->name}}</td>
                    <td class="col-md-1">{{$item->description}}</td>
                    <td class="col-md-2">{{$item->unitprice}}</td>
                    <td class="col-md-2">{{$item->promotionprice}}</td>
                    <td class="col-md-3">{{$item->unit}}</td>
                @endforeach
            </tr>
            </tbody>
        </table>
    </div>
    @endsection