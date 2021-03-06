@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">تعديل قسم </h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">

            <form action="{{url('editDepartment') . '/' . $departments->id}}" method="post">
                @csrf

                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">بيانات إضافة قسم </legend>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">اسم القسم</label>
                        <div class="col-lg-10">
                            <input type="text" name="name" class="form-control" value="{{$departments->name}}">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">رقم الهاتف الداخلي</label>
                        <div class="col-lg-10">
                            <input type="text" name="inner_telephone" class="form-control" value="{{$departments->inner_telephone}}">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-form-label col-lg-2">اختر مدير القسم</label>
                        <select class="form-control select-search " name='manger_id'  id="manger_id" onchange="" data-fouc="" tabindex="-1" aria-hidden="true">
                            <option value="0">اختر المدير</option>
                            @foreach($users as $user)
                                @if($user->id == $departments->manger_id)
                                <option selected value="{{$user->id}}">{{$user->name}}</option>
                                @else
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                            @endforeach
                        </select>
                    </div>


                </fieldset>

                <div class="text-right">
                    <button type="submit" class="btn btn-primary legitRipple">حفظ <i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection