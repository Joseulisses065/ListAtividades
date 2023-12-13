@isset($msg)
@if($msg!='')
<ul class="alert alert-success list-unstyled position-absolute top-0 left-0 w-100 rounded-0 msg">
    <li>{{$msg}}</li> 
</ul>
@endif
@endisset