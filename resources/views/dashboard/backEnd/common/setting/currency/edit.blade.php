<form action="{{route('currencies.update')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{$currency->id}}">
    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Name <span class="text-danger">*</span></label>
        <input placeholder="Ex : United State" type="text" class="form-control" value="{{$currency->name}}" name="name"
               autofocus required>
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Symbol <span class="text-danger">*</span></label>
        <input placeholder="Ex : $" type="text" class="form-control" value="{{$currency->symbol}}" name="symbol"
               required>
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Code <span class="text-danger">*</span></label>
        <input placeholder="Ex : USD" type="text" class="form-control" value="{{$currency->code}}" name="code" required>
    </div>

    <div class="form-group">
        <label for="name" class="col-form-label text-md-right">Exchange Rate Ex: 1 USD = ?  <span class="text-danger">*</span></label>
        <input  min="0.01" step="0.01" placeholder="Ex: 1 USD = ?" type="number" class="form-control" name="rate" required
               value="{{$currency->rate}}">
    </div>

    <div class="form-group">
        <label class="control-label">Select country flag <span
                class="text-danger">*</span></label>
        <div class="">
            <select class="form-control lang" name="image" required>
                <option value=""></option>
                @foreach(readFlag() as $item)
                    @if ($loop->index >1)
                        <option value="{{$item}}"
                                data-image="{{asset('images/lang/'.$item)}}" {{$item == $currency->image ? 'selected':null}}> {{flagRenameAuto($item)}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

    <div class="float-right">
        <button class="btn btn-primary" type="submit">Save</button>
    </div>

</form>
