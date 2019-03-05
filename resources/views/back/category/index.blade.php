@extends('back.layouts.master')
@section('content')
{{-- {{dump($posts)}} --}}

  <!-- Main content -->
  <section class="content">
      
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="pull-left">
                        <a id="add-button" title="Add New" class="btn btn-success" href="{{route('category.create')}}"><i
                                class="fa fa-plus-circle"></i> Add New</a>
                    </div>
                    <div class="pull-right">
                        <form accept-charset="utf-8" method="post" class="form-inline" id="form-filter"
                            action="#">
                            <div class="input-group">
                                <input type="hidden" name="search">
                                <input type="text" name="keywords" class="form-control input-sm pull-right"
                                    style="width: 150px;" placeholder="Search..." value="">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-default search-btn" type="button"><i
                                            class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-condesed">
                        <thead>
                            <tr>
                                <th>Action</th>
                                <th>Category title</th>
                                <th>status</th>
                                {{-- <th>Author</th> --}}
                                {{-- <th>Category</th> --}}
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($category as $category)
                            <tr>
                                <td width="70">
                                    <a title="Edit" class="btn btn-xs btn-default edit-row" href="{{route('category.edit', $category -> id)}}">
                                        <i class="fa fa-edit"></i>

                                    </a>
                                    <form action="{{ route('category.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" title="Delete" class="btn btn-xs btn-danger delete-row">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    </form>
                                    
                                </td>
                                <td>{{ $category->title}}</td>
                                <td>{{ $category->status==1?'enable':'disable' }}</td>
                                {{-- <td>Programming</td> --}}  
                            <td><abbr title="{{ $category->created_at }}">{{ $category->created_at }}</abbr> | <span class="label label-info">Schedule</span></td>
                            </tr>
                            @empty
                            <tr>
                                    <td colspan="6">
                                        <p class="text-info text-center">
                                            No Record Found
                                        </p>
                                    </td>
                                </tr>
                                
                            @endforelse
                         
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-left">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- ./row -->
</section>
<!-- /.content -->
@endsection