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
                      <a
                        type="button"
                        class="btn btn-danger"
                        id="delete-brand-btn"
                        action="{{ route('brands.destroy', $brand->id) }}"
                      >Delete</a>
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
  <script>
    const deleteBtns = document.querySelectorAll('#delete-brand-btn');

    function deleteBrand() {
      console.log(this);
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          axios.delete(this.getAttribute('action'))
          window.location.reload();
        }
      });
    };

    deleteBtns.forEach(btn => btn.addEventListener('click', deleteBrand));
  </script>
</x-admin.base>
