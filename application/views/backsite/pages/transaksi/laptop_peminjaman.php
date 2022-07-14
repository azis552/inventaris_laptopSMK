

                        <div class="page-content-wrapper">
						<div class="row">
                                
                                <div class="col">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
										<h4 class="mt-0 header-title">Penggunaan</h4>
                                            <p class="text-muted m-b-30 ">Parsley is a javascript form validation
                                                library. It helps you provide your users with feedback on their form
                                                submission before sending it to your server.</p>
            
                                            <form id="myForm" class="" method="POST" >
                                               
            
                                                <div class="form-group">
													<label class="control-label">Nama Guru</label>
            
													<select required class="select2 form-control select2-multiple nama_guru" name="nama_guru" data-placeholder="Choose ...">
														<?php foreach($data_guru as $i){?>
															<option value="<?=$i->id_guru?>"><?=$i->nama?></option>
														<?php }?>
													</select>

                                                </div>
            
                                                <div class="form-group">
                                                    <label>Kegiatan/Mapel</label>
                                                    <input type="text" class="form-control" name="kegiatan" id="kegiatan" required placeholder="Type something"/>
                                                </div>
                                                
                                                
                                            
                                        </div>
                                    </div>
                                </div>
            
                            </div>
            
            
                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                        <div class="row clearfix">
		<div class="col-md-12 column">
			<table class="table table-bordered table-hover" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Id Siswa
						</th>
						<th class="text-center">
							Nama
						</th>
						<th class="text-center">
							Kelas
						</th>
						<th class="text-center">
							Id Laptop
						</th>
						<th class="text-center">
							Laptop
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
						<input type="text" required  name='id_siswa[]'  placeholder='id_siswa'  onblur="calc(this)"  class="form-control"/>
						</td>
						<td>
						<input type="text" required name='nama_siswa[]' placeholder='nama_siswa' readonly class="form-control"/>
						</td>
						<td>
						<input type="text" required name='kelas_siswa[]' placeholder='kelas_siswa' readonly class="form-control"/>
						</td>
						<td>
						<input type="text" required name='id_laptop[]' placeholder='Id Laptop' readonly class="form-control"/>
						</td>
						<td>
						<input type="text" required name='laptop_siswa[]' placeholder='laptop_siswa' readonly class="form-control"/>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		</div>
	</div>
	<a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
	<div class="modal-footer">
        <button type="button" id="btn_simpan" class="btn btn-primary">Simpan</button>
      </div>					
                                        </div>
                                    </div>
                                </div>
            
                            </div>
							</form>
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->
