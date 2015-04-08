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
?>
<?php if($view_mode == 'newsletter' || $view_mode == 'full'): //Newsletter email template code started
?>
<div class="container" style="width:700px;padding: 10px;margin: 0px auto;" align="center">
  <table cellpadding="5" cellspacing="0" border="0" width="700" class="header" style="background-color:<?php  print render($content['config']['newsletter']['default']['header_color']); ?>;margin: 0px auto;color: #fff;">
    <tr>
      <td align="left"><div class="logo"><img src="<?php print render($content['context_logo']); ?>"/></div></td>
      <td align="right" valign="bottom"><div style="color:<?php print render($content['config']['newsletter']['default']['subject_color']);?>;font-family:<?php print render($content['config']['newsletter']['default']['subject_font']);?>"><?php print render($content['title']); ?></div></td>
    </tr>
  </table>
  <table cellpadding="0" cellspacing="0" border="0" width="700" class="banner">
    <tr>
      <td><img src="<?php print render($content['config']['banner_image']); ?>"/>
    </td></tr>
  </table>

	<table cellpadding="10" bgcolor="#f3f2f2" style="background-color: #f3f2f2;" width="700" align="center">
    	<tr>
        	<td style="padding-bottom:0px;">

    <table cellpadding="10" cellspacing="0" border="0" class="tblItems" style="background-color: #ffffff;width: 100%;padding: 5px;">
      <tr>
        <td width="10">
        
		<div style="position:relative;">
        <img src="<?php print render($content['featured_session']['image']); ?>" style="max-width: 300px;border: 0px;">
        
        </div>
        
</td>
        <td style="padding-left:5px;" valign="top">
        <table cellpadding="5" cellspacing="0" border="0">
            <tr>
              <td valign="top">
              <p class="item-title" style="margin: 0px;padding: 0px;color:<?php print render($content['config']['newsletter']['default']['eventname_readmore_color']);?>;font-family:<?php print render($content['config']['newsletter']['default']['event_name_font']);?>;font-size: 18px;">
              <?php print render($content['featured_session']['title']); ?>
              </p></td>
            </tr>
            <tr>
              <td><p style="margin: 0px;padding: 0px;color: #666;font-family:<?php print render($content['config']['newsletter']['default']['event_name_font']);?>;font-size:14px;">
<?php print render($content['featured_session']['start']['date']);?><br><?php print render($content['featured_session']['start']['time']); ?> - <?php print render($content['featured_session']['end']['time']); ?>              
              </p></td>
            </tr>
            <tr>
              <td height="40">
              
              <a href="<?php print render($content['featured_session']['eventline_url']); ?>" style="border: 0px;color:<?php print render($content['config']['newsletter']['default']['subject_color']);?>;text-decoration: none;background-color:<?php print render($content['config']['newsletter']['default']['eventname_readmore_color']);?>;font-family: Arial;font-size: 11px;font-style: normal;width: 100px;text-align: center;height:20px;display:block;vertical-align:middle"><span style="position:relative;top:3px;"><?php print render($content['config']['newsletter']['default']['readmore_text']); ?></span></a></td>
            </tr>
          </table></td>
      </tr>
    </table>
            
            
            
           	</td> 
    	</tr>
    </table>

<!-- Featured session Part Ended-->
<!-- Email template body part -->

<!-- Email template body part ended-->
<!-- field session satarted -->

	<?php
		if(isset($content['sessions'])) {
			foreach($content['sessions'] as $key => $session) {
	?>


	<table cellpadding="10" bgcolor="#f3f2f2" style="background-color: #f3f2f2;" width="700" align="center">
    	<tr>
        	<td style="padding-bottom:0px;padding-top:3px">

	<!--tblItems -->
    <table cellpadding="10" cellspacing="0" border="0" class="tblItems" style="background-color: #ffffff;width: 100%;">
      <tr>
        <td width="10">
<img src="<?php print render($session['image']); ?>" style="max-width: 300px;border: 0px;">        
</td>
        <td style="padding-left:5px;" valign="top">
        <table cellpadding="5" cellspacing="0" border="0">
            <tr>
              <td valign="top">              <p class="item-title" style="margin: 0px;padding: 0px;color:<?php print render($content['config']['newsletter']['default']['eventname_readmore_color']);?>;font-family:<?php print render($content['config']['newsletter']['default']['event_name_font']);?>;font-size: 18px;">

              <?php print render($session['title']); ?>
              </p></td>
            </tr>
            <tr>
              <td><p style="margin: 0px;padding: 0px;color: #666;font-family:<?php print render($content['config']['newsletter']['default']['event_name_font']);?>;font-size:14px;">
<?php print render($session['start']['date']);?><br><?php print render($session['start']['time']);?>-<?php print render($session['end']['time']); ?>
</p></td>
            </tr>
            <tr>
              <td height="40">
              
              <a href="<?php print render($session['eventline_url']); ?>" style="border: 0px;color:<?php print render($content['config']['newsletter']['default']['subject_color']);?>;text-decoration: none;background-color:<?php print render($content['config']['newsletter']['default']['eventname_readmore_color']);?>;font-family: Arial;font-size: 11px;font-style: normal;width: 100px;text-align: center;height:20px;display:block;vertical-align:middle"><span style="position:relative;top:3px;"><?php print render($content['config']['newsletter']['default']['readmore_text']); ?></span></a>              
              
			</td>
            </tr>
          </table></td>
      </tr>
    </table>
	<!--tblItems End-->
    
	</td>
    </tr>
    </table>

	<!-- Start & end Date and time -->

		<?php 
			//Start date and time render
			/*			
			print render($session['start']['time_zone']); //time zone
 		
			//End date and time render
			print render($session['end']['date']); // Date
			print render($session['end']['date_time']); // Date & Time
			print render($session['end']['time_zone']); //time zone
			print render($session['url']);
			*/
		?>
        
	<?php }
		} ?>
	<!-- filed session ended -->
	<!-- Footer link -->
	<!-- social link -->

	<table cellpadding="0" bgcolor="#f3f2f2" style="background-color: #f3f2f2;" width="700" align="center">
		<tr>
        	<td height="10"></td>
        </tr>
    	<tr>

        	<td align="center" width="550" valign="top" height="25" style="background-color:#000">
<a href="http://www.harlemsalive.com" target="_blank"><img src="http://harlemsalive.com/website/images/ha-logo.png" style="max-height:15px;position:relative;top:3px;"/></a>            

</td>
</tr>
</table>

</div><!--//End Container div -->    
<!-- Newsletter preview code started -->
<?php endif; ?>
