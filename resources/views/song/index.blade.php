@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-table"></i>
                    Song List
                </div>

             
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Lyrics</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <!-- <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Artist</th>
                        <th>Lyrics</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </tfoot> -->
                    <tbody>
                        @foreach($songs as $song)
                        <tr id = "{{$song->id}}">
                            <td id = "songTitle{{$song->id}}">{{ $song->title }}</td>
                            <td id = "songArtist{{$song->id}}" data-value = "{{$song->artist->id}}">{{ $song->artist->name }}</td>
                            <td id = "songLyrics{{$song->id}}">
                                @if(strlen($song->lyrics) > 50)

                                {{ substr($song->lyrics, 0, 50)  . '..'}}

                                @else

                                {{ $song->lyrics }}
                                @endif
                            </td>
                            <td>{{ $song->created_at }}</td>
                            <td>
                              <button class="btn btn-warning btn-sm" id = "editSongBtn">Edit</button>
                              <button class="btn btn-danger btn-sm" id = "deleteSongBtn">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="m-2" style="float: right">
              <button class="btn btn-success btn-lg"  href="#" data-toggle="modal" data-target="#songsModalCreate" > Add </button>
              <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a> -->
            </div>

        </div>
    </div>


@endsection


<div class="modal fade" id="songsModalCreate" tabindex="-1" role="dialog" aria-labelledby="songsModalCreate" aria-hidden="true">
  <form method="POST" action="{{ route('song.store') }}">
            @csrf
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="songsModalCreateTitle">Add new songs</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        

            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="song_title" id="song_title" class="form-control" placeholder="Song Title" required="required" autofocus="autofocus">
                    <label for="song_title">Title : </label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <select class="form-control" name="artist_id">
                        @foreach($artists as $artist)
                        <option value = "{{$artist->id}}" >{{ $artist->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="song_lyrics" id="song_lyrics" class="form-control" placeholder="Song Lyrics" required="required" autofocus="autofocus">
                    <!-- <textarea class="form-control" placeholder="" required="required"></textarea> -->
                    <label for="song_lyrics">Lyrics:</label>
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


<div class="modal fade" id="songsModalEdit" tabindex="-1" role="dialog" aria-labelledby="songsModalEdit" aria-hidden="true">
  
  <div class="modal-dialog modal-lg" role="document">
    <form id = "songsModalEditForm" method="POST" action="{{ route('song.store') }}">
        @csrf
        @method('PUT')
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="songsModalEditTitle">Edit Song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        

            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="song_title_edit" id="song_title_edit" class="form-control" placeholder="Song Title" required="required" autofocus="autofocus">
                    <label for="song_title_edit">Title : </label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <select class="form-control" name="artist_id_edit" id = "artist_id_edit">
                        @foreach($artists as $artist)
                        <option value = "{{$artist->id}}" >{{ $artist->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" name="song_lyrics_edit" id="song_lyrics_edit" class="form-control" placeholder="Song Lyrics" required="required" autofocus="autofocus">
                    <!-- <textarea class="form-control" placeholder="" required="required"></textarea> -->
                    <label for="song_lyrics_edit">Lyrics:</label>
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


  <div class="modal fade" id="deleteSongModal" tabindex="-1" role="dialog" aria-labelledby="deleteSongModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteSongModalLabel">Delete Song</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>


            <div class="modal-body">
              Are you sure you want to delete this song ?
              <form class="deleteTagForm" id = "songModalDeleteForm" action="" method="POST">
                @method('DELETE')
                @csrf
              </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" id ="btnCloseTag">Close</button>
            <button type="submit" class="btn btn-primary" id ="songModalDeleteBtn">Delete</button>
            </div>
          </div>
        </div>
    </div>


@section('js')
<script type="text/javascript">
  $(document).on("click each", "#deleteSongBtn", function(index){ 
    var song_id = $(this).closest("tr").attr("id");
    $("#deleteSongModal").find(".modal-body").find("#songModalDeleteForm").attr("action", "{{ url('song')}}/" + song_id);
    $("#deleteSongModal").modal("show");

    }).
    on("click", "#songModalDeleteBtn", function(index)
    {
    $("#deleteSongModal").find(".modal-body").find("#songModalDeleteForm").submit();
    }).
    on("click each", "#editSongBtn", function(index)
    {   
        var song_id = $(this).closest("tr").attr("id");
        $.ajax({
            type: "GET",
            url : window.location.href + '/' + song_id,
            success: function(result){
                $("#songsModalEdit").find(".modal-body").find("#song_title_edit").val(result.title);
                $("#songsModalEdit").find(".modal-body").find("#artist_id_edit").val(result.artist_id);
                $("#songsModalEdit").find(".modal-body").find("#song_lyrics_edit").val(result.lyrics);
                $("#songsModalEdit").find(".modal-dialog").find("#songsModalEditForm").attr("action", "{{ url('song')}}/" + song_id);
                $("#songsModalEdit").modal("show");
            }
        });
    });

</script>
@endsection