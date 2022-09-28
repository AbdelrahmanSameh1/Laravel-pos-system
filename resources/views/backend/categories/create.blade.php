<!-- Modal -->
<div class="modal fade" id="AddCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{trans('backend/categories.add new category')}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <form action="{{route('categories.store')}}" method="post" autocomplete="off">
                    @csrf

                    <div class="form-group">
                        <label for="exampleFormControlInput1">{{trans('backend/categories.category name in english')}}</label>
                        <input type="text" name="name_en" class="form-control" id="exampleFormControlInput1" required>
                    </div>


                    <div class="form-group">
                        <label for="exampleFormControlInput1">{{trans('backend/categories.category name in arabic')}}</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required >
                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">{{trans('backend/categories.notes')}}</label>
                        <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>


                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{trans('backend/categories.close')}}</button>
                        <button type="submit" class="btn btn-primary">{{trans('backend/categories.save')}}</button>
                    </div>


                </form>



            </div>

        </div>
    </div>
</div>
