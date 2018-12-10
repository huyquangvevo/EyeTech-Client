@extends('layouts.master')
@section('title', 'User Edit')
@section('content')
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="col_one_third nobottommargin">
                    <div class="well well-lg nobottommargin">
                        <h3>List Imgender</h3>
                    </div>
                </div>
                <div class="col_two_third col_last nobottommargin" id="vue">
                    <h3>Customer Info</h3>
                    <p>Update customer info here!</p>
                    <customer-update-component id="{{ $id }}"></customer-update-component>
                </div>
            </div>
        </div>
    </section>
@endsection
