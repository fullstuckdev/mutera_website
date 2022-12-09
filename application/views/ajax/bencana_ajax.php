<div class="uk-overflow-auto">
	<table class="uk-table uk-table-justify uk-table-divider">
		<thead>
			<tr>
                    <th>NO</th>
					<th>NAMA KECAMATAN</th>
					<th>LOKASI</th>
					<th>KETERANGAN</th>
					<th>LATITUDE</th>
					<th>LONGITUDE</th>
					<th>WARNA</th>
					<th>RADIUS</th>
					<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
        <?php if( ! empty($bencana)) {
            ?>
            <?php 
            $no=1;
			foreach($bencana as $r){ 
				
			?>
				
				<tr>
					<td width="40px"><?=$no?></td>
					<td><?=$r->kecamatanBencana?></td>
					<td><?=$r->lokasiBencana?></td>
					<td><?=$r->keteranganBencana?></td>
					<td><?=$r->latitudeBencana?></td>
					<td><?=$r->longitudeBencana?></td>
					<td><?=$r->kategoriBencana?></td>
					<td><?=$r->radius?></td>
					<td>
                    <a href="#" class="uk-icon-link uk-margin-small-right" id="formedit" uk-icon="file-edit"
                    data-id="<?=$r->idBencana?>"
                    data-kecamatan="<?=$r->kecamatanBencana?>"
                    data-lokasi="<?=$r->lokasiBencana?>"
                    data-latitude="<?=$r->latitudeBencana?>"
                    data-longitude="<?=$r->longitudeBencana?>"
                    data-keterangan="<?=$r->keteranganBencana?>"
                    data-kategori="<?=$r->kategoriBencana?>"
					data-radius="<?=$r->radius?>"

					
					
					></a>
					<a href="#" class="uk-icon-link" uk-icon="trash" id="hapusdata" 
					data-id="<?=$r->idBencana?>"
                    data-kecamatan="<?=$r->kecamatanBencana?>"></a>
				
					</td>
				</tr>
			<?php $no++; } 
            }else{
            ?>
            <tr><td colspan="9" class="no-records">No records</td></tr>
            <?php } ?>
		</tbody>
	</table>
    
	</div>
    <ul class="uk-pagination" uk-margin-small-right>
    <?php echo $pagelinks?>
    </ul>
    
    
