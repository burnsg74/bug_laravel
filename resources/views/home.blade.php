@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9"
                 style="background: greenyellow">
                <div class="row">
                    <div class="col-md-12"
                         style="background: greenyellow">Income
                    </div>
                    <div class="col-md-12" style="background: white">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Source</th>
                                <th scope="col">Due</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Cleared</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($incomes as $income)
                            <tr>
                                <td>{{$income->source}}</td>
                                <td>{{$income->due_at}}</td>
                                <td>{{$income->amount}}</td>
                                <td>{{$income->cleared}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"
                         style="background: yellow">Bank Account
                    </div>
                    <div class="col-md-4"
                         style="background: yellow; float: right; text-align: right">Current Balance: $1,200.00
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8"
                         style="background: lightcoral">Credit Card
                    </div>
                    <div class="col-md-4"
                         style="background: lightcoral; float: right; text-align: right">Current Balance: $-10,200.00
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"
                         style="background: lightsteelblue">Bills
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"
                         style="background: lightgreen">Loans
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"
                         style="background: lightgray">Summary
                    </div>
                </div>
            </div>
            <div class="col-md-3"
                 style="background: lightskyblue">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Item</th>
                        <th scope="col">Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
