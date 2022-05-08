<?php
/* Smarty version 4.1.0, created on 2022-05-06 13:34:56
  from 'C:\xampp\htdocs\diet_recommender\app\Views\Admin\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62756a50c33520_46294439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5eee6af5d139d66408d7a2d5fb1746f16088961' => 
    array (
      0 => 'C:\\xampp\\htdocs\\diet_recommender\\app\\Views\\Admin\\products.tpl',
      1 => 1650486441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Elements/topbar.tpl' => 1,
  ),
),false)) {
function content_62756a50c33520_46294439 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->_assignInScope('title', 'Products');?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_209399623662756a50c2b821_79653510', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "Layouts/member_area.tpl");
}
/* {block 'body'} */
class Block_209399623662756a50c2b821_79653510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_209399623662756a50c2b821_79653510',
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
				<strong>Products</strong>
			</li>
		</ol>		
		
		<h2>Products</h2>
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
					<th>Student Name</th>
					<th>Average Grade</th>
					<th>Curriculum / Occupation</th>
					<th>Actions</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</td>
					<td>Randy S. Smith</td>
					<td>8.7</td>
					<td>Social and human service</td>


					<td>
						<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
							<i class="entypo-info"></i>
							Profile
						</a>
					</td>
				</tr>
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
