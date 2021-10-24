<x-admin.base>
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Update Brand</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form
        class="row"
        method="POST"
        action="{{ url('/admin/brands/' . $brand->id) }}"
        enctype="multipart/form-data"
      >
        @csrf
        @method('PATCH')
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleInputEmail1">English Name</label>
            <input
              type="text"
              class="form-control"
              id="exampleInputEmail1"
              aria-describedby="emailHelp"
              name="name_en"
              value="{{ $brand->name_en }}"
            >
            <x-error input="name_en" />
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">French Name</label>
            <input
              type="text"
              class="form-control"
              id="exampleInputPassword1"
              name="name_fr"
              value="{{ $brand->name_fr }}"
            >
            <x-error input="name_fr" />
          </div>
          <button
            type="submit"
            class="btn btn-primary"
          >Submit</button>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <img
              style="width: 50%; display: block; margin-bottom: 1em;"
              src="{{ asset($brand->imageURL) }}"
              alt="brand: {{ $brand->name_en }}"
              id="brand-image"
            />
            <label for="image">Change Brand Image</label>
            <input
              type="file"
              class="form-control"
              id="image-input"
              name="image"
            >
            <x-error input="image" />
          </div>
        </div>
      </form>
    </div>
    <x-image-preview
      fileInputId="image-input"
      previewLocationId="brand-image"
    />
</x-admin.base>
