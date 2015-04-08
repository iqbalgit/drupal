<link rel="stylesheet" href="<?php print base_path().path_to_theme().'/css/print-assets.css'; ?>" />
<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
 /* Context eventline URL */
 //print render($content['context_eventline']);  
 
 /* For featured session */
 //print render($content['featured_session']['qr_code']['large']); //For large qrcode size(100*100)
 //print render($content['featured_session']['qr_code']['small']); //For small qrcode size(50*50)
 
 /* For session */
 //print render($session['qr_code']['small']);
 //print render($session['qr_code']['large']);
 
 /* Banner Image(Newsletter & Print) */
  //print render($content['config']['banner_image']);
 
 /* Newsletter configuration(large)*/
 //print render($content['config']['newsletter']['default']['header_color']); // Header Color
 //print render($content['config']['newsletter']['default']['subject_color']); // Subject Color
 //print render($content['config']['newsletter']['default']['subject_font']); // Subject Font
 //print render($content['config']['newsletter']['default']['eventname_readmore_color']); // Eventname & readmore color
 //print render($content['config']['newsletter']['default']['event_name_font']); // Eventname font
 //print render($content['config']['newsletter']['default']['date_time_font ']); // Date time font
 //print render($content['config']['newsletter']['default']['readmore_text']); // readmore text
 
 /* Print Large configuration*/
 //print render($content['config']['print']['large']['header_color']); // Header Color
 //print render($content['config']['print']['large']['subject_color']); // Subject Color
 //print render($content['config']['print']['large']['subject_font']); // Subject Font
 //print render($content['config']['print']['large']['eventname_readmore_color']); // Eventname & readmore color
 //print render($content['config']['print']['large']['event_name_font']); // Eventname font
 //print render($content['config']['print']['large']['date_time_font ']); // Date time font
 //print render($content['config']['print']['large']['readmore_text']); // readmore text
 
 /* Print small configuration*/
 //print render($content['config']['print']['small']['event_name_font']); // Eventname font
 //print render($content['config']['print']['small']['date_time_color']); // Date time font
 //print render($content['config']['print']['small']['event_name_color']); // Eventname Color
 //print render($content['config']['print']['small']['date_time_font']); // Date time font

?>
<div class="default-print-wrapper">
<table cellpadding="5" cellspacing="0" border="0" id="node-<?php print $node->nid; ?>" class="tblHeader <?php print $classes; ?> clearfix"<?php print $attributes; ?> style="height:202px;" width="100%">
	<tr>
    	<td>
    <img src="<?php if(isset($content['context_logo'])); print render($content['context_logo']); ?>" style="margin: 0px auto;border: 0px;max-height:75px;max-width:150px;">
        </td>
        <td align="right" valign="bottom">
        <p class="subject">
	        <?php print render($content['title']); ?>
        </p>
        </td>
    </tr>
</table><!--//tableHeader -->

<table cellpadding="0" cellspacing="0" border="0" width="100%">
	<tr>
    	<td valign="top" colspan="2">
<table class="default-print" width="100%">
	<tr>
    	<td valign="top" rowspan="2">
        <div class="featured">
		<img src="<?php print render($content['featured_session']['image']); ?>"/>
        <p><span>featured</span></p>
        </div>
</td>
        <td valign="top" width="50%">
        <h3><?php print render($content['featured_session']['title']); ?></h3>
<p><?php print render($content['featured_session']['start']['date']);?><br />
<?php print render($content['featured_session']['start']['time']); ?> - <?php print render($content['featured_session']['end']['time']);?>
</p>
        </td>
    </tr>
    <tr>
    	<td align="right" valign="bottom">
<?php print render($content['featured_session']['qr_code']); ?>   
        </td>
    </tr>
</table>
        </td>
	</tr>
    <tr>        
	<td valign="top" width="50%">
	<?php
		foreach($content['sessions'] as $key => $session) {
	?>

<table class="default-print sessionsTbl" width="100%">
	<tr>
    	<td valign="top" rowspan="2">
        <div class="session">
		<img src="<?php print render($session['image']); ?>"/>
        </div>
</td>
        <td valign="top" width="70%">
        <h3><?php print render($session['title']); ?></h3>
              <p><?php print render($session['start']['date']);?><br />
                <?php print render($session['start']['time']);?> - <?php print render($session['end']['time']); ?> </p>


        </td>
    </tr>
    <tr>
    	<td align="right" valign="bottom"><?php print render($session['qr_code']); ?></td>
    </tr>
</table>
<?php } ?>
    </td>        
    </tr>
    </table>
  <table class="printfooter" cellpadding="0" cellspacing="0" border="0" width="100%;" style="position:relative;">
    <tr>
      <td align="center" width="90%"><span style="position:relative;left:40px;font-size:14px;">Member of <img src="<?php print base_path().path_to_theme().'/images/ha-logo.png'; ?>" class="ha-logo"/></span></td>
      <td align="right" style="padding-right:10px;"><span style="font-size:11px;font-family:Georgia, 'Times New Roman', Times, serif;position:relative;top:2px;">www.harlemsalive.com</span></td>
    </tr>
  </table>

</div>

<!--//wrapper -->
