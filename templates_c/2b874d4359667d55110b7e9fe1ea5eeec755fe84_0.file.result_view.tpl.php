<?php
/* Smarty version 3.1.39, created on 2021-04-19 18:12:20
  from 'D:\Program Files\XAMPP\htdocs\calc_8\app\views\result_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607dabe4e290e3_32102959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b874d4359667d55110b7e9fe1ea5eeec755fe84' => 
    array (
      0 => 'D:\\Program Files\\XAMPP\\htdocs\\calc_8\\app\\views\\result_view.tpl',
      1 => 1618848738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607dabe4e290e3_32102959 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660563353607dabe4e1b277_36874173', 'content');
?>

                        <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1660563353607dabe4e1b277_36874173 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1660563353607dabe4e1b277_36874173',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="all" style="background-color: #7FFFoo">
    <div id="wrapper" style="background-color: #282828">
			<nav id="nav">
				<ul class="container">
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
results">Wyniki</a></li>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
				</ul>
			</nav>
                                </div>
                                <table class="table result-table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Kwota</th>
                <th scope="col">Lata</th>
                <th scope="col">Procent</th>
                <th scope="col">Rata</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['credit']->value, 'c');
$_smarty_tpl->tpl_vars['c']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->do_else = false;
?>
            <tr style="text-align:center;"><td><?php echo $_smarty_tpl->tpl_vars['c']->value["idwynik"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["czas"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['c']->value["data"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
    </div>
        
                 
			<?php
}
}
/* {/block 'content'} */
}
