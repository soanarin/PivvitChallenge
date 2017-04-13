@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Place an Order</h3></div>

                <div class="panel-body">

                    <!-- Display Validation Errors -->
                   @include('common.errors')
                   <!-- New transaction Form -->
                     <form id="form-transaction" action="{{ url('basket') }}" method="POST" class="form-horizontal">
 

                        {{ csrf_field() }}

                        <!-- offerings -->
                        <div class="form-group">
                            <label for="item" class="col-sm-3 control-label">Select item</label>

                            <div class="col-sm-6">
                                <select type="text" name="item" id="item" class="form-control">
                                    <option value="">--Select Item--</option>
                                    @foreach ($items as $item)
                                        <option value="{{$item->id}}">{{$item->offering}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>

                        <!-- customer name -->
                        <div class="form-group">
                            <label for="customerName" class="col-sm-3 control-label">Total</label>

                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="customerName" name="customerName" value="{{ old('customerName') }}" placeholder="Name">
                            </div>
                        </div>

                        <!-- quantity -->
                        <div class="form-group">
                            <label for="quantity" class="col-sm-3 control-label">How Many</label>

                            <div class="col-sm-6">
                                <input type="number"  name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" placeholder='00'>
                            </div>
                        </div>

                        <!-- Total Amount -->
                        <div class="form-group">
                            <label for="amount" class="col-sm-3 control-label">Total</label>

                            <div class="col-sm-6">
                                <input type="number" step='0.01' name="amount" id="amount" class="form-control" value="{{ old('amount') }}" placeholder='0.00'>
                            </div>
                        </div>


 
                        <!-- Add transaction Button -->
                        <br>
                        <br>
                        <div class="col-sm-offset-8 col-sm-2">
                            <button id="submit-transaction" type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>    


                    </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
