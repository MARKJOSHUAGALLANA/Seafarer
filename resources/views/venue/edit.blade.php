
@extends('pages.base')

@section('content')
  <!-- Modal -->
  <div class="modal fade" id="deleteVenueModal" tabindex="-1" aria-labelledby="deleteVenueModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteVenueModalLabel">Delete Venue - {{$venue->place}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{url('venues/delete/' .$venue->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-body">
                Are you sure you want to delete this Venue?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>

<h1>Edit Venue</h1>
<div class="row">
    <div class="col-md-5">
        <form action="{{url('venues/' .$venue->id)}}" method="POST">
            @csrf
            <div class="form-group mt-2">
                <label for="place">Place</label>
                <input type="text" name="place" class="form-control" value="{{$venue->place}}">
                @error('place')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="form-group my-3 d-grid gap 2 d-md-flex justify-content-end">
                <button type="button" class="btn btn-danger me-md-2 mt-2" data-bs-toggle="modal" data-bs-target="#deleteVenueModal">Delete Venue</button>
                <button class="btn btn-primary me-md-2 mt-2" type="submit">Edit Venue</button>
            </div>
        </form>
    </div>
</div>

@endsection
