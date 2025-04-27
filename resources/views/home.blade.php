@extends('admin.layouts.app')
@section('title', 'Dashboard')
@section('content')
    <section id="dashboard" class="mt-4">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h5>Total Users</h5>
                    <p class="display-6">1,234</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h5>Total Tickets Sold</h5>
                    <p class="display-6">5,678</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-3">
                    <h5>Revenue</h5>
                    <p class="display-6">Rp 123,456,789</p>
                </div>
            </div>
        </div>
    </section>
@endsection
