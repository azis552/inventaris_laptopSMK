<div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
										
                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
													<th>Guru</th>
													<th>Kegiatan</th>
													<th>Diambil</th>
													<th>Dikembalikan</th>
                                                </tr>
                                                </thead>
    
    
                                                <tbody>
													<?php $no=1; foreach($data_pengambilan as $i){?>
															<tr>
																<td><?=$no?></td>
																<td><?=$i->nama_siswa?></td>
																<td><?=$i->kelas_siswa?></td>
																<td><?=$i->nama?></td>
																<td><?=$i->mapel_kegiatan?></td>
																<td><?= $i->waktu_pengambilan ?></td>
																<td><?= $i->waktu_pengembalian == "" ? '<a href="kembalikan?table=tb_pengambilan&id='.$i->id_pengambilan.'" type="button" class="btn btn-danger">Kembalikan</a>' : $i->waktu_pengembalian ?></td>
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
