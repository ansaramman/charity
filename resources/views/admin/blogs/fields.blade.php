<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column pt-4">    <!-- Name Field -->    <div class="form-group row ">        <label class="col-3 control-label text-right">            عنوان مقاله            <span class="text-danger">*</span>        </label>        <div class="col-9">            <input name="title" type="text" value="{{isset($blog)?$blog->title:''}}" class="form-control "                   placeholder="">        </div>    </div>    <div class="form-group row ">        <label class="col-3 control-label text-right">            دسته ی مقاله            <span class="text-danger">*</span>        </label>        <div class="col-9">            <select name="blog_category_id" class="form-control">                @foreach($blogCategories as $blogCategory)                    <option value="{{$blogCategory->id}}" {{isset($blog)?($blog->blog_category->id==$blogCategory->id?'selected':''):''}}>                        {{$blogCategory->title}}                    </option>                    @foreach($blogCategory->real_children as $real_child)                        <option value="{{$real_child->id}}" {{isset($blog)?($blog->blog_category->id==$real_child->id?'selected':''):''}}>                            <span>                                {{$blogCategory->title}}                                -->                            </span>                            {{$real_child->title}}                        </option>                        @foreach($real_child->real_children as $real_child2)                            <option value="{{$real_child2->id}}" {{isset($blog)?($blog->blog_category->id==$real_child2->id?'selected':''):''}}>                                <span>                                    {{$blogCategory->title}}                                    -->                                    {{$real_child->title}}                                    --->                                </span>                                {{$real_child2->title}}                            </option>                        @endforeach                    @endforeach                @endforeach            </select>        </div>    </div>    <div class="form-group row ">        <label class="col-3 control-label text-right">            تصویر شاخص            <span class="text-danger">*</span>        </label>        <div class="col-9">            <input name="image" type="file" placeholder="">        </div>        <div class="col-12 text-center">            @if(isset($blog))                @if($blog->image)                <img width="100px" src="{{env('IMG').$blog->image->url}}">                    @else                    <span class="badge badge-warning">تصویر یافت نشد</span>                    @endif            @endif        </div>    </div>    <div class="form-group row ">        <label class="col-3 control-label text-right">            وضعیت            <span class="text-danger">*</span>        </label>        <div class="col-9">            <select class="form-control" name="status">                <option value="1"                @if(isset($blog)){{$blog->status==true?'selected':''}} @else {{old('status')==true?'selected':''}} @endif                >منتشر شده                </option>                <option value="0"                @if(isset($blog)){{$blog->status==false?'selected':''}} @else {{old('status')==false?'selected':''}} @endif                >پیش نویس                </option>            </select>        </div>    </div></div><div style="flex: 100%;max-width: 100%;padding: 0 4px;" class="column pt-4">    <div class="form-group row ">        <label class="col-3 control-label text-right">            محتوای مقاله            <span class="text-danger">*</span>        </label>        <div class="col-12">            <textarea name="content" type="text" id="content" class="form-control "                      placeholder="">{!! isset($blog)?$blog->content:'' !!}</textarea>        </div>    </div></div><!-- Submit Field --><div class="form-group col-12 text-right">    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>        ذخیره صفحه    </button>    <a href="{!! route('panel.blogs.index') !!}" class="btn btn-light"><i class="fa fa-undo"></i>        کنسل    </a></div>