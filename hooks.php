<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 15.07.2018
 * Time: 16:50
 */


add_hook( 'AdminAreaFooterOutput', 1, function ( $vars ) {

	$return = '<script type="text/javascript" src="/modules/addons/AdvancedEditor/ckeditor/ckeditor.js"></script>';
	$return .= '<script type="text/javascript">$(document).ready(function(){$("form").find(".tinymce").hide();});</script>';
	$return .= '<script type="text/javascript">		
              var dd=1;		
	              $(\'.tinymce\').each(function(){		
		
	              $(this).attr(\'id\',\'tinymce\'+dd);		
			
	              CKEDITOR.replace( \'tinymce\'+dd);		
	              dd=dd+1;		
	              });  		
</script>	';
	return $return;
} );

