<div class="card-body">
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name <span class="text-danger">*</span></label>
            <input class="form-control" name="name" placeholder="Name" required>
        </div>

        <div class="form-group">
            <label>Meta Title</label>
            <input class="form-control" name="meta_title" type="text" max="100" placeholder="Meth Title">
            <small class="text-info">Google standard 100 characters</small>
        </div>

        <div class="form-group">
            <label>Meta Description</label>
            <textarea class="form-control" name="meta_desc" maxlength="200" placeholder="Meta Description write"></textarea>
            <small class="text-info">Google standard 200 characters</small>
        </div>

        <div class="float-right">
            <button class="btn btn-primary float-right" type="submit">Save</button>
        </div>

    </form>
</div>


