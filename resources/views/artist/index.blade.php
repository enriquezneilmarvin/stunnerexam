@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Artist List 
                </div>

             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="data" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Date Created</th>
                        <th>Date Updated</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($artists as $artist)
                      <tr id="{{$artist->id}}">
                        <td id = "artistName{{$artist->id}}">{{$artist->name}}</td>
                        <td>{{$artist->created_at}}</td>
                        <td>{{$artist->updated_at}}</td>
                        <td class="">
                          <button class="btn btn-warning" id = "editArtistBtn">Edit</button>
                          <button class="btn btn-danger" id = "deleteArtistBtn">Delete</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="m-2" style="float: right">
              <button class="btn btn-success btn-lg"  href="#" data-toggle="modal" data-target="#artistModalCreate" > Add </button>
              <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
            </div>

        </div>
    </div>


<!-- </div> -->
@endsection


<div class="modal fade" id="artistModalCreate" tabindex="-1" role="dialog" aria-labelledby="artistModalCreate" aria-hidden="true">
  <form method="POST" action="{{ route('artist.store') }}">
            @csrf
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="artistModalCreateTitle">Add new artist</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

            <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="artist_name" id="artist_name" class="form-control" placeholder="Artist Name" required="required" autofocus="autofocus">
              <label for="artist_name">Name: </label>
            </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </form>
</div>

<div class="modal fade" id="artistModalEdit" tabindex="-1" role="dialog" aria-labelledby="artistModalEdit" aria-hidden="true">
            
  <div class="modal-dialog" role="document">

  <form id="artistModalEditForm" method = 'POST' action="{{ route('artist.store') }}">
    @csrf
    @method('PUT')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="artistModalEditTitle">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

            <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="artist_name_edit" id="artist_name_edit" class="form-control" placeholder="Artist Name" required="required" autofocus="autofocus">
              <label for="artist_name_edit">Name: </label>
            </div>
          </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>

  </form>
  </div>
</div>
  


  <div class="modal fade" id="deleteArtistModal" tabindex="-1" role="dialog" aria-labelledby="deleteArtistModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteArtistLabel">Delete Artist</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
              Are you sure you want to delete this artist ?
              <form class="deleteTagForm" id = "artistModalDeleteForm" action="" method="POST">
                @method('DELETE')
                @csrf
              </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id ="btnCloseTag">Close</button>
            <button type="submit" class="btn btn-primary" id ="artistModalDeleteBtn">Delete</button>
            </div>
          </div>
        </div>
    </div>



@section('js')
<script type="text/javascript">
  $(document).on("click each", "#editArtistBtn", function(index){
    var artist_id = $(this).closest("tr").attr("id");
    var artist_name = $('#'+'artistName'+artist_id).text();
    $("#artistModalEdit").find(".modal-body").find("#artist_name_edit").val(artist_name);
    $("#artistModalEdit").find(".modal-dialog").find("#artistModalEditForm").attr("action", "{{ url('artist')}}/" + artist_id);
    $("#artistModalEdit").modal("show");
    // console.log(artist_id);
    // console.log(artist_name);
  }).
  on("click each", "#deleteArtistBtn", function(index)
  {
    var artist_id = $(this).closest("tr").attr("id");
    var artist_name = $('#'+'artistName'+artist_id).text();
    $("#deleteArtistModal").find(".modal-body").find("#artistModalDeleteForm").attr("action", "{{ url('artist')}}/" + artist_id);
    $("#deleteArtistModal").modal("show");
  }).
  on("click", "#artistModalDeleteBtn", function(index)
  {
    // var form = $("#deleteTagModal").find('form');
    // var url = form.attr('action');
    // console.log($("#deleteArtistModal").find(".modal-body").find("#artistModalDeleteForm"));
    $("#deleteArtistModal").find(".modal-body").find("#artistModalDeleteForm").submit();
  });
</script>
@endsection