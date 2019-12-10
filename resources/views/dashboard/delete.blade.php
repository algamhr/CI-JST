<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal{{$weather->id}}">
    <i class="fa fa-trash"></i>
    Hapus
</a>
<!-- Tambah Modal-->
<div class="modal fade" id="deleteModal{{$weather->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data cuaca</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Yakin ingin menghapus data dengan suhu <b>{{$weather->temp}}</b> ?</p>
            </div>
            <div class="modal-footer">
                <form action="{{ route('dashboard.destroy', $weather->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger btn-sm" type="submit" value="delete" />
                </form>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                {{-- <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger">Hapus</a> --}}
            </div>
        </div>
    </div>
</div>
