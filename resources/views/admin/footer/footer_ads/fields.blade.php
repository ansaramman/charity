<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column pt-4">    <!-- Name Field -->    <div class="form-group row ">        <label class="col-3 control-label text-right">            عنوان        </label>        <div class="col-9">            <input name="title" type="text" value="{{isset($footerAd)?$footerAd->title:(old('title'))}}" class="form-control "                   placeholder="">        </div>    </div>    <div class="form-group row mt-5">        <label class="col-3 control-label text-right">            تصویر            <span class="text-danger">*</span>        </label>        <div class="col-9">            <input name="image" type="file" placeholder="">        </div>        @if(isset($footerAd))            <div class="col-12 text-center">                <img style="width: 300px" src="{{env('IMG').$footerAd->image->url}}">            </div>        @endif    </div></div><!-- Submit Field --><div class="form-group col-12 text-right">    <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>        ذخیره    </button>    <a href="{!! route('panel.footerAds.index') !!}" class="btn btn-light"><i class="fa fa-undo"></i>        کنسل    </a></div>