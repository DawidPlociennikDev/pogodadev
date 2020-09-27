<?php 
$category[0] = 'Jakość powietrza';
$category[1] = 'Temperatura'; 
$category[2] = 'Wilgotność'; ?> 
    <!-- Breadcomb area Start-->
    <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Odnośniki do ciekawych linków</h2>
                                        <p>Witaj w panelu <span class="bread-ntd">PWSZ Legnica</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                    <a href="<?= base_url($this->uri->segment(1).'/form/insert'); ?>" data-toggle="tooltip" data-placement="left" title="Dodaj wpis" class="btn">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION['flashdata'])): ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> <?php echo $_SESSION['flashdata']; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <!-- Breadcomb area End-->
<!-- Data Table area Start-->
    <div class="data-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="data-table-list">
                        <div class="basic-tb-hd">
                            <h2>Wszystkie wpisy</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Lp.</th>
                                        <th>Tytuł</th>
                                        <th>Data utworzenia</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($rows as $v): $i++; ?>
                                        <tr>
                                            <td><?= $i; ?>.</td>
                                            <td><?= $v->title; ?></td>
                                            <td><?= $v->created; ?></td>
                                            <td class="text-right">
                                                <a href="<?= base_url($this->uri->segment(1).'/form/update/'.$v->id); ?>" data-toggle="tooltip" data-placement="left" title="Edytuj wpis #<?= $v->id . ' ' . $v->title; ?>" class="btn btn-info">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <a href="<?= base_url('admin/delete/'.$this->uri->segment(1).'/'.$v->id); ?>" data-toggle="tooltip" data-placement="left" title="Usuń wpis #<?= $v->id . ' ' . $v->title; ?>" class="btn btn-warning" onclick="return confirm('Czy na pewno chcesz usunąć wpis #<?= $v->id . ' ' . $v->title; ?>')">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Lp.</th>
                                        <th>Tytuł</th>
                                        <th>Data utworzenia</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Data Table area End-->