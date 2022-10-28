@extends('admin.app')


@section('content')

    @section('Titre', 'Dashboard')

    @section('SousTitre', 'Team')

    <div class="container-fluid py-4">
      <div class="row my-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header pb-0">
                <div class="row">
                  <div class="col-lg-6 col-7">
                    <h6> <i class="fa fa-pencil text-info" aria-hidden="true"></i> Edit Team </h6>
                  </div>
                </div>

                <div class="card-body">
                    <form method="POST" id="datatake" role="form" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-2">
                            <label for="name" class="form-label">Name of team</label>
                            <input type="text" class="form-control" name="team_leader" placeholder="team_leader" value="{{ $team->team_leader }}" required/>
                        </div>

                        <div class="mb-2">
                            <label for="name" class="form-label">FIRST FE</label>
                            <input type="text" class="form-control" name="membre_un" placeholder="first membre" value="{{ $team->membre_un }}" />
                        </div>

                        <div class="mb-2">
                            <label for="name" class="form-label">SECOND FE</label>
                            <input type="text" class="form-control" name="membre_deux" placeholder="second_membre" value="{{ $team->membre_deux }}"/>
                        </div>

                        <button type="submit" class="btn bg-gradient-success mb-0"><i class="fas fa-check"></i>&nbsp;&nbsp; Update </button>
                    </form>
                </div>
          </div>
        </div>
      </div>
    </div>
@endsection

