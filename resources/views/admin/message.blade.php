@if (Session::has('error'))
    
<div class="alert alert-danger alert-dimissible">
    <button class="close" type="button" data-dismiss="alert" area-hidden="true">x</button>
    <h4><i class="icon fa fa-ban"></i>Error</h4>{{Session::get('error')}}
</div>
@endif
@if (Session::has('success'))
<div class="alert alert-success alert-dimissible">
    <button class="close" type="button" data-dismiss="alert" area-hidden="true">x</button>
    <h4><i class="icon fa fa-check"></i>Alert1</h4>{{Session::get('success')}}
</div>
@endif