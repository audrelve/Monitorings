
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
                    <h6> <i class="fa fa-plus text-info" aria-hidden="true"></i> Add New Guardian</h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form" action="{{ route('guardian.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-2">
                            <label for="site" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name of site" required/>
                        </div>

                        <div class="mb-2">
                            <label for="site" class="form-label">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">Payment Date</label>
                            <input type="date" class="form-control" id="date" name="payment_date" placeholder="date" required/>
                        </div>

                        <div class="mb-2">
                            <label for="reference" class="form-label">REGION</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="region" required>
                                @foreach ($regions as $region)
                                    <option value=" {{ $region->id }} " > {{ $region->region_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="site" class="form-label">Site</label>
                            <input type="text" class="form-control" name="site" placeholder="Site" required/>
                        </div>

                        <button type="submit" class="btn bg-gradient-success mb-0"><i class="fas fa-check"></i>&nbsp;&nbsp; Save</button>
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection

