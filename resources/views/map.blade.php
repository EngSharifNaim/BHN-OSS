@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Binding UI with the widget</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Location:</label>
                <input type="text" class="form-control" id="us2-address">
            </div>

            <div class="form-group">
                <label>Radius:</label>
                <input type="text" class="form-control" id="us2-radius">
            </div>

            <div class="form-group">
                <div id="us2" class="map-container" style="position: relative; overflow: hidden;">
                </div>

            </div>

            <div class="form-group">
                <label>Latitude:</label>
                <input type="text" class="form-control" id="us2-lat">
            </div>

            <div class="form-group">
                <label>Longitude:</label>
                <input type="text" class="form-control" id="us2-lon">
            </div>
        </div>
    </div>
@endsection
