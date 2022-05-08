<?php
/* Smarty version 4.1.0, created on 2022-05-06 13:35:12
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Admin\customize.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62756a602b9115_70974435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006bc276190a9fb551bc5dc2c0abf59471476fc6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Admin\\customize.tpl',
      1 => 1650486519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
  ),
),false)) {
function content_62756a602b9115_70974435 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('title', 'Customize');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156672271162756a602b1419_53065718', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_156672271162756a602b1419_53065718 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_156672271162756a602b1419_53065718',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="main-content">
				
		<?php $_smarty_tpl->_subTemplateRender('file:Elements/topbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<ol class="breadcrumb bc-3" >
			<li>
				<a href="#"><i class="fa-home"></i>Home</a>
			</li>
			<li>
				<a href="#">Pages</a>
			</li>
			<li class="active">
				<strong>Customize</strong>
			</li>
		</ol>		
		
		<h2>Customize</h2>
		<br>
		
		<?php echo '<script'; ?>
 type="text/javascript">
			jQuery( window ).load( function() {
				var $table2 = jQuery( "#table-2" );
				
				// Initialize DataTable
				$table2.DataTable( {
					"sDom": "tip",
					"bStateSave": false,
					"iDisplayLength": 8,
					"aoColumns": [
						{ "bSortable": false },
						null,
						null,
						null,
						null
					],
					"bStateSave": true
				});
				
				// Highlighted rows
				$table2.find( "tbody input[type=checkbox]" ).each(function(i, el) {
					var $this = $(el),
						$p = $this.closest('tr');
					
					$( el ).on( 'change', function() {
						var is_checked = $this.is(':checked');
						
						$p[is_checked ? 'addClass' : 'removeClass']( 'highlight' );
					} );
				} );
				
				// Replace Checboxes
				$table2.find( ".pagination a" ).click( function( ev ) {
					replaceCheckboxes();
				} );
			} );
				
			// Sample Function to add new row
			var giCount = 1;
			
			function fnClickAddRow() {
				jQuery('#table-2').dataTable().fnAddData( [ '<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4" ] );
				replaceCheckboxes(); // because there is checkbox, replace it
				giCount++;
			}
		<?php echo '</script'; ?>
>
		
		<table class="table table-bordered table-striped datatable" id="table-2">
			<thead>
				<tr>
					<th>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</th>
					<th>Customer ID</th>
					<th>Material</th>
					<th>Height</th>
					<th>Width</th>
					<th>Length</th>
					<th>Base Color</th>
					<th>Deposit</th>
					<th>Created</th>
					<th>Updated</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php echo '<?php'; ?>
 foreach( $rows as $i => $row ): <?php echo '?>'; ?>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'customer_id' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'material' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'height' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'width' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'length' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'base_color' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'deposit' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'created' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'updated' ] <?php echo '?>'; ?>
</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'id' ] <?php echo '?>'; ?>
">
								<i class="entypo-pencil"></i>
								Edit
							</a>
							
							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'id' ] <?php echo '?>'; ?>
">
								<i class="entypo-cancel"></i>
								Delete
							</a>
							
							<a href="#" class="btn btn-info btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'id' ] <?php echo '?>'; ?>
">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>
				<?php echo '<?php'; ?>
 endforeach; <?php echo '?>'; ?>

			</tbody>
		</table>
		
		<br />
		
		<a href="javascript: fnClickAddRow();" class="btn btn-primary">
			<i class="entypo-plus"></i>
			Add Row
		</a>
		
		
		
		<br />
		<br />
		
		<br />
		<!-- Footer -->
		<footer class="main">
			&copy; 2022 <strong>Diet Recommender System</strong>
		</footer>
	</div>
<?php
}
}
/* {/block 'body'} */
}
