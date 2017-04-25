<div class="content-wrapper wrapper">
    <div class="container">
        <div class="content img_shadow top20 p10_20 js_block">

            <h3><a href="javascript:history.go(-1)">&lt;&lt;</a> Order Info</h3>

            <form action="" id="inputs_form">

                <div class="form_inputs">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="User name..." />
                </div>
                <div class="form_inputs">
                    <label for="">Payment description:</label>
                    <input type="text" class="form-control" name="p_desc" />
                </div>
                <div class="form_inputs">
                    <label for="">PrePay:</label>
                    <input type="text" class="form-control" name="pre_pay" />
                </div>

                <div>
                    <a class="btn btn-success save_form">Save</a>
                </div>

            </form>

            <div class="table_holder"></div>

        </div>
    </div>
</div>
<div class="modal fade table_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" class="modal-title"></h4>
            </div>
            <div class="modal-body table_modal_content"></div>
        </div>
    </div>
</div>
