<?php
set_time_limit(0);
global  $wpdb;
//require_once (TEMPLATEPATH . '/delete_data.php');
/////////////// TERMS & products START ///////////////
$dummy_image_path = get_template_directory_uri().'/images/dummy/';

require_once(ABSPATH.'wp-admin/includes/taxonomy.php');
$category_array = array('News');
insert_category($category_array);
function insert_category($category_array)
{
	for($i=0;$i<count($category_array);$i++)
	{
		$parent_catid = 0;
		if(is_array($category_array[$i]))
		{
			$cat_name_arr = $category_array[$i];
			for($j=0;$j<count($cat_name_arr);$j++)
			{
				$catname = $cat_name_arr[$j];
				$last_catid = wp_create_category( $catname, $parent_catid);
				if($j==0)
				{
					$parent_catid = $last_catid;
				}
			}
			
		}else
		{
			$catname = $category_array[$i];
			wp_create_category( $catname, $parent_catid);
		}
	}
}

////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Sample Lorem Ipsum Post',
					"post_content"	=>	'What is Lorem Ipsum?<br><br>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). <p>
<br><br>Where does it come from?',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Another Sample Lorem Ipsum Post',
					"post_content"	=>	'
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). <p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Sample Blog Post',
					"post_content"	=>	'<p>Qrem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///

////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'What is Lorem Ipsum?',
					"post_content"	=>	'<p>What is Lorem Ipsum?<br><br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///

////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Letraset sheets',
					"post_content"	=>	'<p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Sample Ipsum Post',
					"post_content"	=>	'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>

<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Lorem ipsum dolors amet',
					"post_content"	=>	'<p>
Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Lorem ipsum dolors site',
					"post_content"	=>	'<p>
Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Sample Lorem Post',
					"post_content"	=>	'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>

<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Another sample Blog post',
					"post_content"	=>	'
<p>Torem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'It has survived not only five',
					"post_content"	=>	'<p>Aorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'The point of using',
					"post_content"	=>	'
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'lorem ipsum will uncover many web sites',
					"post_content"	=>	'
<p>Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Various versions have evolved over the years',
					"post_content"	=>	'
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///
////post start///
$image_array = array();
$post_meta = array();
$post_meta = array(
					"pt_dummy_content"	=> '1',
				);
$post_info[] = array(
					"post_title"	=>	'Various have evolved over the years',
					"post_content"	=>	'
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
Why do we use it?<br><br>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
					"post_meta"		=>	$post_meta,
					"post_image"	=>	$image_array,
					"post_category"	=>	array('News'),
					"post_tags"		=>	array('')
					);
////post end///




insert_posts($post_info);
function insert_posts($post_info)
{
	global $wpdb,$current_user;
	for($i=0;$i<count($post_info);$i++)
	{
		$post_title = $post_info[$i]['post_title'];
		$post_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='post' and post_status in ('publish','draft')");
		if(!$post_count)
		{
			$post_info_arr = array();
			$catids_arr = array();
			$my_post = array();
			$post_info_arr = $post_info[$i];
			if($post_info_arr['post_category'])
			{
				for($c=0;$c<count($post_info_arr['post_category']);$c++)
				{
					$catids_arr[] = get_cat_ID($post_info_arr['post_category'][$c]);
				}
			}else
			{
				$catids_arr[] = 1;
			}
			$my_post['post_title'] = $post_info_arr['post_title'];
			$my_post['post_content'] = $post_info_arr['post_content'];
			if($post_info_arr['post_author'])
			{
				$my_post['post_author'] = $post_info_arr['post_author'];
			}else
			{
				$my_post['post_author'] = 1;
			}
			$my_post['post_status'] = 'publish';
			$my_post['post_category'] = $catids_arr;
			$my_post['tags_input'] = $post_info_arr['post_tags'];
			$last_postid = wp_insert_post( $my_post );
			$post_meta = $post_info_arr['post_meta'];
			if($post_meta)
			{
				foreach($post_meta as $mkey=>$mval)
				{
					update_post_meta($last_postid, $mkey, $mval);
				}
			}
			
			$post_image = $post_info_arr['post_image'];
			if($post_image)
			{
				for($m=0;$m<count($post_image);$m++)
				{
					$menu_order = $m+1;
					$image_name_arr = explode('/',$post_image[$m]);
					$img_name = $image_name_arr[count($image_name_arr)-1];
					$img_name_arr = explode('.',$img_name);
					$post_img = array();
					$post_img['post_title'] = $img_name_arr[0];
					$post_img['post_status'] = 'attachment';
					$post_img['post_parent'] = $last_postid;
					$post_img['post_type'] = 'attachment';
					$post_img['post_mime_type'] = 'image/jpeg';
					$post_img['menu_order'] = $menu_order;
					$last_postimage_id = wp_insert_post( $post_img );
					update_post_meta($last_postimage_id, '_wp_attached_file', $post_image[$m]);					
					$post_attach_arr = array(
										"width"	=>	580,
										"height" =>	480,
										"hwstring_small"=> "height='150' width='150'",
										"file"	=> $post_image[$m],
										//"sizes"=> $sizes_info_array,
										);
					wp_update_attachment_metadata( $last_postimage_id, $post_attach_arr );
				}
			}
		}
	}
}

