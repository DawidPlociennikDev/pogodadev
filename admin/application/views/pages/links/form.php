<div class="form-element-area">
    <form action="<?= base_url($this->uri->segment(1).'/action/'.$this->uri->segment(3).'/'.$this->uri->segment(1).'/'.@$v->id); ?>" method="post" enctype="multipart/form-data">
        <div class="container">
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
                                        <label class="nk-label">Adres URL <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="url" placeholder="Wymagany" value="<?= @$v->url; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Tytuł <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Wymagany" value="<?= @$v->title; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Krótki opis</label>
                                        <textarea class="form-control" name="short_desc" rows="5" placeholder="Krótki opis wstępny..."><?= @$v->short_desc; ?></textarea>
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