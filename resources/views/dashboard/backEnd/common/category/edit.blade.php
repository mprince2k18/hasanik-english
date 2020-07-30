<div class="card-body">
    <form action="{{route('categories.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <input type="hidden" name="image" value="{{$category->image}}">
        <div class="form-group">
            <label>Name <span class="text-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Name" required value="{{$category->name}}">
        </div>

        <div class="form-group">
            <label>Meta Title</label>
            <input class="form-control" name="meta_title" value="{{$category->meta_title}}" type="text" max="100" placeholder="Meth Title">
            <small class="text-info">Google standard 100 characters</small>
        </div>

        <div class="form-group">
            <label>Meta Description</label>
            <textarea class="form-control" name="meta_desc" maxlength="200" placeholder="Meta Description write">{{$category->meta_desc}}</textarea>
            <small class="text-info">Google standard 200 characters</small>
        </div>

        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">Update</button>
        </div>

    </form>
</div>
