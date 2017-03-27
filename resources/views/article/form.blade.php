{{ csrf_field() }}
<div class="form-horizontal">
    <div class="form-group">
        <label for="title" class="control-label col-sm-2">타이틀</label>
        <div class="col-sm-10">
            <input type="text" class="form-control input-sm" id="title" name="title">
        </div>
    </div>
    <div class="form-group">
        <label for="content" class="control-label col-sm-2">내용</label>
        <div class="col-sm-10">
            <textarea class="form-control input-sm" id="content" name="content" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary btn-sm">확인</button>
            <a href="{{ route('article.index') }}" class="btn btn-default btn-sm">취소</a>
        </div>
    </div>
</div>