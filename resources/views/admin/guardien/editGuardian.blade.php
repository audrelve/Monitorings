@extends('admin.app')


@section('content')

    @section('Titre', 'Dashboard')

    @section('SousTitre', 'Guardians')

    <div class="container-fluid py-4">
      <div class="row my-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6> <i class="fa fa-pencil text-info" aria-hidden="true"></i> Edit Guardian </h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form" action="{{ route('guardian.update', $guardian->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $guardian->name }}" required/>
                        </div>

                        <div class="mb-2">
                            <label for="name" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $guardian->phone }}" required/>
                        </div>

                        <div class="mb-2">
                            <label for="name" class="form-label">Payment Date</label>
                            <input type="text" class="form-control" name="payment_date" placeholder="payment_date" value="{{ $guardian->payment_date }}" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Region</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="region" required>
                                <option value="{{ $guardian->region_id }}" selected>{{ $guardian->region->region_name }}</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id}}">{{ $region->region_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="site" class="form-label">Site</label>
                            <input type="text" class="form-control" name="site" placeholder="Site" value="{{ $guardian->site }}" required/>
                        </div>
                        <button type="submit" class="btn bg-gradient-success mb-0"><i class="fas fa-check"></i>&nbsp;&nbsp; Update </button>
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection

