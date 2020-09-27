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
                                        <label class="nk-label">Imię</label>
                                        <input type="text" class="form-control" name="first_name" placeholder="Opcjonalny" value="<?= @$v->first_name; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Nazwisko</label>
                                        <input type="text" class="form-control" name="last_name" placeholder="Opcjonalny" value="<?= @$v->last_name; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">E-mail <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="email" placeholder="Wymagany" value="<?= @$v->email; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Login <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="login" placeholder="Wymagany" value="<?= @$v->login; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div class="nk-int-st">
                                        <label class="nk-label">Hasło</label>
                                        <input type="text" class="form-control" name="password" placeholder="Opcjonalny (zostaw to pole puste, aby nie zmieniać hasła)">
                                    </div>
                                </div>
                            </div>

  
                            <div class="col-xs-12 form-margin">
                                <div class="form-group ic-cmp-int">
                                    <div id="photoViewer">
                                        <?php if(@$v->avatar != ''): ?>
                                        <div class="remove-button" onclick="removePhoto('photoViewer')">
                                            <i class="fas fa-times"></i>
                                        </div>
                                        <img src="<?= base_url('uploads/'.@$v->avatar); ?>" class="img-fluid img-thumbnail" width="120px">
                                        <?php endif; ?>
                                    </div>
                                    <div class="nk-int-st">
                                        <label class="nk-label">Wybierz zdjęcie wpisu</label>
                                        <input id="photo" type="file" name="photo" class="form-control" value="<?= @$v->avatar; ?>">
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