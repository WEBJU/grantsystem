@extends('admin.index')
@section('content')

    <div class="container-fluid">

        <!--Search Button-->
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-6">
                <h1><center>All Donors Information</center></h1>
                <form method="get" class="sidebar-form m-2">
                    <div class="input-group">
                        <input type="text" name="student_search" id="search_query" class="form-control" placeholder="Search Donor Name">
                        <span class="input-group-btn">
                          <button type="submit" name="search_student" id="search-btn" class="btn btn-primary"><i class="fa fa-search"></i>
                          </button>
                         </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover" id="studentsTable">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            <!--if errors exist print all of them-->
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <!--Check for sucess message-->
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{session()->get('message')}}
                    </div>
                @endif

                <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                    <!--<th>Delete</th>-->
                </tr>
                </thead>

                <tbody id="studentsTable1">
                @foreach($donors as $donor)
                    <tr class="Donor {{$donor->id}} table-hover">
                        <td>{{$donor->name}}</td>
                        <td>{{$donor->phone_number}}</td>
                        <td>{{$donor->username}}</td>
                        <td>{{$donor->email}}</td>

                        <td>
                            <!--edit-->
                            <a href="#"
                               class="parent_edit btn btn-sm btn-primary disabled"
                               id="edit_donor"

                            >Edit</a>
                            <a href="#"
                               class="parent_edit btn btn-sm btn-danger"
                               id="delete"

                            >Delete</a>
                        </td>

                        <td>

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>



        </div>

    </div>


    <!--Delete modal-->
    <div>

    </div>

    <!--jquery and ajax-->
    <script>
        //live search
        $(document).ready(function () {
            $('#search_query').keyup(function () {
                $value = $(this).val();
                $.ajax({
                    type:'get',
                    url:'/searchParent',
                    data:{
                        'search':$value
                    },
                    success:function (data) {
                        $('tbody').html(data);
                    }
                });
            });
        });

        //launch the edit modal
        $(document).ready(function () {
           $(document).on('click','.parent_edit',function () {
               $('error').hide();
               $('#parent_id').val($(this).data('id'));
               $('#parent_name').val($(this).data('name'));
               $('#parent_address').val($(this).data('address'));
               $('#parent_occupation').val($(this).data('occupation'));
               $('#parent_area').val($(this).data('residence'));
               $('#parent_phone').val($(this).data('phone'));
               $('#editModal').modal('show');
           });
        });

        //launch the delete modal


        //update logic
        $(document).ready(function () {
            $('.edit_modal-footer').on('click','.parent_submit',function () {
                $.ajax({
                    type:"post",
                    url:"/updateParent",
                    data:{
                        '_token':$('input[name=_token]').val(),
                        'parent_id':$('#parent_id').val(),
                        'parent_name':$('#parent_name').val(),
                        'parent_occupation':$('#parent_occupation').val(),
                        'parent_address':$('#parent_address').val(),
                        'parent_contact':$('#parent_phone').val(),
                        'parent_residential':$('#parent_area').val()
                    },

                    success:function (data) {
                        //if(data.status === 200)
                        //$('#studentsTable').ajax.reload();
                        $('#editModal').modal('hide');
                        $('.alert').remove();
                        alert('Record has been updated successfully. Refresh Page');
                        //reload table
                        //$('#studentsTable1').DataTable().ajax().reload();
                        var data_table = $('#studentsTable').DataTable();
                        //data_table.ajax().reload();
                        alert(data_table);
                        //toastr.success("Record saved");
                    },

                    error: function (xhr) {
                        alert('There is an error. check the form again');
                        $('#validation-errors').html('');
                        $.each(xhr.responseJSON.message, function(key,value) {
                            $('#validation-errors').append('<div class="alert alert-danger">'+value+'</div');
                        });
                    },
                });
            });
        });
    </script>

    <script type="text/javascript">
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    </script>
@endsection
