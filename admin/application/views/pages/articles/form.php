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
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                    <label class="nk-label">Wybierz kategorię <span class="text-danger">*</span></label>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" name="category" data-live-search="true" required>
                                        <option value="0" <?php if(@$v->category == '0'){echo 'selected';} ?>>Jakość powietrza</option>
                                        <option value="1" <?php if(@$v->category == '1'){echo 'selected';} ?>>Temperatura</option>
                                        <option value="2" <?php if(@$v->category == '2'){echo 'selected';} ?>>Wilgotność</option>
                                    </select>
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
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Podtytuł</label>
                                        <input type="text" class="form-control" name="subtitle" placeholder="Opcjonalny" value="<?= @$v->subtitle; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Krótki opis</label>
                                        <textarea class="form-control" name="short_desc" rows="5" placeholder="Krótki opis wstępny przed wejściem do wpisu..."><?= @$v->short_desc; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="cmp-tb-hd bsc-smp-sm">
                                    <label>Edytor tekstowy</label>
                                </div>
                                <textarea class="html-editor" name="description"><?= @$v->description; ?></textarea>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div id="photoViewer">
                                        <?php if(@$v->photo != ''): ?>
                                        <div class="remove-button" onclick="removePhoto('photoViewer')">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <img src="<?= base_url('uploads/'.@$v->photo); ?>" class="img-fluid img-thumbnail" width="120px">
                                        <?php endif; ?>
                                    </div>
                                    <div class="nk-int-st">
                                        <label class="nk-label">Wybierz zdjęcie wpisu</label>
                                        <input id="photo" type="file" name="photo" class="form-control" value="<?= @$v->photo; ?>">
                                    </div>
                                </div>
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Tekst alternatywny zdjęcia</label>
                                        <input type="text" name="alt" class="form-control" value="<?= @$v->alt; ?>">
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