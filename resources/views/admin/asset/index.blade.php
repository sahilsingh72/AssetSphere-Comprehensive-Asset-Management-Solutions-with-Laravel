<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('components.css')
    <!-- Include CSS and JS libraries here -->
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
</head>
<body>
<div class="container-scroller">
    @include('components.header')
    <div class="container-fluid page-body-wrapper">
        @include('components.floatSetting')
        @include('components.rightSidebar')
        @include('components.sidebar')
        <div class="container">
            <div class="card-body">
                <h4 class="card-title mb-0">Assets > All List</h4>
                <button type="button" class="btn btn-primary mb-4 mt-4" data-toggle="modal" data-target="#addAssetModal">
                    Add Asset
                </button>
                <div class="table-responsive">
                    <table id="assetsTable" class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Picture</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Purchase Date</th>
                                <th>Warranty End Date</th>
                                <!-- <th>Brand Id</th>
                                <th>Location ID</th> -->
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($assets as $asset)
                                <tr>
                                    <td>{{ $asset->id }}</td>
                                    <td> <img src="{{ asset('storage/' . $asset->picture) }}" alt="Asset Image" style="width: 100px; height: auto;"> </td>
                                    <td>{{ $asset->name }}</td>
                                    <td class="font-weight-bold">{{ $asset->price }}</td>
                                    <td>{{ $asset->purchase_date }}</td>
                                    <td>{{ $asset->warranty_end_date }}</td>
                                    <!-- <td>{{ $asset->brand_id }}</td>
                                    <td>{{ $asset->location_id }}</td> -->
                                    <td>{{ $asset->created_at ?? 'No Details Found' }}</td>
                                    <td>{{ $asset->updated_at ?? 'No Details Found' }}</td>
                                    <td class="font-weight-medium">
                                        <div class="badge badge-{{ $asset->status == 'Active' ? 'success' : ($asset->status == 'Under Maintenance' ? 'warning' : 'danger') }}">
                                            {{ $asset->status }}
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center">No Data Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="mt-3">
                        {{ $assets->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addAssetModal" tabindex="-1" role="dialog" aria-labelledby="addAssetModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addAssetModalLabel">Add Asset</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('assets.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Asset Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
                            </div>
                            <div class="form-group">
                                <label for="purchase_date">Purchase Date</label>
                                <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                            </div>
                            <div class="form-group">
                                <label for="warranty_end_date">Warranty End Date</label>
                                <input type="date" class="form-control" id="warranty_end_date" name="warranty_end_date" required>
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Pending">Pending</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="brand_id">Brand</label>
                                <select class="form-control" id="brand_id" name="brand_id" required>
                                    <option value="1">Hp</option>
                                    <option value="2">Dell</option>
                                    <option value="3">Acer</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="type_id">Type</label>
                                <select class="form-control" id="type_id" name="type_id" required>
                                    <option value="1">Select</option>
                                    <option value="2">Hardware</option>
                                    <option value="3">Software</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="location_id">Location</label>
                                <select class="form-control" id="location_id" name="location_id" required>
                                    <option value="1">select</option>
                                    <option value="2">Puri</option>
                                    <option value="3">Khordha</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control" id="picture" name="picture">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('components.javaScript')
    <!-- Include JS libraries here -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
    <!-- DataTables Buttons JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <!-- PDFMake (required for PDF export) -->
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#assetsTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>
</html>
