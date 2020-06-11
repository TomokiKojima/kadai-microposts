<div class="modal" tabindex="-1" id="modal_{{$micropost->id}}" 
role="dialog" aria-labelledby="modal_{{$micropost->id}}" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content" style = "width:'auto'; ">
        
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        
                <div class="modal-body height:'auto';">
                    @include("microposts.image_carousel")
                </div>
        
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                </div>

        </div>
    </div>
</div>