@extends('templates.admin.layout')

@section('content')
<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>@lang('products.create_product') <a href="{{route('products.index')}}" class="btn btn-info btn-xs"><i class="fa fa-chevron-left"></i> @lang('general.nav.back') </a></h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                        {{csrf_field()}}

                        <div class="form-group{{ $errors->has('product_code') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_code">@lang('products.code') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('product_code') ?: '' }}" id="product_code" name="product_code" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('product_code'))
                                <span class="help-block">{{ $errors->first('product_code') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('product_name') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_name">@lang('products.name') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('product_name') ?: '' }}" id="product_name" name="product_name" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('product_name'))
                                <span class="help-block">{{ $errors->first('product_name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">@lang('products.description')
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('description') ?: '' }}" id="description" name="description" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">@lang('products.price') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" value="{{ Request::old('price') ?: '' }}" id="price" name="price" class="form-control col-md-7 col-xs-12">
                                @if ($errors->has('price'))
                                <span class="help-block">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('brand_id') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="brand_id">@lang('products.brand') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="brand_id" name="brand_id">
                                    <option value=''>Select...</option>
                                    @if(count($brands))
                                        @foreach($brands as $row)
                                            <option {{ (Request::old('brand_id') == $row->id ? 'selected':'') }} value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('brand_id'))
                                <span class="help-block">{{ $errors->first('brand_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category_id">@lang('products.category') <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="category_id" name="category_id">
                                    <option value=''>Select...</option>
                                    @if(count($categories))
                                        @foreach($categories as $row)
                                            <option {{ (Request::old('category_id') == $row->id ? 'selected':'') }} value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @if ($errors->has('category_id'))
                                <span class="help-block">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div>
                        </div>

<!--                         <script src="{{asset('admin/js/jquery.min.js')}}"></script>

                        <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} control-group increment">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="filename">
                            images upload <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="filename[]" class="form-control">
                            </div>
                            <div class="input-group-btn col-md-3 col-sm-3 col-xs-12"> 
                                <button id="add_btn" class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                        </div>
                        <div class="clone hide">
                        <div class="form-group{{ $errors->has('filename') ? ' has-error' : '' }} control-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="filename">
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="file" name="filename[]" class="form-control">
                            </div>
                            <div class="input-group-btn col-md-3 col-sm-3 col-xs-12"> 
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            </div>
                        </div>
                        </div> -->
                        <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
                        <div class="form-group{{ $errors->has('txt_detail') ? ' has-error' : '' }} control-group increment">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="txt_detail">
                            detail <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="txt_detail" name="txt_detail" class="ckeditor">
                                    {{ Request::old('txt_detail') ?: '' }}
                                </textarea>  
                            </div>
                            @if ($errors->has('txt_detail'))
                            <span class="help-block">{{ $errors->first('txt_detail') }}</span>
                            @endif
                        </div>
                        <div class="ln_solid"></div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-success">@lang('general.form.create_record')</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script type="text/javascript">


    $(document).ready(function() {

      $("#add_btn").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script> -->
@stop