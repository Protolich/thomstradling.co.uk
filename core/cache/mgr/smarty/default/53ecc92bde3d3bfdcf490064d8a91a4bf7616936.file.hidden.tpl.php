<?php /* Smarty version Smarty-3.0.4, created on 2014-08-05 20:24:35
         compiled from "/srv/www/thomstradling.co.uk/public_html/manager/templates/default/element/tv/renders/input/hidden.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129963986153e12f73304451-96079182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53ecc92bde3d3bfdcf490064d8a91a4bf7616936' => 
    array (
      0 => '/srv/www/thomstradling.co.uk/public_html/manager/templates/default/element/tv/renders/input/hidden.tpl',
      1 => 1407233389,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129963986153e12f73304451-96079182',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/srv/www/thomstradling.co.uk/public_html/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
" />

<script type="text/javascript">
// <![CDATA[

MODx.on('ready',function() {
    var fld = MODx.load({
    
        xtype: 'hidden'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,value: '<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'),'javascript');?>
'
    
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.add(fld);
        p.doLayout();
    }
});

// ]]>
</script>
