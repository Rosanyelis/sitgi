@if(Session::has('info'))

	<div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3> {{ Session::get('info') }} </h3>
    </div>
@endif