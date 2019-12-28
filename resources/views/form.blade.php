@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Multiple select</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="{{url('test')}}" method="post">
                @csrf
                <input type="text" class="form-control" name="name">
                <input type="text" class="form-control" name="department_id">

            <div class="form-group">
                <label>Multiple select</label>
                <select multiple="" name="components[]" class="form-control select select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                    <optgroup label="Mountain Time Zone">
                        <option value="AZ" selected="">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="WY">Wyoming</option>
                    </optgroup>
                    <optgroup label="Central Time Zone">
                        <option value="AL">Alabama</option>
                        <option value="IA" selected="">Iowa</option>
                        <option value="KS" selected="">Kansas</option>
                        <option value="KY">Kentucky</option>
                    </optgroup>
                </select>
            </div>
                <button type="submit">submit</button>
            </form>
        </div>
    </div>
    @endsection
