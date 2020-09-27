<div class="form-element-area">
    <form action="<?= base_url($this->uri->segment(1).'/action/'.$this->uri->segment(3).'/'.$this->uri->segment(1).'/'.@$v->id); ?>" method="post" enctype="multipart/form-data">
        <div class="container">
            <?php if(isset($_SESSION['flashdata'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert" style="margin-top: 0;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['flashdata']; ?>
            </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list mg-t-30">
                        <div class="cmp-tb-hd">
                            <h2>Formularz</h2>
                            <p>Uzupełnij formularz i zatwierdź przyciskiem ZAPISZ, aby dodać nowy wpis</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Meta title</label>
                                        <input type="text" class="form-control" name="meta_title" value="<?= @$v->meta_title; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Meta keywords</label>
                                        <input type="text" class="form-control" name="meta_keywords" value="<?= @$v->meta_keywords; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Meta description</label>
                                        <textarea class="form-control" name="meta_description" rows="5"><?= @$v->meta_description; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div id="faviconViewer">
                                        <?php if(@$v->favicon != ''): ?>
                                        <div class="remove-button" onclick="removePhoto('faviconViewer')">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <img src="<?= base_url('uploads/'.@$v->favicon); ?>" class="img-fluid img-thumbnail" width="120px">
                                        <?php endif; ?>
                                    </div>
                                    <div class="nk-int-st">
                                        <label class="nk-label">Wybierz favicon</label>
                                        <input id="favicon" type="file" name="favicon" class="form-control" value="<?= @$v->favicon; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="summernote-clickable text-right" style="margin-bottom: 0;">
                            <button class="btn btn-success btn-sm hec-save">Zapisz</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>