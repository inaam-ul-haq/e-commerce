<form action="{{$action}}" method="post" {{$enctype ? "enctype=multipart/form-data" : ''}} class="row g-3 needs-validation" novalidate>
    @csrf
    {{$slot}}
</form>