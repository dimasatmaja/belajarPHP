<?php
$current_page = $this->set_current_page_link();
$csrf_token = Csrf::$token;
$field_name = $this->route->field_name;
$field_value = $this->route->field_value;
$view_data = $this->view_data;
$records = $view_data->records;
$record_count = $view_data->record_count;
$total_records = $view_data->total_records;
if (!empty($records)) {
?>
<!--record-->
<?php
$counter = 0;
foreach($records as $data){
$rec_id = (!empty($data['id']) ? urlencode($data['id']) : null);
$counter++;
?>
<tr>
    <th class=" td-checkbox">
        <label class="custom-control custom-checkbox custom-control-inline">
            <input class="optioncheck custom-control-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                <span class="custom-control-label"></span>
            </label>
        </th>
        <th class="td-sno"><?php echo $counter; ?></th>
        <td class="td-id"><a href="<?php print_link("material_masuk/view/$data[id]") ?>"><?php echo $data['id']; ?></a></td>
        <td class="td-id_permintaan">
            <span  data-value="<?php echo $data['id_permintaan']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="id_permintaan" 
                data-title="Enter Id Permintaan" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['id_permintaan']; ?> 
            </span>
        </td>
        <td class="td-id_material">
            <a size="sm" class="btn btn-sm btn-primary page-modal" href="<?php print_link("data_material/view/" . urlencode($data['id_material'])) ?>">
                <i class="fa fa-eye"></i> <?php echo $data['data_material_nama_material'] ?>
            </a>
        </td>
        <td class="td-tanggal">
            <span  data-value="<?php echo $data['tanggal']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="tanggal" 
                data-title="Enter Tanggal" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['tanggal']; ?> 
            </span>
        </td>
        <td class="td-kategori">
            <span  data-source='<?php echo json_encode_quote(Menu :: $kategori); ?>' 
                data-value="<?php echo $data['kategori']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="kategori" 
                data-title="Select a value ..." 
                data-placement="left" 
                data-toggle="click" 
                data-type="select" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['kategori']; ?> 
            </span>
        </td>
        <td class="td-tanggal_masuk">
            <span  data-flatpickr="{altFormat: 'd-m-Y', enableTime: false, minDate: '', maxDate: ''}" 
                data-value="<?php echo $data['tanggal_masuk']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="tanggal_masuk" 
                data-title="Enter Tanggal Masuk" 
                data-placement="left" 
                data-toggle="click" 
                data-type="flatdatetimepicker" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['tanggal_masuk']; ?> 
            </span>
        </td>
        <td class="td-tanggal_inpro">
            <span  data-flatpickr="{altFormat: 'd-m-Y', enableTime: false, minDate: '', maxDate: ''}" 
                data-value="<?php echo $data['tanggal_inpro']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="tanggal_inpro" 
                data-title="Enter Tanggal Inpro" 
                data-placement="left" 
                data-toggle="click" 
                data-type="flatdatetimepicker" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['tanggal_inpro']; ?> 
            </span>
        </td>
        <td class="td-jumlah">
            <span  data-value="<?php echo $data['jumlah']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="jumlah" 
                data-title="Enter Jumlah" 
                data-placement="left" 
                data-toggle="click" 
                data-type="number" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['jumlah']; ?> 
            </span>
        </td>
        <td class="td-harga_satuan">
            <span  data-value="<?php echo $data['harga_satuan']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="harga_satuan" 
                data-title="Enter Harga Satuan" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['harga_satuan']; ?> 
            </span>
        </td>
        <td class="td-harga">
            <span  data-value="<?php echo $data['harga']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="harga" 
                data-title="Enter Harga" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['harga']; ?> 
            </span>
        </td>
        <td class="td-vendor">
            <span  data-value="<?php echo $data['vendor']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="vendor" 
                data-title="Enter Vendor" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['vendor']; ?> 
            </span>
        </td>
        <td class="td-keterangan">
            <span  data-value="<?php echo $data['keterangan']; ?>" 
                data-pk="<?php echo $data['id'] ?>" 
                data-url="<?php print_link("material_masuk/editfield/" . urlencode($data['id'])); ?>" 
                data-name="keterangan" 
                data-title="Enter Keterangan" 
                data-placement="left" 
                data-toggle="click" 
                data-type="text" 
                data-mode="popover" 
                data-showbuttons="left" 
                class="is-editable" >
                <?php echo $data['keterangan']; ?> 
            </span>
        </td>
        <td class="td-foto"><?php Html :: page_img($data['foto'],50,50,1); ?></td>
        <td class="page-list-action td-btn">
            <div class="dropdown" >
                <button data-toggle="dropdown" class="dropdown-toggle btn btn-primary btn-sm">
                    <i class="fa fa-bars"></i> 
                </button>
                <ul class="dropdown-menu">
                    <a class="dropdown-item page-modal" href="<?php print_link("material_masuk/view/$rec_id"); ?>">
                        <i class="fa fa-eye"></i> View 
                    </a>
                    <a class="dropdown-item page-modal" href="<?php print_link("material_masuk/edit/$rec_id"); ?>">
                        <i class="fa fa-edit"></i> Edit
                    </a>
                    <a  class="dropdown-item record-delete-btn" href="<?php print_link("material_masuk/delete/$rec_id/?csrf_token=$csrf_token&redirect=$current_page"); ?>" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal">
                        <i class="fa fa-times"></i> Delete 
                    </a>
                </ul>
            </div>
        </td>
    </tr>
    <?php 
    }
    ?>
    <?php
    } else {
    ?>
    <td class="no-record-found col-12" colspan="100">
        <h4 class="text-muted text-center ">
            No Record Found
        </h4>
    </td>
    <?php
    }
    ?>
    