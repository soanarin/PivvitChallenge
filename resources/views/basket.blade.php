@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">
                Your Order
            </div>

            <div class="panel-body">
               
                <table id="Order" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Purchase ID</th>

                            <th>Offering Title</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr><td>Total amount: <span class="cj_total"></span></td></tr>
                    </tfoot>
                    <tbody>
                        @foreach ($purchases as $purchase)
                            <tr class="cj_purchase">
                                <td>{{ $purchase->id }}</td>
                                <td>{{ App\Offering::find($purchase->offeringId)->offering }}</td>
                                <td class="cj_quantity">{{ $purchase->quantity }}</td>
                                <td class="cj_price">{{ App\Offering::find($purchase->offeringId)->offering }}</td>
                                <td class="cj_subtotal"></td>
                           
                            </tr>
                        @endforeach                       
                    </tbody>
                </table>






            </div>
        </div>
            
    </div>
@endsection
