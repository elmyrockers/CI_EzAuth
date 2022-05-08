<?php
/* Smarty version 4.1.0, created on 2022-05-06 13:34:59
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Admin\categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62756a53b70ab6_06373037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c014ac1932ab4472b0577599421eae456a87cbff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Admin\\categories.tpl',
      1 => 1650487017,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
  ),
),false)) {
function content_62756a53b70ab6_06373037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('title', 'Categories');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36412431762756a53ad4688_00788687', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_36412431762756a53ad4688_00788687 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_36412431762756a53ad4688_00788687',
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
				<strong>Categories</strong>
			</li>
		</ol>		
		
		<h2><Categories</h2>
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
					<th>Category ID</th>
					<th>Category</th>
					<th>User ID</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row', false, 'i');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'CATEGID' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'CATEGORIES' ] <?php echo '?>'; ?>
</td>
						<td><?php echo '<?php'; ?>
 echo $row[ 'USERID' ] <?php echo '?>'; ?>
</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'CATEGID' ] <?php echo '?>'; ?>
">
								<i class="entypo-pencil"></i>
								Edit
							</a>
							
							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'CATEGID' ] <?php echo '?>'; ?>
">
								<i class="entypo-cancel"></i>
								Delete
							</a>
							
							<a href="#" class="btn btn-info btn-sm btn-icon icon-left" data-id="<?php echo '<?php'; ?>
 echo $row[ 'CATEGID' ] <?php echo '?>'; ?>
">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
