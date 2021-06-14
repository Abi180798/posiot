					<?php 
						error_reporting(0);
						$b=$brg->row_array();
					?>
					<table>
						<tr>
		                    <th style="width:200px;"></th>
		                    <th>Nama Barang</th>
		                    <th>Satuan</th>
		                    <th>Stok</th>
		                    <th>Harga(Rp)</th>
		                    <th>Diskon(Rp)</th>
		                    <th>Jumlah</th>
		                </tr>
						<tr>
							<td style="width:200px;"></th>
							<td><input type="text" name="nabar" value="<?php echo $b['barang_nama'];?>" style="width:380px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="satuan" value="<?php echo $b['barang_satuan'];?>" style="width:120px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="stok" value="<?php echo $b['barang_stok'];?>" style="width:40px;margin-right:5px;" class="form-control input-sm" readonly></td>
		                    <td><input type="text" name="harjul" value="<?php echo number_format($b['barang_harjul']);?>" style="width:120px;margin-right:5px;text-align:right;" class="form-control input-sm" readonly></td>
		                    <td><input type="number" name="diskon" id="diskon" value="0" min="0" class="form-control input-sm" style="width:130px;margin-right:5px;" required></td>
		                    <td><input type="number" name="qty" id="qty" value="1" min="1" max="<?php echo $b['barang_stok'];?>" class="form-control input-sm" style="width:90px;margin-right:5px;" required></td>
		                    <td>
							<form action="<?php echo base_url().'admin/penjualan/add_to_cart'?>" method="post">
                            <input  name="kode_brg" value="<?php echo $b['barang_id']?>">
                            <input  name="nabar" value="<?php echo $b['barang_nama'];?>">
                            <input  name="satuan" value="<?php echo $b['barang_satuan'];?>">
                            <input  name="stok" value="<?php echo $b['barang_stok'];?>">
                            <input  name="harjul" value="<?php echo number_format($b['barang_harjul']);?>">
                            <input  name="diskon" value="0">
                            <input  name="qty" value="1" required>
                                <!-- <button type="submit" class="btn btn-xs btn-info" title="Pilih"><span class="fa fa-edit"></span> Pilih</button> -->
								<button type="submit" class="btn btn-sm btn-primary">Ok</button>
                            </form>
							</td>
						</tr>
					</table>
					