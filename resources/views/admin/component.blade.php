<!DOCTYPE html>
<html lang="en">
    
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
    <!-- plugins:css -->
   @include('components.css')
</head>
<body>
<div class="container-scroller">
@include('components.header')
<div class="container-fluid page-body-wrapper">
    @include('components.floatSetting')
    @include('components.rightSidebar')
    @include('components.sidebar')
    <div class="container">
    <h1>Components</h1>
    <!-- Button to trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addComponentModal">
        Add Component
    </button>

    <!-- Table to display components -->
    <table class="table">
        <thead>
            <tr>
                <th>Picture</th>
                <th>Name</th>
                <th>Purchase Date</th>
                <th>Status</th>
                <th>Warranty Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($components as $component)
            <tr>
                <td><img src="{{ asset('storage/' . $component->picture) }}" alt="{{ $component->name }}" class="img-thumbnail" style="width: 100px;"></td>
                <td>{{ $component->name }}</td>
                <td>{{ $component->purchase_date }}</td>
                <td>{{ $component->status }}</td>
                <td>{{ $component->warranty_date }}</td>
                <td>
                    <a href="{{ route('components.show', $component->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('components.edit', $component->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('components.destroy', $component->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal for adding component -->
    <div class="modal fade" id="addComponentModal" tabindex="-1" role="dialog" aria-labelledby="addComponentModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addComponentModalLabel">Add Component</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('components.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="purchase_date">Purchase Date</label>
                            <input type="date" name="purchase_date" id="purchase_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" name="status" id="status" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="warranty_date">Warranty Date</label>
                            <input type="date" name="warranty_date" id="warranty_date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="picture">Picture</label>
                            <input type="file" name="picture" id="picture" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.javaScript')

</body>
</html>