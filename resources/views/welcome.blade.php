@extends('layouts.app')
@section('content')
    <style>
        .componentsdiv{
            display: none;
        }
    </style>
    <form action="{{url('test')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">البيانات الرئيسية للطلب</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Multiple select</label>
                                <select multiple="" id="test" onchange="add_item()" name="test[]" class="form-control select select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ" >Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="IA" >Iowa</option>
                                        <option value="KS" >Kansas</option>
                                        <option value="KY">Kentucky</option>
                                    </optgroup>
                                </select>
                                <input type="text" id="item_selected" name="item_selected" hidden>
                            </div>
                            <div class="form-group">
                                <input name="user" id="user_id">
                                <label>اختر المعاملة</label>

                                <select id="treatments" onchange="showdiv()" class="form-control select-search select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                    @foreach($treatments as $treatment)
                                        <option value="{{$treatment->id}}">
                                            {{$treatment->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="text" name="title" placeholder="عنوان الطلب" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-10">
                                    <select id="customers" required onchange="show_data()" class="form-control select-search select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                        <optgroup label="">
                                            <option value="0">اسم المواطن</option>
                                        </optgroup>
                                        <optgroup label="قائمة المواطنين">
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach

                                        </optgroup>
                                    </select>
                                </div>
                                <div class="col-lg-1">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal_theme_info"><i class="icon icon-add-to-list"></i> </button>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="card">
                        <div class="card-header bg-white header-elements-inline">
                            <h6 class="card-title">المرفقات</h6>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>
                        <div id="attachments" class="card-body">



                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div id="load"></div>
                <!-- Grey background, left button spacing -->
                <div class="card">
                    <div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">بيانات الطلب التفصيلية</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                            </div>
                        </div>
                    </div>
                    {{--                            Form Components--}}
                    <div class="card-body">
                        @include('formcomponents.personaData')
                        @include('formcomponents.map')
                        @include('formcomponents.treatmentDetails')
                        @include('formcomponents.currentAddress')
                        @include('formcomponents.newAddress')
                        @include('formcomponents.currentOwner')
                        @include('formcomponents.newOwner')

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-10 ml-lg-auto">
                                    <div class="text-right">
                                        <button type="submit" class="btn bg-primary ml-3">حفظ المعاملة <i class="icon-paperplane ml-2"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                            End Form Components--}}



                </div>
            </div>
        </div>
        <!-- /optional button styles -->

    </form>
    {{--    customer modal--}}
    @include('formcomponents.customerModal')
    {{--    End customer modal--}}
@endsection
<script>
    function check_id() {
        $.ajax({
            url:'{{ url("checkId/") }}' + '/' + document.getElementById('new_customerId').value,
            method:'get',
            data:  {treatment : document.getElementById('new_customerId').value},
            // dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {

                    if(data.customer){
                        $('.customer_exist').show();
                        $('#new_customerName').val(data.customer['name']);
                        $('#new_customerMobile').val(data.customer['mobile']);
                        $('#new_customerPhone').val(data.customer['telephone']);
                        $('#new_customerEmail').val(data.customer['email']);
                        $('#new_customerAddress').val(data.customer['address']);
                    }



                }
                // $('#attend_button').attr('disabled', false);
            }
        })

    }
    function show_data() {
        $('.personal_data').show();
        $.ajax({
            url:'{{ url("getCustomers/") }}' + '/' +document.getElementById('customers').value,
            method:'get',
            data:  {treatment : document.getElementById('customers').value},
            // dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
                $('#customerName').val('');
                $('#customerId').val('');
                $('#customerMobile').val('');
                $('#customerAddress').val('');

            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    $('#customerName').val(data.customer.name);
                    $('#customerId').val(data.customer.id_no);
                    $('#customerMobile').val(data.customer.mobile);
                    $('#customerAddress').val(data.customer.address);


                }
                // $('#attend_button').attr('disabled', false);
            }
        })

    }
    function attachFile(id) {
        if(document.getElementById('attachment_' + id).value != ''){
            alert('hello');
            $('.attached_' + id).show();
        }

    }
    function showdiv() {
        $.ajax({
            url:'{{ url("getComponents/") }}' + '/' + document.getElementById('treatments').value + '/' + document.getElementById('user_id').value ,
            method:'get',
            data:  {treatment : document.getElementById('treatments').value},
            // dataType:'json',
            contentType: false,
            cache: false,
            processData:false,
            beforeSend:function(){
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    // alert(data.attachments[0]['attachment_slug'])
                    $('.componentsdiv').hide();
                    for (var i = 0; i < data.slug.length; i++) {
                        $('.' + data.slug[i]).show();
                        //Do something
                    }
                    $('#attachments').empty();
                    for(var i=0; i < data.attachments.length; i++){
                        // alert(data.attachments[i]['attachment_slug']);

                        attach = '<div class="row">' +
                            '<div class="col col-md-11">' +
                            '<div class="uniform-uploader">' +
                            '<input type="file" class="form-input-styled" data-fouc="" id="attachment_' +
                            data.attachments[i]['attachment_id'] +
                            '" onchange="attachFile(this)">' +
                            '<span class="filename" style="user-select: none;">'+
                            data.attachments[i]['attachment_name'] +
                            '</span>' +
                            '<span class="action btn bg-dark" style="user-select: none;">حمل الصورة</span>' +
                            '</div>' +
                            '</div>' +
                            '<div class="col col-md-1 attached_' +
                            data.attachments[i]['id'] +
                            '" style="display: none">' +
                            '<p>&#10004;</p> ' +
                            '</div>' +
                            ' </div>' +

                            '</div>' +
                            '<br>';
                        $('#attachments').append(attach);



                    }




                }
                // $('#attend_button').attr('disabled', false);
            }
        })



    }
</script>
