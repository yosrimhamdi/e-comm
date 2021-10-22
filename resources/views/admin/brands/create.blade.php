<x-admin.base>
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Create New Brand</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <form
        style="width: 50%"
        action="{{ route('brands.store') }}"
        method="POST"
        enctype="multipart/form-data"
      >
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">English Name</label>
          <input
            type="text"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="name_en"
          >
        </div>
        <x-error input="name_en" />
        <div class="form-group">
          <label for="exampleInputPassword1">French Name</label>
          <input
            type="text"
            class="form-control"
            id="exampleInputPassword1"
            name="name_fr"
          >
          <x-error input="name_fr" />
        </div>
        <div class="form-group">
          <label for="image">Brand Image</label>
          <input
            type="file"
            class="form-control"
            id="image"
            name="image"
          >
          <x-error input="image" />
        </div>
        <button
          type="submit"
          class="btn btn-primary"
        >Submit</button>
      </form>
    </div>
  </div>
  </div>
</x-admin.base>
