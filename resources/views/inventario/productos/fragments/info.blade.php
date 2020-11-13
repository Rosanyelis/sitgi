@if(Session::has('info'))

	<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h5 style="color:#fff;"> {{ Session::get('info') }} </h5>
    </div>
@endif