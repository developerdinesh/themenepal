if(jQuery){
	$=jQuery;
}

var themeNepal=function(){

	this.winWidth, this.winHeight, this.docWidth, this.docHeight;
	this.variables=function(){
		this.winWidth=$(window).width();
		this.winHeight=$(window).height();
	};

	this.tn_add_image = function(event, upload_button){
		wordpress_ver="4.4";
		var frame;
        if (wordpress_ver >= "3.5") {
            event.preventDefault();
            if (frame) {
                frame.open();
                return;
            }
            frame = wp.media();
            frame.on( "select", function() {
                var attachment = frame.state().get("selection").first();
                frame.close();
                upload_button.closest('.tn_upload_wrap').find(".tn_upload_img_src").attr("src", attachment.attributes.url);
                upload_button.closest('.tn_upload_wrap').find('.tn_upload_image_link').val(attachment.attributes.url);
            });
            frame.open();
        }else {
            tb_show("", "media-upload.php?type=image&amp;TB_iframe=true");
            return false;
        }
	}


	this.tn_click=function(){
		$this = this;

		$('.add_row .page-title-action').click(function(){
			$(this).parent('.add_row').before($('.tn_repeater_single:first-child').clone());
		});

		$('.tn_repeater').on('click', '.del_row', function(){
			$(this).closest('.tn_repeater_single').remove();
		});

		$(document).on('click', '.tn_add_image', function(event) {
			console.log($(this));
			$this.tn_add_image(event, $(this));
		});

		$(document).on('click', '.tn_remove_image', function(){
        	var clear_button = $(this);
        	clear_button.closest(".tn_upload_wrap").find('.tn_upload_img_src').attr("src", "");
        	clear_button.closest(".tn_upload_wrap").find(".tn_upload_image_link").val("");
        	return false;
    	});

	}
	
	this.tn_load=function(){
		this.variables();
	}

	this.tn_ready=function(){

		this.variables();
		this.tn_click();

	}

	this.tn_resize=function(){
		this.variables();

	}

	this.tn_scroll=function(){
		this.variables();

	}

	this.tn_timer=function(){

	}

	this.init=function(){
		$(window).load(this.tn_load());
		$(document).ready(this.tn_ready());
		$(window).resize(this.tn_resize());
		$(window).scroll(this.tn_scroll());

	}

}

var themeNepalSelf = new themeNepal();
themeNepalSelf.init();