////////////////////////////////////////////
/////////////// TERMS END ///////////////
$pages_array = array(array('About','Sub Page 1','Sub Page 2'),'Welcome to the Academy','Maths Program Opens Six Classes','Academy New Year','Schedule','Admissions','Academy Services','Contact Us');
$page_info_arr = array();
$page_info_arr['About'] = '
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
  <h4>Sub Heading Here </h4>
   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
 <h5>Sub Heading Here </h5>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
<h5>Sub Heading Here </h5>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
<h5>Sub Heading Here </h5>
  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
';
$page_info_arr['Sub Page 1'] = '
<pLorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<P>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>

<p>Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
';
$page_info_arr['Sub Page 2'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<p>Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero.</p>
<p>Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at,  odio. Donec et ipsum et sapien vehicula nonummy. Suspendisse potenti. Fusce  varius urna id quam. Sed neque mi, varius eget, tincidunt nec, suscipit id,  libero. In eget purus. Vestibulum ut nisl. Donec eu mi sed turpis feugiat  feugiat. Integer turpis arcu, pellentesque eget, cursus et, fermentum ut,  sapien. Fusce metus mi, eleifend sollicitudin, molestie id, varius et, nibh.  Donec nec libero. </p>
';
$page_info_arr['Schedule'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h4>Sub Heading Here </h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
';
$page_info_arr['Admissions'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h4>Sub Heading Here </h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
';
$page_info_arr['Academy Services'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h4>Sub Heading Here </h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
';
$page_info_arr['Contact Us'] = '
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h4>Sub Heading Here </h4>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. Quisque ornare risus quis  ligula. Phasellus tristique purus a augue condimentum adipiscing. Aenean  sagittis. Etiam leo pede, rhoncus venenatis, tristique in, vulputate at, odio.</p>
<h5>Sub Heading Here </h5>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam. Maecenas urna purus, fermentum id, molestie in, commodo  porttitor, felis. Nam blandit quam ut lacus. </p>
';
$page_info_key_arr = array();
$page_info_arr['Welcome to the Academy'] = '<p>Lorem ipsum dolor sit <a href="http://twitter.com/" target="_self">amet</a>, consectetuer adipiscing elit. Quisque sed felis. Aliquam sit amet felis. Mauris semper, velit semper laoreet dictum, quam diam dictum urna, nec <a href="http://www.useit.com/" target="_self">placerat elit nisl in quam</a>. Etiam augue pede, molestie eget, rhoncus at, convallis ut, eros. Aliquam pharetra.</p>
<p><a class="btn" href="http://templatic.com/#">More Details</a> </p>
';
$page_info_key_arr['Welcome to the Academy']['image'] = $dummy_image_path."s1.png";
$page_info_key_arr['Welcome to the Academy']['url'] = 'http://www.templatic.com';

$page_info_arr['Maths Program Opens Six Classes'] = '<p>Lorem ipsum dolor sit <a href="http://twitter.com/" target="_self">amet</a>, consectetuer adipiscing elit. Quisque sed felis. Aliquam sit amet felis. Mauris semper, velit semper laoreet dictum, quam diam dictum urna, nec <a href="http://www.useit.com/" target="_self">placerat elit nisl in quam</a>. Etiam augue pede, molestie eget, rhoncus at, convallis ut, eros. Aliquam pharetra.</p>
';
$page_info_key_arr['Maths Program Opens Six Classes']['image'] = $dummy_image_path."s2.png";
$page_info_key_arr['Maths Program Opens Six Classes']['url'] = 'http://www.templatic.com';

$page_info_arr['Academy New Year'] = '<p>Lorem ipsum dolor sit <a href="http://twitter.com/" target="_self">amet</a>, consectetuer adipiscing elit. Quisque sed felis. Aliquam sit amet felis. Mauris semper, velit semper laoreet dictum, quam diam dictum urna, nec <a href="http://www.useit.com/" target="_self">placerat elit nisl in quam</a>. Etiam augue pede, molestie eget, rhoncus at, convallis ut, eros. Aliquam pharetra.</p>
<p><a class="btn" href="http://templatic.com/#">More Details</a> </p>
';
$page_info_key_arr['Academy New Year']['image'] = $dummy_image_path."s3.png";
$page_info_key_arr['Academy New Year']['url'] = 'http://www.templatic.com';

set_page_info_autorun($pages_array,$page_info_arr);

/////////////// Design Settings START ///////////////
update_option("bizzthemes_feedburner",'http://feeds2.feedburner.com/templatic');
update_option("bizzthemes_feedcount",'<p><a href="http://feeds2.feedburner.com/templatic"><img src="http://feeds2.feedburner.com/~fc/bizzArtic?bg=FFFFFF&fg=444444&anim=0" height="26" width="88" style="border:0" alt="" /></a></p>');

$simple1_slider_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Welcome to the Academy'");
update_option("pag_exclude_$simple1_slider_id",$simple1_slider_id);
$simple2_slider_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Maths Program Opens Six Classes'");
update_option("pag_exclude_$simple2_slider_id",$simple2_slider_id);
$simple3_slider_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like 'Academy New Year'");
update_option("pag_exclude_$simple3_slider_id",$simple3_slider_id);

update_option("bizzthemes_breadcrumbs",'true');
update_option("bizzthemes_footpages","$simple1_slider_id,$simple2_slider_id"); 
update_option("bizzthemes_blogcategory",'News');
update_option("bizzthemes_postcontent_full",'true');
update_option("bizzthemes_sliderpages","$simple1_slider_id,$simple2_slider_id,$simple3_slider_id");
update_option("bizzthemes_block_image",$dummy_image_path.'250x250.png');
update_option("bizzthemes_block_url",'http://www.templatic.com');
update_option("bizzthemes_ad_image_1",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_1",'http://www.templatic.com');
update_option("bizzthemes_ad_image_2",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_2",'http://www.templatic.com');
update_option("bizzthemes_show_ads_top34",'true');
update_option("bizzthemes_ad_image_3",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_3",'http://www.templatic.com');
update_option("bizzthemes_ad_image_4",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_4",'http://www.templatic.com');
update_option("bizzthemes_show_ads_top56",'true');
update_option("bizzthemes_ad_image_5",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_5",'http://www.templatic.com');
update_option("bizzthemes_ad_image_6",$dummy_image_path.'ad-125x125.png');
update_option("bizzthemes_ad_url_6",'http://www.templatic.com');

update_option("bizzthemes_home_name",'Home'); ////
update_option("bizzthemes_search_name",'Search');
update_option("bizzthemes_search_nothing_found",'Nothing found, please search again.');
update_option("bizzthemes_general_tags_name",'Tags');
update_option("bizzthemes_browsing_category",'Browsing Category');
update_option("bizzthemes_browsing_tag",'Browsing Tag');
update_option("bizzthemes_browsing_author",'Browsing Posts of Author');
update_option("bizzthemes_browsing_search",'Browsing Posts filed under Search Term');
update_option("bizzthemes_browsing_day",'Browsing Day');
update_option("bizzthemes_browsing_month",'Browsing Month');
update_option("bizzthemes_browsing_year",'Browsing Year');
update_option("bizzthemes_404error_name",'Error 404 | Nothing found!');
update_option("bizzthemes_404solution_name",'Sorry, but you are looking for something that is not here.');
update_option("bizzthemes_password_protected_name",'This post is password protected. Enter the password to view comments.');
update_option("bizzthemes_comment_responsesa_name",'No Comments');
update_option("bizzthemes_comment_responsesb_name",'One Comment');
update_option("bizzthemes_comment_responsesc_name",'% Comments');
update_option("bizzthemes_comment_trackbacks_name",'Trackbacks For This Post');
update_option("bizzthemes_comment_moderation_name",'Your comment is awaiting moderation.');
update_option("bizzthemes_comment_conversation_name",'Be the first to start a conversation');
update_option("bizzthemes_comment_closed_name",'Comments are closed.');
update_option("bizzthemes_comment_off_name",'Comments are off for this post');
update_option("bizzthemes_comment_reply_name",'Leave a Reply');
update_option("bizzthemes_comment_mustbe_name",'You must be');
update_option("bizzthemes_comment_loggedin_name",'logged in');
update_option("bizzthemes_comment_postcomment_name",'to post a comment.');
update_option("bizzthemes_comment_name_name",'Name');
update_option("bizzthemes_comment_mail_name",'Mail');
update_option("bizzthemes_comment_website_name",'Website');
update_option("bizzthemes_comment_addcomment_name",'Add Comment');
update_option("bizzthemes_comment_justreply_name",'Reply');
update_option("bizzthemes_comment_edit_name",'Edit');
update_option("bizzthemes_comment_delete_name",'Delete');
update_option("bizzthemes_comment_spam_name",'Spam');
update_option("bizzthemes_pagination_first_name",'First');
update_option("bizzthemes_pagination_last_name",'Last');
update_option("bizzthemes_relative_posted",'Posted');
update_option("bizzthemes_relative_ago",'ago');
update_option("bizzthemes_relative_s",'s');
update_option("bizzthemes_relative_year",'year');
update_option("bizzthemes_relative_month",'month');
update_option("bizzthemes_relative_week",'week');
update_option("bizzthemes_relative_day",'day');
update_option("bizzthemes_relative_hour",'hour');
update_option("bizzthemes_relative_minute",'minute');
update_option("bizzthemes_relative_second",'second');
update_option("bizzthemes_relative_moments",'moments');
/////////////// Design Settings END ///////////////
/////////////// WIDGET SETTINGS START ///////////////
$populatpost_info = array();
$populatpost_info = array(
					"title"				=>	'Popular Post',
					"number"			=>	'1',
					);
update_option('widget_popularposts',$populatpost_info);
$archives_info = array();
$archives_comments_info[1] = array(
					"title"				=>	'',
					"count"			 	=>	'0',
					"dropdown"			 =>	'0',
					);
$archives_comments_info['_multiwidget'] = '1';
update_option('widget_archives',$archives_comments_info);
$archives_comments_info = get_option('widget_archives');
krsort($archives_comments_info);
foreach($archives_comments_info as $key1=>$val1)
{
	$archives_info_key = $key1;
	if(is_int($archives_info_key))
	{
		break;
	}
}
$flicker_info = array();
$flicker_info = array(
					"id"				=>	'15184611@N00',
					"number"			=>	'6',
					);
update_option('widget_flickrwidget',$flicker_info);
$sidebars_widgets["sidebar-1"] = array('pt-ads-125x125','pt-popular-posts','archives-'.$archives_info_key,'pt-flickr-photos');
//////////////////////////////////////////////////////
$subscribe_info = array();
$subscribe_info = array(
					"title"				=>	'Subscribe',
					"id"				=>	'templatic/eKPs',
					"text"				=>	'If you did like to stay updated with all our latest news please enter your e-mail address here',
					);
$subscribe_info['_multiwidget'] = '1';
update_option('widget_subscribewidget',$subscribe_info);
$sidebars_widgets["sidebar-2"] = array('pt-subscribe');

/////////////////////////////////////////////////////
$recent_info = array();
$recent_comments_info[1] = array(
					"title"				=>	'Recent Comments',
					"number"			=>	'5',
					);
$recent_comments_info['_multiwidget'] = '1';
update_option('widget_recent-comments',$recent_comments_info);
$recent_comments_info = get_option('widget_recent-comments');
krsort($recent_comments_info);
foreach($recent_comments_info as $key1=>$val1)
{
	$recent_comments_info_key = $key1;
	if(is_int($recent_comments_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-3"] = array('recent-comments-'.$recent_comments_info_key);
////////////////////////////////////////////
$meta_info = array();
$meta_info[1] = array(
					"title"				=>	'Meta',
					);
$meta_info['_multiwidget'] = '1';

update_option('widget_meta',$meta_info);
$meta_info = get_option('widget_meta');
krsort($meta_info);
foreach($meta_info as $key1=>$val1)
{
	$meta_info_key = $key1;
	if(is_int($meta_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-4"] = array('meta-'.$meta_info_key);
////////////////////////////////////////////
$recent_info = array();
$recent_info[1] = array(
					"title"				=>	'Headlines',
					"number"			=>	'5',
					);
$recent_info['_multiwidget'] = '1';
update_option('widget_recent-posts',$recent_info);
$recent_info = get_option('widget_recent-posts');
krsort($recent_info);
foreach($recent_info as $key1=>$val1)
{
	$recent_info_key = $key1;
	if(is_int($recent_info_key))
	{
		break;
	}
}

$sidebars_widgets["sidebar-5"] = array('recent-posts-'.$recent_info_key);
////////////////////////////////////////////
$text_info = array();
$text_info[1] = array(
					"title"				=>	'About Us',
					"text"				=>	'<img src="'.$dummy_image_path.'042.jpg" alt="" style="border:1px solid #ccc; padding:3px; margin-bottom:8px;" width="253" >"Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent aliquam,  justo convallis luctus rutrum, erat nulla fermentum diam, at nonummy quam  ante ac quam." ',
					"filter"			=>	'5',
					);
$text_info['_multiwidget'] = '1';
update_option('widget_text',$text_info);
$text_info = get_option('widget_text');
krsort($text_info);
foreach($text_info as $key1=>$val1)
{
	$text_info_key = $key1;
	if(is_int($text_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-6"] = array('text-'.$text_info_key);
////////////////////////////////////////////
$links_info = array();
$links_comments_info[1] = array(
					"images"			=>	'1',
					"name"			 	=>	'1',
					"description"		 =>	'1',
					"rating"			 =>	'0',
					"category"			 =>	'0',
					);
$links_comments_info['_multiwidget'] = '1';
update_option('widget_links',$links_comments_info);
$links_comments_info = get_option('widget_links');
krsort($links_comments_info);
foreach($links_comments_info as $key1=>$val1)
{
	$links_info_key = $key1;
	if(is_int($links_info_key))
	{
		break;
	}
}
$sidebars_widgets["sidebar-7"] = array("links-$links_info_key");
////////////////////////////////////////////
update_option('sidebars_widgets',$sidebars_widgets);  //save widget iformations
/////////////// WIDGET SETTINGS END ///////////////
function set_page_info_autorun($pages_array,$page_info_arr_arg)
{
	global $post_author,$wpdb,$page_info_key_arr;
	$last_tt_id = 1;
	if(count($pages_array)>0)
	{
		$page_info_arr = array();
		for($p=0;$p<count($pages_array);$p++)
		{
			if(is_array($pages_array[$p]))
			{
				for($i=0;$i<count($pages_array[$p]);$i++)
				{
					$page_info_arr1 = array();
					$page_info_arr1['post_title'] = $pages_array[$p][$i];
					$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p][$i]];
					$page_info_arr1['post_parent'] = $pages_array[$p][0];
					$page_info_arr[] = $page_info_arr1;
				}
			}
			else
			{
				$page_info_arr1 = array();
				$page_info_arr1['post_title'] = $pages_array[$p];
				$page_info_arr1['post_content'] = $page_info_arr_arg[$pages_array[$p]];
				$page_info_arr1['post_parent'] = '';
				$page_info_arr[] = $page_info_arr1;
			}
		}

		if($page_info_arr)
		{
			for($j=0;$j<count($page_info_arr);$j++)
			{
				$post_title = $page_info_arr[$j]['post_title'];
				$post_content = addslashes($page_info_arr[$j]['post_content']);
				$post_parent = $page_info_arr[$j]['post_parent'];
				if($post_parent!='')
				{
					$post_parent_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts where post_title like \"$post_parent\" and post_type='page'");
				}else
				{
					$post_parent_id = 0;
				}
				$post_date = date('Y-m-d H:s:i');
				$post_name = strtolower(str_replace(array("'",'"',"?",".","!","@","#","$","%","^","&","*","(",")","-","+","+"," ",';',',','_'),array('','','','','','','','','','','','','','','','','','','','',',',''),$post_title));
				$post_name_count = $wpdb->get_var("SELECT count(ID) FROM $wpdb->posts where post_title like \"$post_title\" and post_type='page'");
				if($post_name_count>0)
				{
					echo '';
				}else
				{
					$post_sql = "insert into $wpdb->posts (post_author,post_date,post_date_gmt,post_title,post_content,post_name,post_parent,post_type) values (\"$post_author\", \"$post_date\", \"$post_date\",  \"$post_title\", \"$post_content\", \"$post_name\",\"$post_parent_id\",'page')";
					$wpdb->query($post_sql);
					$last_post_id = $wpdb->get_var("SELECT max(ID) FROM $wpdb->posts");
					$guid = get_option('siteurl')."/?p=$last_post_id";
					$guid_sql = "update $wpdb->posts set guid=\"$guid\" where ID=\"$last_post_id\"";
					$wpdb->query($guid_sql);
					$ter_relation_sql = "insert into $wpdb->term_relationships (object_id,term_taxonomy_id) values (\"$last_post_id\",\"$last_tt_id\")";
					$wpdb->query($ter_relation_sql);
					update_post_meta( $last_post_id, 'pt_dummy_content', 1 );
					if($page_info_key_arr)
					{
						$page_info_key_arr_key = $page_info_key_arr[$post_title];
						if($page_info_key_arr_key)
						{
							foreach($page_info_key_arr_key as $key=>$val)
							{
								if($key)
								{
									update_post_meta( $last_post_id, $key, $val );
								}
							}
						}
					}
				}
			}
		}
	}
}
?>