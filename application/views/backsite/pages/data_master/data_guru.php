<div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
										<button type="button" class="btn btn-primary m-b-30" data-toggle="modal" data-target="#exampleModal">
											Import
										</button>
										<a type="button" href="<?=$link_reset?>"  class="btn btn-danger m-b-30">Reset Data</a>
										<a type="button" href="<?=base_url('')?>backsite/admin/barcode_laptop_siswa"  class="btn btn-danger m-b-30">coba</a>
										<a type="button" href="<?=base_url('')?>backsite/admin/cetak"  class="btn btn-danger m-b-30">cetak</a>
										<br>
										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel"><?=$page?></h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
														<form action="<?=$link_import?>" method="POST" enctype="multipart/form-data">
															<div class="form-group">
																<label>Masukkan Data Siswa</label>
																<input type="file" class="filestyle" name="upload_file" data-buttonname="btn-secondary">
															</div>
														
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Import</button>
												</div>
												</form>
												</div>
											</div>
										</div>
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    
                                                </tr>
                                                </thead>
    
    
                                                <tbody>
													<?php $no=1; foreach($data_guru as $i){?>
															<tr>
																<td><?=$no?></td>
																<td><?=$i->id_guru?></td>
																<td><?=$i->nama?></td>
																
																
															</tr>
													<?php $no++;}?>
                                                </tbody>
                                            </table>
    
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    
                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
