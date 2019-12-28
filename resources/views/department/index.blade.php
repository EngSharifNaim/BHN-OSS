@extends('layouts.app')
@section('content')
    <div class="page-header page-header-light">
        <div class="page-header-content header-elements-inline">
            <div class="page-title">
                <h5>
                    <i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold"></span> - Header
                    <small class="d-block text-muted"></small>
                </h5>
            </div>

            <div class="header-elements">
                <div class="btn-group">
                    <button class="btn bg-indigo-400 legitRipple" data-toggle="modal" data-target="#modal_default">إضافة قسم جديد</button>

                </div>
            </div>
        </div>


        <div class="breadcrumb-line breadcrumb-line-light">
            <div class="breadcrumb">
                <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <a href="components_page_header.html" class="breadcrumb-item">Current</a>
                <span class="breadcrumb-item active">Location</span>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">أقسام البلدية</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            عرض أقسام البلدية في النظام والتحكم بها
        </div>

        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
            <div class="datatable-scroll"><table class="table datatable-show-all dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                    <thead>
                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending">أسماء الأقسام</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">رقم مدير القسم</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">رقم الهاتف الداخلي</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending"></th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"></th><th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">تصدير الملفات</th></tr>
                    </thead>
                    <tbody>
                    @foreach($departments as $department)

                        <tr role="row" class="odd">
                            <td class="sorting_1">{{$department['name']}}</td>
                            <td>{{$department->user['name']}}</td>
                            <td>{{$department['inner_telephone']}}</td>
                            <td><a href="{{url('editDepartment') . '/' . $department->id}}" class="btn btn-primary"><i class="icon icon-database-edit2"></i> </a></td>
                            <td><a href="{{url('deleteDepartment') . '/' . $department->id}}" class="btn btn-danger"><i class="icon icon-droplet2"></i></a></td>
                            <td class="text-center">
                                <div class="list-icons">
                                    <div class="dropdown">
                                        <a href="#" class="list-icons-item" data-toggle="dropdown" aria-expanded="false">
                                            <i class="icon-menu9"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" x-out-of-boundaries="" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(22px, 19px, 0px);">
                                            <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                            <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table></div>
        </div>

    </div>
    <div id="modal_default" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">إضافة قسم جديد</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <form action="{{url('addDepartment')}}" method="post">
                        @csrf
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">بيانات إضافة قسم </legend>

                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">اسم القسم</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" class="form-control" placeholder="ادخل اسم القسم الجديد ">
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">رقم الهاتف الداخلي</label>
                                <div class="col-lg-10">
                                    <input type="text" name="inner_telephone" class="form-control" placeholder="ادخل رقم الهاتف الداخلي">
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-form-label col-md-3">اختر مدير القسم</label>
                                <select class="form-control col-md-8 select-search " name='manger_id'  id="manger_id" onchange="" data-fouc="" tabindex="-1" aria-hidden="true">
                                    <option value="0">اختر المدير</option>
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
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
    </div>
    <!-- /basic modal -->

@endsection