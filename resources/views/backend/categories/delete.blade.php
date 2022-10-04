<!-- Modal -->
<div class="modal fade" id="Delete{{$categorie->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('backend/categories.delete category')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('categories.destroy', $categorie->id)}}" method="post" autocomplete="off">
                    @method('DELETE')
                    @csrf


{{--                    note the use of hidden input id--}}
                    <input type="hidden" name="id" value="{{$categorie->id}}">



                    <div class="row">
                        <div class="col">
                            <label class="text-danger h6">{{trans('backend/categories.sure for delete category')}}</label>
                            <input type="text" value="{{$categorie->name}}" readonly class="form-control">
                        </div>
                    </div>





                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{trans('backend/categories.no')}}</button>
                        <button type="submit" class="btn btn-primary">{{trans('backend/categories.yes')}}</button>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
