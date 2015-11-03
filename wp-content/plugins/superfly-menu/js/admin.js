jQuery(function($){

	$('#sf-options-wrap form').on('submit', function(e){
		var p = $('.sf_display');
		var current = p.find('.loc_popup')
		var hidden = p.find('input:hidden');
		var user = current.find('[id*=user_status]').val();
		var rule = current.find('[id*=display_rule]').val();
		var desktop = current.find('[id*=display_desktop]').val();
		var mobile = current.find('[id*=display_mobile]').val();
		var ids = current.find('[id*=display_ids]').val();

		var resulted = {
			'user' : {
				'everyone' : user === 'everyone' ? 1 : 0,
				'loggedin' : user === 'loggedin' ? 1 : 0,
				'loggedout' : user === 'loggedout' ? 1 : 0
			},
			'desktop' : {
				'yes' : desktop === 'yes' ? 1 : 0,
				'no' : desktop === 'no' ? 1 : 0
			},
			'mobile' : {
				'yes' : mobile === 'yes' ? 1 : 0,
				'no' : mobile === 'no' ? 1 : 0
			},

			'rule' : {
				'include' : rule === 'include' ? 1 : 0,
				'exclude' : rule === 'exclude' ? 1 : 0
			},
			'location' : {
				'pages' : traversePages(current.find('input[id*=display_page]')),
				'cposts' : traversePages(current.find('input[id*=display_cpost]')),
				'cats' : traversePages(current.find('input[id*=display_cat]')),
				'taxes' : {},
				'langs' : traversePages(current.find('input[id*=display_lang]')),
				'wp_pages' : traversePages(current.find('input[id*=display_wp_page]')),
				'ids': ids.split(',')
			}
		};
		hidden.val(JSON.stringify(resulted));

		showLoadingView()
	})

	function traversePages(pages) {
		var res = {};

		pages.each(function(i, el){
			var t = $(el);
			var val = t.val();
			if (t.is(':checked')) res[val] = 1;
		});

		return res
	}

	function showLoadingView () {
		$('#fade-overlay').addClass('loading');
	}
})