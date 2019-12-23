@extends('admin.admin_layouts')
@section('admin_content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">

        <div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Sub-Category Table</h5>
            </div><!-- sl-page-title -->

            <div class="card pd-20 pd-sm-40">
                <h6 class="card-body-title mb-3">Sub-Category Update</h6>

                <div class="table-wrapper">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ URL::to('update/sub/category/'.$subcat->id) }}" method="post">
                        @csrf
                        <div class="modal-body pd-20">
                            <div class="form-group">
                                <label for="subCategoryName">Sub-Category Name</label>
                                <input type="text" class="form-control" name="sub_category_name" value="{{ $subcat->sub_category_name }}">
                            </div>
                            <div class="form-group">
                                <label for="subCategorySlug">Sub-Category Slug</label>
                                <input type="text" class="form-control" name="sub_category_slug" value="{{ $subcat->sub_category_slug }}">
                            </div>
                            <div class="form-group">
                                <label for="underCategory">Parent Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach($category as $row)
                                        <option value="{{ $row-> id }}" <?php if($row->id == $subcat->category_id){ echo "selected"; } ?>>
                                            {{ $row -> category_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info pd-x-20">Category Update</button>
                        </div>
                    </form>
                </div><!-- table-wrapper -->
            </div><!-- card -->
        </div><!-- sl-pagebody -->

@endsection


