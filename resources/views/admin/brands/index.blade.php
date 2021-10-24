<x-admin.base>
  <style>
    #example1_length label,
    .dataTables_filter label {
      display: flex;
      align-items: center
    }

  </style>
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Brand List</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <div
          id="example1_wrapper"
          class="dataTables_wrapper container-fluid dt-bootstrap4"
        >
          <div class="row">
            <div class="col-sm-12">
              <table
                id="example1"
                class="table table-bordered table-striped dataTable"
                role="grid"
                aria-describedby="example1_info"
              >
                <thead>
                  <tr role="row">
                    <th
                      class="sorting_asc"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-sort="ascending"
                      aria-label="Name: activate to sort column descending"
                      style="width: 132.109px;"
                    >English Name</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Position: activate to sort column ascending"
                      style="width: 218.25px;"
                    >French Name</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="width: 98.2188px;"
                    >Image</th>
                    <th
                      class="sorting"
                      tabindex="0"
                      aria-controls="example1"
                      rowspan="1"
                      colspan="1"
                      aria-label="Office: activate to sort column ascending"
                      style="width: 98.2188px;"
                    >Actions</th>
                  </tr>
                </thead>
                @foreach ($brands as $brand)
                  <tr
                    role="row"
                    class="even"
                  >
                    <td>{{ $brand->name_en }}</td>
                    <td>{{ $brand->name_fr }}</td>
                    <td><img
                        src="{{ asset($brand->imageURL) }}"
                        alt="{{ $brand->name_en }} brand"
                        style="width: 70px; aspect-ratio:1; object-fit:cover;"
                      /></td>
                    <td>
                      <a
                        href="{{ url('/admin/brands/' . $brand->id) . '/edit' }}"
                        class="btn btn-info"
                      >Edit</a>
                      <form
                        style="display: inline-block"
                        method="POST"
                        action="{{ url('/admin/brands/' . $brand->id) }}"
                      >
                        @method('DELETE')
                        @csrf
                        <button
                          type="submit"
                          class="btn btn-danger"
                        >Delete</button>

                      </form>
                    </td>
                  </tr>

                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-admin.base>
