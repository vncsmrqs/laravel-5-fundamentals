<div class="row">
    @if ($errors->any())
        <div class="col-md-12">
            <ul class="alert alert-danger" style="list-style: none">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>