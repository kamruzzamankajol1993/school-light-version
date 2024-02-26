@extends('admin.master.master')

@section('title')
Drag & Drop Custome Field| {{ $ins_name }}
@endsection


@section('body')
<style>
    .list-group-item {
        display: flex;
        align-items: center;
    }

    .highlight {
        background: #f7e7d3;
        min-height: 30px;
        list-style-type: none;
    }

    .handle {
        min-width: 18px;
        background: #607D8B;
        height: 15px;
        display: inline-block;
        cursor: move;
        margin-right: 10px;
    }
</style>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Drag & Drop Custome Field</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">


<div class="col-sm-12">
    <div class="">
        <div class="dropdown">



            <a  href="{{ route('admin.custome_field') }}" class="btn btn-danger btn-sm" type="button" >
                <i class="uil-angle-double-left mr-2"></i>Previous Page
            </a>

        </div>
    </div>
</div>
</div>
<div class="row mt-3">
    <div class="col-sm-12">
        <ul class="sort_menu list-group">
    @foreach($custome_filed_list as $new_custome_field)

    <li class="list-group-item" data-id="{{$new_custome_field->id}}">
        <span class="handle"></span>
        <h6>{{$new_custome_field->field_name}}</h6>
    </li>
    @endforeach
</ul>
</div>
</div>

@endsection



@section('script')



      <script type="text/javascript">
        function deleteTag(id) {
            swal({
                title: 'Are you sure?',
                text: "You will not be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>

<script type="text/javascript">


$("select[name='field_type']").change(function(){

    console.log(1);
    if ($(this).val() == 'select'|| $(this).val() == 'checkbox' || $(this).val() == 'radio') {
    $('#showcontent_add').show();
  } else {
    $('#showcontent_add').hide();
  }


});


$("[id^=nn]").change(function(){


    var id_select = $(this).attr('id');
    var last_two_id = id_select.slice(2);
    console.log(last_two_id);


if ($(this).val() == 'select'|| $(this).val() == 'checkbox' || $(this).val() == 'radio') {
$('#showcontent1'+last_two_id).show();
} else {
$('#showcontent1'+last_two_id).hide();
}


});

</script>
<script>
    $(document).ready(function(){

      function updateToDatabase(idString){
         $.ajaxSetup({ headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'}});

         $.ajax({
              url:'{{url('admin/drag_drop_custome_field_update')}}',
              method:'POST',
              data:{ids:idString},
              success:function(){
                 alert('Successfully updated')
                 //do whatever after success
              }
           })
      }

        var target = $('.sort_menu');
        target.sortable({
            handle: '.handle',
            placeholder: 'highlight',
            axis: "y",
            update: function (e, ui){
               var sortData = target.sortable('toArray',{ attribute: 'data-id'})
               updateToDatabase(sortData.join(','))
            }
        })

    })
</script>
@endsection
