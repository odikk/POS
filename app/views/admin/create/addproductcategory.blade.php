
<div id="create-task-msg-error" class="error-msg widearea"></div>

{{ Form::open(array('route'=>'saveaddcategory', 'id'=>'myform', 'class'=>'form-horizontal' )) }}
	{{Form::hidden('brand_id', $brand_id)}}
	{{Form::hidden('cat_type', 'product')}}

	 		<h3 class="header blue smaller lighter">Enter Categories
	 			<small>
					<i class="icon-double-angle-right"></i>
						Separat by Comma or Enter.
				</small>

					<span id="create-task-ajaxloader" class="ajaxloader" style="display:none;">
						{{HTML::image('vendor/bucketcodes/img/ajax-loader.gif')}}
					</span>
	 		</h3>
	 			<div id="ms-right" name="category"></div>

{{ Form::close()}}

<script>
	$(document).ready(function(){
		/* MAGIC SUGGEST */
		$('#ms-right').magicSuggest();

		$('[data-ref="submit-form"]').on('click',function(e){
			e.preventDefault();
			$(this).ajaxrequest_wrapper({
				extraContent: {'submit' : $(this).attr('value')},
				url: $('form#myform').attr('action'),
				customFormID: 'myform',
				wideAjaxStatusMsg: '.widearea',
				close: true,
				//pageReload: true
				ajaxRefresh:true
			});
		});

	});
</script>